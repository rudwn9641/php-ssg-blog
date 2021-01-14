<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <!-- 반응형 필수 -->
  <meta name="viewport" content="width=device-width, user-scalable=no" />

  <!-- 제이쿼리 불러오기 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" defer></script>

  <!-- 폰트어썸 불러오기 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

  <!-- 토스트 UI 시작 -->
  <!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/highlight.min.js" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.4.1/styles/default.min.css">

  <!-- 토스트 UI 에디터, 자바스크립트 코어 -->
  <script src="https://uicdn.toast.com/editor/latest/toastui-editor-all.min.js" defer></script>

  <!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.58.3/codemirror.min.css" />
  <!-- 토스트 UI 에디터, CSS 코어 -->
  <link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

  <!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
  <script
    src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight.min.js"
    defer>
  </script>
  <!-- 토스트 UI 끝 -->

  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

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

  <main>
    <section class="section-latest-articles con-min-width">
      <div class="con">
        <div class="article-list-box">
          <ul>
            <li>
              <h1>2화, grow & shrink</h1>
              <div>2020-01-12 12:12:14</div>
              <div>
                <script type="text/x-template">
# 개요
- 아이템은 컨테이너의 크기에 따라서 작아지기도 하고 커지기도 한다.
- 이 때 작아지고, 커지는 비율을 지정하는 방법이 바로 grow & shrink다.

# 예시
```html
<!doctype>
<html>
<head>
    <style>
        .container{
            background-color: powderblue;
            height:200px;
            display:flex;
            flex-direction:row;
        }
        .item{
            background-color: tomato;
            color:white;
            border:1px solid white;         
        }
        .item:nth-child(1){
            flex-basis: 150px;
            flex-shrink: 1;
        }
        .item:nth-child(2){
            flex-basis: 150px;
            flex-shrink: 2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
    </div>
  </body>
</html>
```

# 실습
```codepen
https://codepen.io/rudwn9641/embed/gOwBbvV?height=265&theme-id=light&default-tab=js,result
```
              </script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
            <li>
              <h1 class="title">1화, flex 오리엔테이션</h1>
              <div class="reg-date">2020-01-12 12:12:14</div>
              <div class="body">
                <script type="text/x-template">
                  # 개요
- CSS의 flex는 엘리먼트들의 크기나 위치를 쉽게 잡아주는 도구다.
- flex를 사용하기 위해서는 컨테이너 태그에 display:flex 속성을 부여해야 한다.
- 또한 flex-direction을 이용해서 정렬방향을 바꿀 수 있다. 기본은 row다.

# 예시
```html
<!doctype>
<html>
<head>
    <style>
        .container{
            background-color: powderblue;
            height:200px;
            display:flex;
            flex-direction:row;
        }
        .item{
            background-color: tomato;
            color:white;
            border:1px solid white;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="item">1</div>
        <div class="item">2</div>
        <div class="item">3</div>
        <div class="item">4</div>
        <div class="item">5</div>
    </div>
</body>
</html>
```
</script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>

  </main>

  <!-- 하단바 시작 -->
  <footer class="bottom-bar con-min-width">
    <div class="con flex flex-jc-c">
      <a href="#" class="logo">
        <span>🧀</span>
        <span>CHEESE</span>
      </a>
    </div>
  </footer>
  <!-- 하단바 끝 -->
  </div>

  <!-- 커서 효과 -->
    <div class="cursor"></div>
    <div class="cursor-shadow"></div>
  </div>
</body>

</html>