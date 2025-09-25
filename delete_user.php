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
            <h2>Delete User</h2>
            </br>

            <?php
            $db = mysqli_connect("localhost", "root", "", "gamehub");

            if (!$db) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["username"])) {
                    echo "It's necessary to type the user's username.";
                } else {
                    $username = $_POST["username"];
                    $result = mysqli_query($db, "DELETE FROM users WHERE username = '$username' AND type = 2");

                    if (!$result) {
                        die('Invalid query: ' . mysqli_error($db));
                    } else {
                        if (mysqli_affected_rows($db) > 0) {
                            echo "The user '" . htmlspecialchars($username) . "' has been deleted.";
                        } else {
                            echo "Didn't find the user named '" . htmlspecialchars($username) . "'.";
                        }
                    }
                }
            }

            mysqli_close($db);
            ?>

            </br>
            </br>
            <a href="view_users.php" class="button">View All Users</a></br>
            <a href="admin_users.php" class="button">Back to Users</a>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
