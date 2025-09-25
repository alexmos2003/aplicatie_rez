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
                <h2>Editeaza</h2>

                <?php
                $db = new mysqli("localhost", "root", "", "gamehub");

                if ($db->connect_error) {
                    die("Connection failed: " . $db->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
                    $id = $_GET['id'];

                    $sql = "SELECT * FROM tabel_noutati WHERE id='$id'";
                    $result = mysqli_query($db, $sql);

                    if (!$result) {
                        die('Invalid query: ' . mysqli_error($db));
                    }

                    if (mysqli_num_rows($result) == 1) {
                        $row = mysqli_fetch_assoc($result);
                        ?>

                        <form method="post" action="edit_noutati.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                            <label>Title:
                                <input type="text" name="title" value="<?php echo htmlspecialchars($row['title']); ?>" required>
                            </label>
                            <label>Description:
                                <textarea name="description" required><?php echo htmlspecialchars($row['description']); ?></textarea>
                            </label>
                            <label>Content:
                                <textarea name="content" required><?php echo htmlspecialchars($row['content']); ?></textarea>
                            </label>
                            <label>Image:
                                <input type="file" name="image_url" accept="image/*">
                            </label>
                            <button type="submit" class="button">Update</button>
                        </form>

                        <?php
                    } else {
                        echo "</br>No record found with this ID!";
                    }
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
                    $id = $_GET['id'];
                    $title = $_POST['title'];
                    $description = $_POST['description'];
                    $content = $_POST['content'];

                    // Fetch the current image URL
                    $current_image_sql = "SELECT image_url FROM tabel_noutati WHERE id='$id'";
                    $current_image_result = mysqli_query($db, $current_image_sql);
                    $current_image_row = mysqli_fetch_assoc($current_image_result);
                    $image_url = $current_image_row['image_url'];

                    if (!empty($_FILES['image_url']['name'])) {
                        $image = $_FILES['image_url']['name'];
                        $target_dir = "images/";
                        $target_file = $target_dir . basename($image);

                        if (move_uploaded_file($_FILES['image_url']['tmp_name'], $target_file)) {
                            $image_url = $target_file;
                        }
                    }

                    $sql_upd = "UPDATE tabel_noutati SET title='$title', description='$description', content='$content', image_url='$image_url' WHERE id='$id'";

                    $result_upd = mysqli_query($db, $sql_upd);

                    if (!$result_upd) {
                        die('Invalid query: ' . mysqli_error($db));
                    } else {
                        echo "News updated successfully.</br>";
                    }
                }

                $db->close();
                ?>

                </br>
                <a href="admin_noutati.php" class="button">Inapoi</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
