<?php
require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    redirect("index.php");
}

include 'headerlogged.php';
?>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="large-12 cell">
            <center><h2>Gestionare Noutati</h2></center>
            </br><center><a href="view_noutati.php" class="button">Vezi toate noutatile</a></center>
            </br><center><a href="add_noutati1.php" class="button">Adauga noutati</a></center>
            </br><center><a href="delete_noutati1.php" class="button">Sterge noutati</a></center>
            </br><center><a href="search_noutati1.php" class="button">Cauta noutati</a></center>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
