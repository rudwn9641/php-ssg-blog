<?php
if ( !isset($pageTitle) ) {
  $pageTitle = $siteTitle;
}

if ( !isset($pageDescription) ) {
  $pageDescription = $siteDescription;
}

if ( !isset($pageKeywordsStr) ) {
  $pageKeywordsStr = $siteKeywordsStr;
}

if ( !isset($pageThumbUrl) ) {
  $pageThumbUrl = $siteThumbUrl;
}
?>

<!DOCTYPE html>
<html lang="ko">

<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-KWFE9C080L"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-KWFE9C080L');
  </script>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title><?=$pageTitle?></title>
  <meta name="title" content="<?=$pageTitle?>" />
  <meta name="description" content="<?=$pageDescription?>" />
  <meta name="keywords" content="<?=$pageKeywordsStr?>" />
  <meta name="copyright" content="<?=$siteName?>" />

  <!-- OPENGRAPH -->
  <meta property="og:site_name" content="<?=$siteName?>" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="<?=$pageTitle?>" />
  <meta property="og:description" content="<?=$pageDescription?>" />
  <meta property="og:image" content="<?=$pageThumbUrl?>" />
  <meta property="og:image:alt" content="<?=$siteName?>" />
  <meta property="og:image:width" content="486" />
  <meta property="og:image:height" content="254" />

  <!-- 반응형 필수 -->
  <meta name="viewport" content="width=device-width, user-scalable=no" />

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- 구글 폰트 -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Satisfy&display=swap" rel="stylesheet">

  <!-- 폰트어썸 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- 토스트 UI 시작 -->
  <!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

  <!-- 토스트 UI 에디터, 자바스크립트 코어 -->
  <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js" defer></script>

  <!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />
  <!-- 토스트 UI 에디터, CSS 코어 -->
  <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

  <!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
  <!-- 구글 폰트 -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@300;400;500&display=swap" rel="stylesheet">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/ScrollTrigger.min.js"></script>
  <!-- 토스트 UI 끝 -->

  <link rel="stylesheet" href="css/common.css">
  <script src="js/common.js" defer></script>
</head>

<body>

<header class="top-bar con-min-width flex flex-jc-sb">
  <a href="#" class="logo px-10 flex flex-ai-c">
    <span>LOGO</span>
  </a>
  <div class="btn-to-top px-10 flex flex-ai-c">
    <div>
      <div>
        <span></span>
      </div>
      <div>
        <span></span>
      </div>
    </div>
  </div>
</header>

<!-- 사이드 바 시작 -->
<aside class="side-bar visible-sm-down" style="background-image:url(https://i.postimg.cc/HnyPcrRZ/image.png);">
  <nav class="menu-box-1">
    <ul>
      <li>
        <a href="#" class="flex flex flex-ai-c">
          <span>PROCESS</span>
          <div></div>
        </a>
      </li>
      <li>
        <a href="#" class="flex flex flex-ai-c">
          <span>ABOUT</span>
          <div></div>
        </a>
      </li>
      <li>
        <a href="#" class="flex flex-ai-c">
          <span>PORTFOLIO</span>
          <div></div>
        </a>
      </li>
    </ul>
  </nav>
</aside>
<!-- 사이드 바 끝 -->

    <main>