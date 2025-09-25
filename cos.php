<?php
require_once("connection.php");

if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") {
    redirect("index.php");
}

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['delete'])) {
        $product_id = $_POST['product_id'];
        $stmt = $db->prepare("DELETE FROM cos_cumparaturi WHERE user_id = ? AND product_id = ?");
        $stmt->bind_param("ii", $_SESSION["user_id"], $product_id);
        $stmt->execute();
        $stmt->close();
    } elseif (isset($_POST['place_order'])) {
        // Aici se procesează comanda
        $nume = $_POST['nume'];
        $adresa = $_POST['adresa'];
        $telefon = $_POST['telefon'];
        $card = $_POST['card'];
        $expirare = $_POST['expirare'];
        $cvv = $_POST['cvv'];

        // Inserează detaliile comenzii în tabelul de comenzi (presupunând că ai un tabel orders)
        $stmt = $db->prepare("INSERT INTO orders (user_id, nume, adresa, telefon, card, expirare, cvv, order_date) VALUES (?, ?, ?, ?, ?, ?, ?, NOW())");
        $stmt->bind_param("issssss", $_SESSION["user_id"], $nume, $adresa, $telefon, $card, $expirare, $cvv);
        $stmt->execute();
        $order_id = $stmt->insert_id;
        $stmt->close();

        // Mută produsele din coș în tabelul de detalii ale comenzii (presupunând că ai un tabel order_details)
        $stmt = $db->prepare("INSERT INTO order_details (order_id, product_id, product_name, price) SELECT ?, product_id, product_name, price FROM cos_cumparaturi WHERE user_id = ?");
        $stmt->bind_param("ii", $order_id, $_SESSION["user_id"]);
        $stmt->execute();
        $stmt->close();

        // Șterge produsele din coș
        $stmt = $db->prepare("DELETE FROM cos_cumparaturi WHERE user_id = ?");
        $stmt->bind_param("i", $_SESSION["user_id"]);
        $stmt->execute();
        $stmt->close();

        $message = "Comanda ta a fost înregistrată cu succes!";
    } else {
        $user_id = $_SESSION["user_id"];
        $product_id = $_POST["id"];
        $product_name = $_POST["name"];
        $price = $_POST["price"];

        $stmt = $db->prepare("INSERT INTO cos_cumparaturi (user_id, product_id, product_name, price) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("iisd", $user_id, $product_id, $product_name, $price);
        $stmt->execute();
        $stmt->close();
    }
}

include 'headerlogged.php';
?>

<main>

</main>

<div class="grid-container">
    <div class="grid-x grid-padding-x">
        <div class="cell medium-8 medium-offset-2 small-10 small-offset-1">
            <section id="about">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell text-center">
                            <h2 style="text-align: center; margin-bottom: 30px;color: #000; font-size: 40px; font-weight: bold;">Coș de cumpărături</h2>
                        </div>
                    </div>
                    <?php
                    if ($message != "") {
                        echo '<div class="callout success">' . $message . '</div>';
                    }
                    $sql = "SELECT * FROM cos_cumparaturi WHERE user_id = ?";
                    $stmt = $db->prepare($sql);
                    $stmt->bind_param("i", $_SESSION["user_id"]);
                    $stmt->execute();
                    $result = $stmt->get_result();

                    $total_price = 0; // Variabila pentru calcularea prețului total

                    if ($result->num_rows > 0) {
                        echo '<table>';
                        echo '<tr><th>Produs</th><th>Preț</th><th>Acțiune</th></tr>';
                        while ($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td>' . htmlspecialchars($row["product_name"]) . '</td>';
                            echo '<td>' . htmlspecialchars($row["price"]) . ' $</td>';
                            echo '<td>
                                    <form method="post" action="">
                                        <input type="hidden" name="product_id" value="' . $row["product_id"] . '">
                                        <button type="submit" name="delete" class="button alert">Șterge</button>
                                    </form>
                                  </td>';
                            echo '</tr>';
                            $total_price += $row["price"]; // Adaugă prețul produsului la prețul total
                        }
                        echo '</table>';

                        // Adaugă butonul "Confirmă Comanda" și prețul total
                        echo '<div style="text-align: center; margin-top: 20px;">';
                        echo '<p>Preț total: ' . number_format($total_price, 2) . ' $</p>';
                        echo '<button type="button" class="button success" onclick="document.getElementById(\'order-form\').style.display=\'block\'">Confirmă Comanda</button>';
                        echo '</div>';
                    } else {
                        echo "<p>Coșul tău este gol.</p>";
                    }

                    $stmt->close();
                    ?>
                </div>
            </section>

            <!-- Order Form -->
            <div id="order-form" style="display:none; margin-top: 20px;">
                <form method="post" action="">
                    <input type="hidden" name="place_order" value="1">
                    <h3>Detalii Comandă</h3>
                    <label for="nume">Nume:</label>
                    <input type="text" id="nume" name="nume" required>
                    <label for="adresa">Adresă:</label>
                    <input type="text" id="adresa" name="adresa" required>
                    <label for="telefon">Telefon:</label>
                    <input type="text" id="telefon" name="telefon" required>
                    <label for="card">Număr Card:</label>
                    <input type="text" id="card" name="card" required>
                    <label for="expirare">Data Expirare:</label>
                    <input type="text" id="expirare" name="expirare" required>
                    <label for="cvv">CVV:</label>
                    <input type="text" id="cvv" name="cvv" required>
                    <button type="submit" class="button success">Trimite Comanda</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
