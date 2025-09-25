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
        <div class="cell">
            <h1 style="text-align: center; margin-bottom: 30px;color: #000; font-size: 40px; font-weight: bold;">Calculatoare</h1>
        </div>
    </div>

    <?php

    $sql = "SELECT id, name, description, price, image_url FROM tabel_calculatoare";
    $result = $db->query($sql);

    if ($result->num_rows > 0) {
        echo '<div class="grid-x grid-padding-x">';
        while($row = $result->fetch_assoc()) {
            echo '
            <div class="cell medium-4">
                <div class="product">
                    <h2>' . $row["name"] . '</h2>
                    <img src="' . $row["image_url"] . '" alt="Product Image" style="width: 400px; height: 350px;">
                    <p>' . $row["description"] . '</p>
                    <p>Price: ' . $row["price"] . '</p>
                    <form method="post" action="cos.php">
                        <input type="hidden" name="id" value="' . $row["id"] . '">
                        <input type="hidden" name="name" value="' . $row["name"] . '">
                        <input type="hidden" name="price" value="' . $row["price"] . '">
                        <button type="submit" class="button">Cumpără</button>
                    </form>
                </div>
            </div>';
        }
        echo '</div>';
    } else {
        echo "<p>No products found.</p>";
    }
    ?>
</div>

<?php include 'footer.php'; ?>
