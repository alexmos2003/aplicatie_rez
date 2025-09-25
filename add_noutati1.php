<?php
require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    redirect("index.php");
}

include 'headerlogged.php';
?>

<main>
    <div class="grid-container">
        <div class="grid-x grid-padding-x">
            <div class="large-12 cell">
                <h2>Adauga noutati</h2>
                <form method="post" action="add_noutati.php" enctype="multipart/form-data">
                    <label>Titlu:
                        <input type="text" name="title" required>
                    </label>
                    <label>Descriere:
                        <textarea name="description" required></textarea>
                    </label>
                    <label>Continut:
                        <textarea name="content" required></textarea>
                    </label>
                    <label>Imagine:
                        <input type="file" name="image_url" accept="image/*" required>
                    </label>
                    <button type="submit" class="button">Adauga</button>
                </form>
                <br>
                <a href="admin_noutati.php" class="button">Inapoi</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
