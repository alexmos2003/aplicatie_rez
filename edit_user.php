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
            <h2>Editeaza </h2>

            <?php

            $db = new mysqli("localhost", "root", "", "gamehub");

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = "SELECT * FROM users WHERE id='$id'";
                $result = mysqli_query($db, $sql);

                if (!$result) {
                    die('Invalid query: ' . mysqli_error($db));
                }

                if (mysqli_num_rows($result) == 1) {
                    $row = mysqli_fetch_assoc($result);
                    ?>

                    <form method="post" action="edit_user.php?id=<?php echo $id; ?>">
                        <div class="row">
                            <div class="large-8 medium-8 small-12 columns">
                                Name: <input type="text" name="nume" value="<?php echo $row['nume']; ?>" required>
                                Username: <input type="text" name="username" value="<?php echo $row['username']; ?>" required>
                                Password: <input type="text" name="password" value="<?php echo $row['password']; ?>" required>
                                Type: 
                                <select name="type" required>
                                    <option value="1" <?php if($row['type'] == '1') echo 'selected'; ?>>Admin</option>
                                    <option value="2" <?php if($row['type'] == '2') echo 'selected'; ?>>User</option>
                                </select>
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
                $nume = $_POST['nume'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $type = $_POST['type'];

                $sql_upd = "UPDATE users SET nume='$nume', username='$username', password='$password', type='$type' WHERE id='$id'"; 

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
            <a href="admin_users.php" class="button">Inapoi</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
