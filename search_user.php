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
                <h2>Rezultate</h2>
                </br>

                <?php
                $db = mysqli_connect("localhost", "root", "", "gamehub");

                $SW = 0;
                if (empty($_POST["username"])) {
                    $nameErr = "It's necessary to enter the username.";
                    echo $nameErr;
                } else {
                    $username = $_POST["username"];
                    $sql = "SELECT id, nume, username, password, type FROM users WHERE username LIKE '%$username%'";
                    $SW = 1;
                }

                if ($SW == 1) {
                    $result = mysqli_query($db, $sql);

                    $nr = mysqli_num_rows($result);
                    if ($nr > 0) {
                        echo "<table>";
                        echo "<thead><tr><th>Name</th><th>Username</th><th>Password</th><th>Type</th><th>Actions</th></tr></thead><tbody>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr><td>";
                            echo $row["nume"];
                            echo "</td><td>";
                            echo $row["username"];
                            echo "</td><td>";
                            echo $row["password"];
                            echo "</td><td>";
                            echo ($row["type"] == 1 ? "Admin" : "User");
                            echo "</td><td>";
                            echo "<a href='edit_user.php?id=" . $row["id"] . "' class='button'>Edit</a>";
                            echo "</td></tr>";
                        }
                        echo "</tbody></table>";
                    } else {
                        echo "</br>No records found matching the search!";
                    }
                }

                mysqli_close($db);
                ?>

                </br>
                <a href="admin_users.php" class="button">Inapoi</a>
            </div>
        </div>
    </div>
</main>

<?php include 'footer.php'; ?>
