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
                <h2>Sterge noutati</h2>
                <form method="post" action="delete_noutati.php">
                    <label>Titlu:
                        <input type="text" name="title" required>
                    </label>
                    <button type="submit" class="button">Sterge</button>
                </form>
                <br>
                <a href="admin_noutati.php" class="button">Inapoi</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
