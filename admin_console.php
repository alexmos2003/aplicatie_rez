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
            <center><h2>Gestionare Console</h2></center>
            </br><center><a href="view_console.php" class="button">Vezi toate consolele</a></center>
            </br><center><a href="add_console1.php" class="button">Adauga consola</a></center>
            </br><center><a href="delete_console1.php" class="button">Sterge consola</a></center>
            </br><center><a href="search_console1.php" class="button">Cauta consola</a></center>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
