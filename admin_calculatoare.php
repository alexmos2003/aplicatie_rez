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
        <center><h2>Gestionare Calculatoare</h2></center>
            </br><center><a href="view_calculatoare.php" class="button">Vezi toate calculatoarele</a></center>
            </br><center><a href="add_calculatoare1.php" class="button">Adauga calculator</a></center>
            </br><center><a href="delete_calculatoare1.php" class="button">Sterge calculator</a></center>
            </br><center><a href="search_calculatoare1.php" class="button">Cauta calculator</a></center>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
