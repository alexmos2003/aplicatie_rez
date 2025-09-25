<?php
require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    redirect("index.php");
}

include 'headerlogged.php';
?>

<main>

</main>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <h2>Adauga jocuri</h2>
            <form method="post" action="adauga.php" enctype="multipart/form-data">
                <label>Nume:
                    <input type="text" name="name" required>
                </label>
                <label>Descriere:
                    <textarea name="description" required></textarea>
                </label>
                <label>Pret:
                    <input type="text" name="price" required>
                </label>
                <label>Categorie:
                    <input type="radio" name="categorie" value="Action" required> Action
                    <input type="radio" name="categorie" value="Adventure"> Adventure
                    <input type="radio" name="categorie" value="RPG"> RPG
                    <input type="radio" name="categorie" value="Racing"> Racing
                    <input type="radio" name="categorie" value="Horror"> Horror
                </label>
                <label>Imagine:
                    <input type="file" name="image_url" accept="image/*" required>
                </label>
                <button type="submit" class="button">Adauga</button>
            </form>
            <br>
            <a href="admin_jocuri.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
