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
                <h2>Adauga noutati</h2>
                </br>

                <?php

                $db = new mysqli("localhost", "root", "", "gamehub");

                if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $content = $_POST['content'];
                    $image = $_FILES['image_url']['name'];
                    $target_dir = "images/";
                    $target_file = $target_dir . basename($image);

                    if (!is_dir($target_dir)) {
                        mkdir($target_dir, 0777, true);
                    }

                    if (empty($title)) {
                        $nameErr = "You must enter a title.";
                        echo $nameErr;
                    } else {
                        if (move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file)) {
                            $sql = "INSERT INTO tabel_noutati (title, description, content, image_url, published_date) VALUES ('$title', '$description', '$content', '$target_file', NOW())";
                            $results = mysqli_query($db, $sql);
                            if (!$results) {
                                die('Invalid query: ' . mysqli_error($db));
                            } else {
                                echo "News added successfully.</br>";
                            }
                        } else {
                            echo "<p>Failed to upload image</p>";
                        }
                    }
                }

                $db->close();
                ?>

                <a href="admin_noutati.php" class="button">Inapoi</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
