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
            <div class="cell medium-8 medium-offset-2 small-10 small-offset-1">
                <section id="about">
                    <div class="grid-container">
                        <div class="grid-x grid-padding-x">
                            <div class="cell text-center">
                            <h2 style="text-align: center; margin-bottom: 30px;color: #000; font-size: 40px; font-weight: bold;">Despre GameHub</h2>
                                <p>Bine ați venit la GameHub, destinația dvs. principală pentru toate nevoile legate de gaming și tehnologie! La GameHub, ne dedicăm să aducem pasionaților de jocuri și tehnologie cele mai bune produse și cele mai recente inovații din industrie.</p>
                                <p>GameHub a fost fondat cu scopul de a oferi o platformă completă unde gameri din întreaga lume pot găsi tot ce au nevoie pentru a-și îmbunătăți experiența de joc. Suntem o echipă de entuziaști ai tehnologiei și gamingului, pasionați de a aduce cele mai noi și mai bune produse pe piață.</p>
                                <p>La GameHub, misiunea noastră este să oferim produse de cea mai înaltă calitate, la prețuri competitive, și să asigurăm satisfacția totală a clienților noștri. Ne străduim să oferim servicii excepționale și suport dedicat pentru a vă ajuta să găsiți exact ceea ce căutați.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

<?php include 'footer.php'; ?>
