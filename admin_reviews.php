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
        <center><h2>Reviews Operations</h2></center>
            </br><center><a href="view_reviews.php" class="button">View All Reviews</a></center>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
