<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>디자이너 임경주</title>

     <!-- 반응형 필수 -->
     <meta name="viewport" content="width=device-width, user-scalable=no" />
    <!-- 제이쿼리 불러오기 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
    <script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js" defer></script>
    <!-- 토스트 UI 끝 -->
    <link rel="stylesheet" href="common.css">
    <script src="common.js" defer></script>
    <link rel="stylesheet" href="index.css">
    <script src="index.js" defer></script>
</head>
<body>
<div class="body-content">
  <!-- 탑바 시작 -->
  <header class="top-bar con-min-width visible-md-up">
    <div class="con height-100p flex flex-jc-sb flex-ai-c">
      <a href="#" class="logo">
        <span>🧀</span>
        <span>CHEESE</span>
      </a>
      <nav class="top-bar__menu-box-1 height-100p">
        <ul class="flex height-100p">
          <li>
            <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="fas fa-home"></i></span>
              <span>HOME</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="far fa-address-card"></i></span>
              <span>ABOUT</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="fas fa-list-alt"></i></span>
              <span>PORTFOLIO</span>
            </a>
          </li>
          <li>
            <a href="#" class="flex flex-jc-c flex-ai-c height-100p">
              <span><i class="fas fa-newspaper"></i></span>
              <span>ARTICLES</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- 탑바 끝 -->

  <!-- 모바일 탑바 시작 -->
  <header class="mobile-top-bar con-min-width visible-sm-down flex">
    <div class="flex-1-0-0 flex">
      <div class="mobile-top-bar__btn-toggle-side-bar flex-as-c">
        <div></div>
        <div></div>
        <div></div>
      </div>
    </div>
    <div>
      <a href="#" class="logo height-100p">
        <span>🧀</span>
        <span>CHEESE</span>
      </a>
    </div>
    <div class="flex-1-0-0"></div>
  </header>
  <!-- 모바일 탑바 끝 -->

  <!-- 모바일 사이드 바 시작 -->
  <aside class="mobile-side-bar visible-sm-down">

    <nav class="mobile-side-bar__menu-box-1">
      <ul>
        <li>
          <a href="#" class="block">
            <span><i class="fas fa-home"></i></span>
            <span>HOME</span>
          </a>
        </li>
        <li>
          <a href="#" class="block">
            <span><i class="far fa-address-card"></i></span>
            <span>ABOUT</span>
          </a>
        </li>
        <li>
          <a href="#" class="block">
            <span><i class="fas fa-list-alt"></i></span>
            <span>PORTFOLIO</span>
          </a>
        </li>
        <li>
          <a href="#" class="block">
            <span><i class="fas fa-newspaper"></i></span>
            <span>ARTICLES</span>
          </a>
        </li>
      </ul>
    </nav>
  </aside>
  <!-- 모바일 탑바 끝 -->

</body>
</html>