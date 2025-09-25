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
            <h2>Sterge utilizator</h2>
            <form method="post" action="delete_user.php">
                <label>Username:
                    <input type="text" name="username" required>
                </label>
                <button type="submit" class="button">Sterge</button>
            </form>
            <br>
            <a href="admin_users.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
