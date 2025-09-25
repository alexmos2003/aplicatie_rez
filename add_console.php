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
            <h2>Adauga console</h2>
            </br>

            <?php
            $db = new mysqli("localhost", "root", "", "gamehub");

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];
                $image = $_FILES['image_url']['name'];
                $target_dir = "images/";
                $target_file = $target_dir . basename($image);

                if (!is_dir($target_dir)) {
                    mkdir($target_dir, 0777, true);
                }

                if (empty($name) || empty($price)) {
                    echo "You must enter a name and price.";
                } else {
                    if (move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file)) {
                        $sql = "INSERT INTO tabel_console (name, description, price, image_url) VALUES ('$name', '$description', '$price', '$target_file')";
                        $results = mysqli_query($db, $sql);
                        if (!$results) {
                            die('Invalid query: ' . mysqli_error($db));
                        } else {
                            echo "Product added successfully.</br>";
                        }
                    } else {
                        echo "<p>Failed to upload image</p>";
                    }
                }
            }

            $db->close();
            ?>

            <a href="admin_console.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
