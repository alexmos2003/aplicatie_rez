<?php
require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    redirect("index.php");
}

include 'headerlogged.php';

/* === bază + normalizare imagine (forțez /gamehub/ ca să nu depindem de includeri) === */
$BASE = '/gamehub/';

function img_url($value) {
    global $BASE;
    $v = trim((string)$value);
    if ($v === '') return $BASE . 'poze/no-image.jpg';

    // URL absolut? îl folosim ca atare
    if (preg_match('#^https?://#i', $v)) return $v;

    // normalizează separatori + scoate host/prefixe vechi
    $v = str_replace('\\', '/', $v);
    $v = preg_replace('#^https?://[^/]+/#i', '/', $v);
    $v = str_ireplace(['/GameHub-main/', '/gamehub-main/'], '/gamehub/', $v);
    $v = ltrim($v, '/');

    // dacă vine deja cu "gamehub/", taie-l
    if (stripos($v, 'gamehub/') === 0) {
        $v = substr($v, strlen('gamehub/'));
    }

    // dacă nu are "poze/", pune-l
    if (stripos($v, 'poze/') !== 0) {
        // păstrează doar numele fișierului
        $v = 'poze/' . basename($v);
    }

    // dacă nu are extensie corectă în DB, încearcă să găsești fișierul existent
    $docroot = rtrim($_SERVER['DOCUMENT_ROOT'], '/\\');
    $candidateName = pathinfo($v, PATHINFO_FILENAME);
    $ext = strtolower(pathinfo($v, PATHINFO_EXTENSION));
    $pozeDir = $docroot . $BASE . 'poze';

    if (!$ext) {
        foreach (['jpg','jpeg','png','webp','gif','JPG','JPEG','PNG','WEBP','GIF'] as $e) {
            if (is_file($pozeDir . '/' . $candidateName . '.' . $e)) {
                return $BASE . 'poze/' . rawurlencode($candidateName . '.' . $e);
            }
        }
    } else {
        if (is_file($pozeDir . '/' . basename($v))) {
            return $BASE . rtrim($v, '/');
        }
    }

    // fallback: construiește URL-ul relativ la /gamehub/
    return $BASE . rtrim($v, '/');
}

/* --- adaugă în coș --- */
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
    $productId    = (int)($_POST['product_id'] ?? 0);
    $productName  = $_POST['product_name'] ?? '';
    $productPrice = (float)($_POST['product_price'] ?? 0);
    $userId       = (int)$_SESSION["user_id"];

    if ($productId > 0 && $productName !== '') {
        $stmt = $db->prepare("INSERT INTO cos_cumparaturi (user_id, product_id, product_name, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisd", $userId, $productId, $productName, $productPrice);
        $stmt->execute();
        $stmt->close();
    }
}
?>

<main></main>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell">
            <h1 style="text-align:center;margin-bottom:30px;color:#000;font-size:40px;font-weight:bold;">Jocuri</h1>
        </div>
    </div>

    <?php
    $sql = "SELECT id, name, description, price, image_url FROM tabel_jocuri";
    $result = $db->query($sql);

    if ($result && $result->num_rows > 0): ?>
        <div class="grid-x grid-margin-x small-up-1 medium-up-2 large-up-3">
            <?php while ($row = $result->fetch_assoc()): ?>
                <?php
                    $name  = htmlspecialchars($row['name'] ?? '', ENT_QUOTES, 'UTF-8');
                    $desc  = htmlspecialchars($row['description'] ?? '', ENT_QUOTES, 'UTF-8');
                    $price = number_format((float)($row['price'] ?? 0), 2, '.', '');
                    $img   = img_url((string)($row['image_url'] ?? ''));
                    $id    = (int)$row['id'];
                ?>
                <div class="cell">
                    <div class="card" style="border:1px solid #e6e6e6;border-radius:12px;overflow:hidden;background:#fff;">
                        <img src="<?= $img ?>" alt="Imagine <?= $name ?>"
                             style="width:100%;height:280px;object-fit:cover;display:block;"
                             onerror="this.src='<?= $BASE ?>poze/no-image.jpg'">
                        <div class="card-section" style="padding:14px 16px;">
                            <h2 style="margin:0 0 6px;font-size:24px;"><?= $name ?></h2>
                            <p style="margin:0 0 10px;color:#444;line-height:1.45;"><?= $desc ?></p>
                            <div class="grid-x align-justify align-middle" style="margin-top:8px;">
                                <span style="font-weight:700;"><?= $price ?> $</span>
                                <form method="post" action="">
                                    <input type="hidden" name="product_id" value="<?= $id ?>">
                                    <input type="hidden" name="product_name" value="<?= $name ?>">
                                    <input type="hidden" name="product_price" value="<?= $price ?>">
                                    <button type="submit" name="add_to_cart" class="button small success">Adaugă în coș</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else: ?>
        <p>Nu am găsit produse.</p>
    <?php endif; ?>
</div>

<?php include 'footer.php'; ?>
