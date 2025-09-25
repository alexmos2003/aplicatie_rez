<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameHub</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<?php
require_once("connection.php");
if (session_status() === PHP_SESSION_NONE) session_start();

if (!isset($_SESSION["user_id"])) {
    redirect("logout.php");
}

$IdUser = (int)$_SESSION["user_id"];

/* === numele paginii curente (fără query string), lower-case === */
$page = strtolower(basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));

/* === pagini permise mereu (nu forțăm logout pe ele) === */
$alwaysAllowed = [
     'acasa.php',
     'jocuri.php',
    'vizualizare.php',
    'viewcos.php',
    // dacă mai adaugi pagini publice pt userii logați, pune-le aici:
    'calculatoare.php','console.php','periferice.php','noutati.php'
];

/* === număr produse în coș (pentru linkul din meniu) === */
$cartCount = 0;
if ($stmt = $db->prepare("SELECT COUNT(*) FROM cos_cumparaturi WHERE user_id=?")) {
    $stmt->bind_param("i", $IdUser);
    $stmt->execute();
    $stmt->bind_result($cartCount);
    $stmt->fetch();
    $stmt->close();
}

/* === query pentru meniu/drepturi === */
$query = "SELECT pagini.Meniu, pagini.nume_meniu, pagini.pagina
          FROM pagini
          INNER JOIN drepturi ON drepturi.IdPage = pagini.Id
          WHERE drepturi.IdUser = '$IdUser'
          ORDER BY pagini.`order` ASC";

$sql1 = mysqli_query($db, $query);
$rows = $sql1 ? mysqli_num_rows($sql1) : 0;

/* === sw: are drept pe pagina curentă? === */
$sw = 0;

/* 1) dacă e în whitelist, e ok din start */
if (in_array($page, $alwaysAllowed, true)) {
    $sw = 1;
}

/* 2) verificăm și drepturile din DB */
if ($rows > 0) {
    // colectăm paginile din DB (normalizate lower-case)
    $menuItems = [];
    while ($myrow = mysqli_fetch_array($sql1, MYSQLI_ASSOC)) {
        $pg = strtolower(trim($myrow["pagina"]));
        if ($pg === $page) {
            $sw = 1;
        }
        $menuItems[] = $myrow;
    }
}

/* === dacă utilizatorul are drepturi în DB și pagina NU e permisă, scoatem la logout === */
if ($rows > 0 && $sw === 0) {
    redirect("logout.php");
}

/* === render meniu === */
echo '<div class="grid-container">';
echo '  <div class="top-bar">';
echo '    <br><br>';
echo '    <div class="top-bar-left">';
echo '      <ul class="menu">';
echo '<li class="menu-text"><a href="acasa.php" style="color:#fff;text-decoration:none;">GameHub</a></li>';


if (!empty($menuItems)) {
    foreach ($menuItems as $myrow) {
        if ((int)$myrow["Meniu"] === 1) {
            echo "<li><a href='" . htmlspecialchars($myrow["pagina"]) . "'>" . htmlspecialchars($myrow["nume_meniu"]) . "</a></li>";
        }
    }
}
echo '      </ul>';
echo '    </div>';

echo '    <div class="top-bar-right">';
echo '      <ul class="menu">';
echo '        <li><a href="viewcos.php">Coșul meu' . ($cartCount ? ' ('.$cartCount.')' : '') . '</a></li>';
echo '        <li><a href="logout.php" class="button">Logout</a></li>';
echo '      </ul>';
echo '    </div>';

echo '  </div>';
echo '</div>';
?>
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
