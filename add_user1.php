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
            <h2>Adauga utilizator</h2>
            <form method="post" action="add_user.php">
                <label>Nume:
                    <input type="text" name="nume" required>
                </label>
                <label>Username:
                    <input type="text" name="username" required>
                </label>
                <label>Parola:
                    <input type="password" name="password" required>
                </label>
                <label>Tip:
                    <select name="type" required>
                        <option value="1">Admin</option>
                        <option value="2">User</option>
                    </select>
                </label>
                <button type="submit" class="button">Adauga</button>
            </form>
            <br>
            <a href="admin_users.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
