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
            <h2>Editeaza</h2>

            <?php
            $db = new mysqli("localhost", "root", "", "gamehub");

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "SELECT * FROM tabel_calculatoare WHERE id='$id'";
                $result = mysqli_query($db, $sql);

                if (!$result) {
                    die('Invalid query: ' . mysqli_error($db));
                }

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    ?>

                    <form method="post" action="edit_calculatoare.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="row">
                            <div class="large-8 medium-8 small-12 columns">
                                Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
                                Description: <textarea name="description" required><?php echo $row['description']; ?></textarea>
                                Price: <input type="text" name="price" value="<?php echo $row['price']; ?>" required>
                                <label>Image:
                                    <input type="file" name="image_url" accept="image/*">
                                </label>
                            </div>
                            <div class="large-8 medium-8 small-8 columns">
                                <button type="submit" class="button" name="btnSubmit">Update</button>
                            </div>
                        </div>
                    </form>

                    <?php
                } else {
                    echo "</br>No record found with this ID!";
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
                $id = $_GET['id'];
                $name = $_POST['name'];
                $description = $_POST['description'];
                $price = $_POST['price'];

                if (!empty($_FILES['image_url']['name'])) {
                    $image = $_FILES['image_url']['name'];
                    $target_dir = "images/";
                    $target_file = $target_dir . basename($image);

                    if (move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file)) {
                        $sql_upd = "UPDATE tabel_calculatoare SET name='$name', description='$description', price='$price', image_url='$target_file' WHERE id='$id'";
                    } else {
                        echo "<p>Failed to upload image</p>";
                        $sql_upd = "UPDATE tabel_calculatoare SET name='$name', description='$description', price='$price' WHERE id='$id'";
                    }
                } else {
                    $sql_upd = "UPDATE tabel_calculatoare SET name='$name', description='$description', price='$price' WHERE id='$id'";
                }

                $result_upd = mysqli_query($db, $sql_upd);

                if (!$result_upd) {
                    die('Invalid query: ' . mysqli_error($db));
                } else {
                    echo "The record has been updated.</br>";
                }
            }

            $db->close();
            ?>

            </br>
            <a href="admin_calculatoare.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
