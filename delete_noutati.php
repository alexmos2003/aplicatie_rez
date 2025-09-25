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
                </br>

                <?php
                $db = mysqli_connect("localhost", "root", "", "gamehub");

                if (!$db) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $title = $_POST['title'];

                    if (empty($title)) {
                        echo "You must enter the news title.";
                    } else {
                        $result = mysqli_query($db, "DELETE FROM tabel_noutati WHERE title = '$title'");

                        if (!$result) {
                            die('Invalid query: ' . mysqli_error($db));
                        } else {
                            if (mysqli_affected_rows($db) > 0) {
                                echo "The news titled '" . htmlspecialchars($title) . "' has been deleted.";
                            } else {
                                echo "No news found with the title '" . htmlspecialchars($title) . "'.";
                            }
                        }
                    }
                }

                mysqli_close($db);
                ?>

                </br>
                <a href="admin_noutati.php" class="button">Inapoi</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
