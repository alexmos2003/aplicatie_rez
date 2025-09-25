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
    <div class="cell text-center">
        <h1 style="text-align: center; margin-bottom: 30px;color: #000; font-size: 40px; font-weight: bold;">Bine ai venit pe GameHub!</h1>
    </div>
</div>
<div class="cell text-center">
  <p1 style="font-size: 25px;">Cele mai bune jocuri luna aceasta </p1>
</div>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/helljpg.jpg" alt="Space" >
          <figcaption class="orbit-caption">Helldivers 2</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/p.jpg" alt="Space">
          <figcaption class="orbit-caption">Call of duty Vanguard</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/dafpg.jpg" alt="Space">
          <figcaption class="orbit-caption">F1 2023</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/dajpg.jpg" alt="Space">
          <figcaption class="orbit-caption">Dead Island 2</figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

<a class="button expanded" href="jocuri.php">Jocuri</a>

<div class="grid-x grid-padding-x">
    <div class="cell text-center">
        <h1>Calculatoare </h1>
    </div>
</div>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/pc1.jpg" alt="Space" style="width: 50%;">
          <figcaption class="orbit-caption">PC Gaming GREUCEANU</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/pc2.jpg" alt="Space">
          <figcaption class="orbit-caption">PC Gaming DRAGON</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/pc3.jpg" alt="Space">
          <figcaption class="orbit-caption">PC Gaming BALAUR</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/pc4.jpg" alt="Space">
          <figcaption class="orbit-caption">PC Gaming ZMEU Legendar Hyper</figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

<a class="button expanded" href="calculatoare.php">Calculatoare</a>

<div class="grid-x grid-padding-x">
    <div class="cell text-center">
        <h1>Console</h1>
    </div>
</div>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
  <div class="orbit-wrapper">
    <div class="orbit-controls">
      <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
      <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
    </div>
    <ul class="orbit-container">
      <li class="is-active orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/Consola1.jpg" alt="Space">
          <figcaption class="orbit-caption">Consola Sony PlayStation 5 Slim</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/Consola2.jpg" alt="Space">
          <figcaption class="orbit-caption">Consola Sony PlayStation 4</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/Consola3.jpg" alt="Space">
          <figcaption class="orbit-caption">Consola Nintendo Switch</figcaption>
        </figure>
      </li>
      <li class="orbit-slide">
        <figure class="orbit-figure">
          <img class="orbit-image" src="poze/Consola4.jpg" alt="Space">
          <figcaption class="orbit-caption">Consola Lenovo Legion GO</figcaption>
        </figure>
      </li>
    </ul>
  </div>
  <nav class="orbit-bullets">
    <button class="is-active" data-slide="0">
      <span class="show-for-sr">First slide details.</span>
      <span class="show-for-sr" data-slide-active-label>Current Slide</span>
    </button>
    <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
    <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
    <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
  </nav>
</div>

<a class="button expanded" href="console.php">Console</a>


<div class="grid-x grid-padding-x">
  <div class="cell text-center">
      <h1>Periferice</h1>
  </div>
</div>
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
<div class="orbit-wrapper">
  <div class="orbit-controls">
    <button class="orbit-previous"><span class="show-for-sr">Previous Slide</span>&#9664;&#xFE0E;</button>
    <button class="orbit-next"><span class="show-for-sr">Next Slide</span>&#9654;&#xFE0E;</button>
  </div>
  <ul class="orbit-container">
    <li class="is-active orbit-slide">
      <figure class="orbit-figure">
        <img class="orbit-image" src="poze/peri1.jpg" alt="Space">
        <figcaption class="orbit-caption">Mouse Logitech M220</figcaption>
      </figure>
    </li>
    <li class="orbit-slide">
      <figure class="orbit-figure">
        <img class="orbit-image" src="poze/peri2.jpg" alt="Space">
        <figcaption class="orbit-caption">Tastatura Canyon HKB-W03</figcaption>
      </figure>
    </li>
    <li class="orbit-slide">
      <figure class="orbit-figure">
        <img class="orbit-image" src="poze/peri3.jpg" alt="Space">
        <figcaption class="orbit-caption">Casti Logitech On-Ear</figcaption>
      </figure>
    </li>
    <li class="orbit-slide">
      <figure class="orbit-figure">
        <img class="orbit-image" src="poze/peri4.jpg" alt="Space">
        <figcaption class="orbit-caption">Mouse pad A4Tech X7-300MP</figcaption>
      </figure>
    </li>
  </ul>
</div>
<nav class="orbit-bullets">
  <button class="is-active" data-slide="0">
    <span class="show-for-sr">First slide details.</span>
    <span class="show-for-sr" data-slide-active-label>Current Slide</span>
  </button>
  <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
  <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
  <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button>
</nav>
</div>
<a class="button expanded" href="periferice.php">Console</a>

<?php include 'footer.php'; ?>
