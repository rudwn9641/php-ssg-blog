<?php
require_once "data.php";
require_once "head.php";

$articles = &getArticles();
?>
<link rel="stylesheet" href="css/index.css">
<script src="js/index.js" defer></script>

<main class="main-page">
    <div class="main-box">
      <img class="shoese" src="https://i.postimg.cc/d3MqStKX/01.jpg" alt="">
      <img class="blush" src="https://i.postimg.cc/nVWsFp95/Untitled-1-01.png" alt="">
      <div class="title">RUNNING</div>
      <div class="content-1">There are better starters than me<br>
but I’m a strong finisher</div>
      <div class="content-2">VERSATILITY DESIGNER</div>
    </div>
</main>

<?php
require_once "foot.php";
?>