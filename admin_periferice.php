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
            <center><h2>Gestionare Periferice</h2></center>
            </br><center><a href="view_periferice.php" class="button">Vezi toate perifericele</a></center>
            </br><center><a href="add_periferice1.php" class="button">Adauga periferice</a></center>
            </br><center><a href="delete_periferice1.php" class="button">Sterge periferice</a></center>
            </br><center><a href="search_periferice1.php" class="button">Cauta periferice</a></center>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
