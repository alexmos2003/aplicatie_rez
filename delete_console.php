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
            <h2>Sterge console</h2>
            </br>

            <?php
            $db = mysqli_connect("localhost", "root", "", "gamehub");

            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST["name"];

                if (empty($name)) {
                    echo "You must enter the product's name.";
                } else {
                    $result = mysqli_query($db, "DELETE FROM tabel_console WHERE name = '$name'");

                    if (!$result) {
                        die('Invalid query: ' . mysqli_error($db));
                    } else {
                        if (mysqli_affected_rows($db) > 0) {
                            echo "The product '" . htmlspecialchars($name) . "' has been deleted.";
                        } else {
                            echo "No product found with the name '" . htmlspecialchars($name) . "'.";
                        }
                    }
                }
            }

            mysqli_close($db);
            ?>

            </br>
            </br>
            <a href="admin_console.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
