<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>인테르니 앤 데코 - <?=$title?></title>

    <!-- 테일윈드 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.3/tailwind.min.css">

    <!-- GSAP 와 스크롤 트리거 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>

    <!-- 구글폰트 -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1:wght@400;700&display=swap" rel="stylesheet">

    <!-- 폰트어썸 불러오기 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <!-- 제이쿼리 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- 스와이퍼 불러오기 시작 -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- 스와이퍼 불러오기 끝 -->

    <script src="common.js" defer></script>
    <link rel="stylesheet" href="common.css">
</head>

<body>

    <!-- 탑바 -->
    <header class="top-bar con-min-width">
        <div class="con flex h-full">
            <a class="logo flex flex-ai-c" href="index.ssghtml.php">
                <img class="block w-48" src="https://i.postimg.cc/3JcFtHX4/image.png" alt="">
            </a>
            <?
            $baseLiClassStr = "flex-grow";
            $aClassStr = "flex flex-ai-c flex-jc-c h-full hover:underline";
            ?>
            <ul class="flex flex-grow ml-5">
                <?php
                $liClassStr = $baseLiClassStr;
                if ( $pageCode == "exhibition" ) {
                    $liClassStr .= " active";
                }
                ?>
                <li class="<?=$liClassStr?>"><a class="<?=$aClassStr?>" href="exhibition.ssghtml.php">EXHIBITION</a></li>
                
                <?php
                $liClassStr = $baseLiClassStr;
                if ( $pageCode == "space_design" ) {
                    $liClassStr .= " active";
                }
                ?>
                <li class="<?=$liClassStr?>"><a class="<?=$aClassStr?>" href="space_design.ssghtml.php">SPACE DESIGN</a></li>
                
                <?php
                $liClassStr = $baseLiClassStr;
                if ( $pageCode == "product" ) {
                    $liClassStr .= " active";
                }
                ?>
                <li class="<?=$liClassStr?>"><a class="<?=$aClassStr?>" href="product.ssghtml.php">PRODUCT</a></li>
                
                <?php
                $liClassStr = $baseLiClassStr;
                if ( $pageCode == "designer" ) {
                    $liClassStr .= " active";
                }
                ?>
                <li class="<?=$liClassStr?>"><a class="<?=$aClassStr?>" href="designer.ssghtml.php">DESIGNER</a></li>
                
                <?php
                $liClassStr = $baseLiClassStr;
                if ( $pageCode == "brand_company" ) {
                    $liClassStr .= " active";
                }
                ?>
                <li class="<?=$liClassStr?>"><a class="<?=$aClassStr?>" href="brand_company.ssghtml.php">BRAND&COMPANY</a></li>

                <?php
                $liClassStr = $baseLiClassStr;
                if ( $pageCode == "community" ) {
                    $liClassStr .= " active";
                }
                ?>
                <li class="<?=$liClassStr?>"><a class="<?=$aClassStr?>" href="community.ssghtml.php">COMMUNITY</a></li>
            </ul>

            <form class="search-box flex flex-ai-c relative ml-5">
                <input type="text" placeholder="Search..." class="w-full p-1" />
                <div class="icon-search absolute right-0 mr-1">
                    <i class="fas fa-search"></i>
                </div>
            </form>

            <div class="login-box flex ml-5">
                <a class="flex flex-ai-c flex-jc-c h-full hover:underline" href="#">김작가</a></li>
                <span class="flex flex-ai-c flex-jc-c h-full mx-3">|</span>
                <a class="flex flex-ai-c flex-jc-c h-full hover:underline" href="#">Logout</a></li>
            </div>
        </div>
        <div class="two-lines"></div>
    </header>