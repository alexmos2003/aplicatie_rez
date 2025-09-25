<?php
require_once "connection.php";
if (!isset($_SESSION["user_id"]) || $_SESSION["user_id"] == "") redirect("index.php");
include "headerlogged.php";

/* bază + normalizare imagine */
$BASE = '/gamehub/';
function img_url($v){
  global $BASE;
  $v=trim((string)$v);
  if($v==='') return $BASE.'poze/no-image.jpg';
  if(preg_match('#^https?://#i',$v)) return $v;
  $v=str_replace('\\','/',$v);
  $v=preg_replace('#^https?://[^/]+/#i','/',$v);
  $v=str_ireplace(['/GameHub-main/','/gamehub-main/'],'/gamehub/',$v);
  $v=ltrim($v,'/');
  if(stripos($v,'gamehub/')===0) $v=substr($v,8);
  if(stripos($v,'poze/')!==0) $v='poze/'.basename($v);
  $docroot=rtrim($_SERVER['DOCUMENT_ROOT'],'/\\');
  $pozeDir=$docroot.$BASE.'poze';
  $file=basename($v); $name=pathinfo($file,PATHINFO_FILENAME); $ext=strtolower(pathinfo($file,PATHINFO_EXTENSION));
  if($ext && is_file($pozeDir.'/'.$file)) return $BASE.'poze/'.rawurlencode($file);
  foreach(['jpg','jpeg','png','webp','gif','JPG','JPEG','PNG','WEBP','GIF'] as $e){
    if(is_file($pozeDir.'/'.$name.'.'.$e)) return $BASE.'poze/'.rawurlencode($name.'.'.$e);
  }
  return $BASE.$v;
}

/* ia ultimele 6 jocuri */
$games=[]; $res=$db->query("SELECT id,name,price,image_url FROM tabel_jocuri ORDER BY id DESC LIMIT 6");
if($res){ while($r=$res->fetch_assoc()) $games[]=$r; }
?>
<main>
  <div class="grid-container">
    <div class="grid-x grid-padding-x align-center">
      <div class="large-10 cell text-center">
        <h1 style="margin:16px 0 6px;">Bine ai venit pe GameHub!</h1>
        <p class="subheader" style="margin-bottom:22px;">Cele mai bune jocuri luna aceasta</p>
      </div>
    </div>

    <?php if($games): ?>
    <div class="grid-x grid-padding-x align-center">
      <div class="large-8 cell">
        <div class="orbit" role="region" aria-label="Carousel Jocuri" data-orbit>
          <div class="orbit-wrapper">
            <div class="orbit-controls">
              <button class="orbit-previous">&#9664;</button>
              <button class="orbit-next">&#9654;</button>
            </div>
            <ul class="orbit-container">
              <?php foreach($games as $i=>$g): $img=img_url($g['image_url']); $title=htmlspecialchars($g['name']); ?>
              <li class="orbit-slide <?= $i===0?'is-active':'' ?>">
                <img class="orbit-image" src="<?= $img ?>" alt="<?= $title ?>" style="height:520px;object-fit:cover;">
                <figcaption class="orbit-caption" style="background:rgba(0,0,0,0.65);">
                  <div class="grid-x align-justify align-middle">
                    <span style="font-weight:700;color:#fff;"><?= $title ?></span>
                    <a class="button small success" href="vizualizare.php?id=<?= (int)$g['id'] ?>">Vezi detalii</a>
                  </div>
                </figcaption>
              </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</main>
<?php include "footer.php"; ?>
