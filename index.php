<?php
session_start();
include 'connection.php';

// Dacă ești deja logat, mergi direct la dashboard
if (isset($_SESSION["user_id"]) && $_SESSION["user_id"] != "") {
    header("Location: dashboard.php");
    exit();
}

$title = "Autentificare";
$message = "";

// Procesare login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mode']) && $_POST['mode'] === 'loginare') {
    $username = trim($_POST['username']);
    $pass = trim($_POST['user_password']);

    if ($username !== "" && $pass !== "") {
        // 🚨 Ignorăm baza de date, acceptăm orice user/parolă
        $_SESSION["user_id"] = 1; // punem un ID fictiv
        $_SESSION["name"] = $username;
        $_SESSION["username"] = $username;
        $_SESSION["titlu"] = "Titlu Demo";
        $_SESSION["continut"] = "Bine ai venit, $username!";

        // Redirect la dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $message = "⚠️ Completează toate câmpurile!";
    }
}
?>

<?php include 'header.php'; ?>

<div class="page-header">
    <h1><?php echo $title; ?></h1>
</div>

<?php if ($message != ""): ?>
    <div style="color: red; font-weight: bold; margin-bottom: 10px;">
        <?php echo $message; ?>
    </div>
<?php endif; ?>

<form method="post" action="index.php">
    <input type="hidden" name="mode" value="loginare">

    <div>
        Username: <input type="text" name="username" required>
    </div>
    <div>
        Parola: <input type="password" name="user_password" required>
    </div>
    <div>
        <button type="submit" class="success button">Logare</button>
    </div>
</form>

<?php include 'footer.php'; ?>
