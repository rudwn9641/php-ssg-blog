<?php
$title = "홈";
require_once "head.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script>
        // 주소 뒤에 / 를 붙여주는 코드
        // 오직 index.html 에만 넣어주세요.
        if (location.pathname.substr(-10, 10) != 'index.html' && location.pathname.substr(-1, 1) != '/') {
            location.replace(location.href + '/');
        }
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>

    <!--구글폰트-->

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@400;700&display=swap" rel="stylesheet">

    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- 스와이퍼 불러오기 시작 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- 스와이퍼 불러오기 끝 -->

    <link rel="stylesheet" href="pf/web/index.css">
    <script src="common.js" defer></script>
</head>

<body>
    <!-- 스와이퍼 -->

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="https://i.postimg.cc/XY1mKhJQ/ed08a707e3134.jpg" alt="">
                <span>행복이 시작되는 곳</span>
                <span>나의 작은 집</span>
            </div>
            <div class="swiper-slide">
                <img src="https://i.postimg.cc/0jc3jHJg/photo-1613685303213-1f646ca61306.jpg" alt="">
            </div>
            <div class="swiper-slide">
                <img src="https://i.postimg.cc/mryST1HJ/9088ea46c3380.jpg" alt="">
                <span>멈추지 않는 공간</span>
                <span>AMOO</span>
            </div>
            <div class="swiper-slide">
                <img src="https://i.postimg.cc/2jMnR7t3/3ba6fe0320dc4.jpg" alt="">
                <span>Luxurious but Cozy</span>
                <span>AYTM</span>
            </div>
        </div>
        <!-- Add Arrows -->
        <div class="buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>