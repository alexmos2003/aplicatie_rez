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
            <center><h2>Operatiuni Administrative</h2></center>
            </br><center><a href="admin_users.php" class="button">Tabel Utilizatori</a></center>
            </br><center><a href="admin_jocuri.php" class="button">Tabel Jocuri</a></center>
            </br><center><a href="admin_console.php" class="button">Tabel Console</a></center>
            </br><center><a href="admin_calculatoare.php" class="button">Tabel Calculatoare</a></center>
            </br><center><a href="admin_periferice.php" class="button">Tabel Periferice</a></center>
            </br><center><a href="admin_noutati.php" class="button">Tabel Noutati</a></center>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
