<?php
$title = "홈";
$pageCode = "home";
require_once "head.php";
?>

<script src="common.js" defer></script>
<link rel="stylesheet" href="common.css">

<!-- 섹션1 시작 -->
<section class="section-1 con-min-width">
  <div class="con">
    <div class="my-slider-1">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide slide-1">
          <div class="leading-tight">SPACE DESIGN-나의 작은 집</div>
            <div class="relative">
              <img class="w-full object-cover block"
                src="https://i.postimg.cc/W3QjhTpV/patrick-perkins-3wyl-Drjx-H-E-unsplash.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide slide-2">
          <div class="leading-tight leading-tight-2">PRODUCT-2021 주방 가구 경향</div>
            <div class="relative">
              <img class="w-full object-cover block"
                src="https://i.postimg.cc/0jc3jHJg/photo-1613685303213-1f646ca61306.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide slide-3">
          <div class="leading-tight leading-tight-3">DESIGNER-AMOO</div>
            <div class="relative">
              <img class="w-full object-cover block"
                src="https://i.postimg.cc/RCH426GZ/lissete-laverde-A7-L8s3y-TF5o-unsplash.jpg" alt="">
            </div>
          </div>
          <div class="swiper-slide slide-4">
          <div class="leading-tight leading-tight-4">BRAND&COMPANY-AYTM</div>
            <div class="relative">
              <img class="w-full object-cover block" src="https://i.postimg.cc/kM1DFwKZ/pesce-huang-IQs3hcg4-To0-unsplash.jpg" alt="">
              <div class="txt-box absolute text-white">
                <div class="leading-tight">Luxurious but Cozy</div>
                <div class="leading-tight">AYTM</div>
              </div>
            </div>
          </div>
        </div>
        <!-- Add Arrows -->
        <div class="buttons">
          <div id="arrow" class="swiper-button-next"></div>
          <div id="arrow" class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- 섹션1 끝 -->

<?php
require_once "foot.php";
?>