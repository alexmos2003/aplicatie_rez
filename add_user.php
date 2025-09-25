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
            <h2>Add User</h2>
            </br>

            <?php
            $db = new mysqli("localhost", "root", "", "gamehub");

            if ($db->connect_error) {
                die("Connection failed: " . $db->connect_error);
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nume = $_POST['nume'];
                $username = $_POST['username'];
                $password = $_POST['password'];
                $type = $_POST['type'];

                if (empty($nume) || empty($username) || empty($password) || empty($type)) {
                    echo "All fields are required.";
                } else {
                    $sql = "INSERT INTO users (nume, username, password, type) VALUES ('$nume', '$username', '$password', '$type')";
                    $results = mysqli_query($db, $sql);

                    if (!$results) {
                        die('Invalid query: ' . mysqli_error($db));
                    } else {
                        echo "User added successfully.</br>";
                    }
                }
            }

            $db->close();
            ?>

            <a href="admin_users.php" class="button">Back to Users</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
