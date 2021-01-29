<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 구미베어";
$siteDescription = "디자이너 구미베어 기술 블로그 입니다.";
$siteKeywordsStr = "CSS, HTML, JS";
$siteName = "ʕ•ᴥ•ʔ 구미베어";
$siteThumbUrl = "https://b.gummybear.kr/img/logo/blog-main.png";

// 태그정보 시작
$tagInfos = [
    "flex" => [
        "pageThumbUrl" => "https://b.gummybear.kr/img/logo/blog-flex.png",
        //"pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
    ],
];
// 태그정보 끝

// 게시물 7
$article7 = [];
$article7["id"] = 7;
$article7["title"] = "7화, align-self";
$article7["regDate"] = "2020-01-21 17:28:18";
$article7["writerName"] = "ʕ•ᴥ•ʔ";
$article7["writerAvatar"] = "임경주";
$article7["tags"] = ["flex"];
$article7["body"] = <<<'EOT'
- align-self는 개별 요소에 적용할 수 있는 또 다른 속성입니다. 이 속성은 
align-items가 사용하는 값들을 인자로 받으며, 그 값들은 지정한 요소에만 적용됩니다.
- auto:default, container, align-item 속성을 따라간다. parent contaniner가 없다면 stretch로 된다.
- stretch: container 전체에 fit하기 위해 stretch된다.
- center: 가운데 정렬
- flex-start: container의 시작부분에 위치
- flex-end: container의 끝부분에 위치
- baseline: container의 baseline에 위치
- initial:
- inherit:

# 예시
```html
<!doctype>
<html>
    <head>
        <style>
            #main {
                width: 220px;
                height: 300px;
                border: 1px solid black;
                display: flex;
                align-items: flex-start;
            }

            #main div {
                flex: 1;
            }

            #myBlueDiv {
                align-self: center;
            }
        </style>
    </head>
</html>
```
EOT;

// 게시물 6
$article6 = [];
$article6["id"] = 6;
$article6["title"] = "6화, order";
$article6["regDate"] = "2020-01-20 17:28:17";
$article6["writerName"] = "ʕ•ᴥ•ʔ";
$article6["writerAvatar"] = "임경주";
$article6["tags"] = ["flex"];
$article6["body"] = <<<'EOT'
- order의 기본 값은 0이며, 양수나 음수로 바꿀 수 있습니다.

EOT;

// 게시물 5
$article5 = [];
$article5["id"] = 5;
$article5["title"] = "5화, flex-direction";
$article5["regDate"] = "2020-01-19 17:28:16";
$article5["writerName"] = "ʕ•ᴥ•ʔ";
$article5["writerAvatar"] = "임경주";
$article5["tags"] = ["flex"];
$article5["body"] = <<<'EOT'
- row: 요소들을 텍스트의 방향과 동일하게 정렬합니다.
- row-reverse: 요소들을 텍스트의 반대 방향으로 정렬합니다.
- column: 요소들을 위에서 아래로 정렬합니다.
- column-reverse: 요소들을 아래에서 위로 정렬합니다.

# 예시
```html
<!doctype>
<html>
    <head>
        <style>
            .father {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
                height:100vh;
            }

            .child {
                width: 200px;
                height: 200px;
                background-color: peru;
                color: white;
                font-size: 100px;
            }
        </style>
    </head>
</html>
```
EOT;



// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "4화, align-items";
$article4["regDate"] = "2020-01-18 17:28:15";
$article4["writerName"] = "ʕ•ᴥ•ʔ";
$article4["writerAvatar"] = "임경주";
$article4["tags"] = ["flex"];
$article4["body"] = <<<'EOT'
- flex-start: 요소들을 컨테이너의 꼭대기로 정렬합니다.
- flex-end: 요소들을 컨테이너의 바닥으로 정렬합니다.
- center: 요소들을 컨테이너의 세로선 상의 가운데로 정렬합니다.
- baseline: 요소들을 컨테이너의 시작 위치에 정렬합니다.
- stretch: 요소들을 컨테이너에 맞도록 늘립니다..

# 실습
```codepen
https://codepen.io/rudwn9641/embed/jOMdgxd?height=265&theme-id=light&default-tab=css,result
```
EOT;

// 게시물 3
$article3 = [];
$article3["id"] = 3;
$article3["title"] = "3화, justifiy-content";
$article3["regDate"] = "2020-01-12 12:12:15";
$article3["writerName"] = "ʕ•ᴥ•ʔ";
$article3["writerAvatar"] = "임경주";
$article3["tags"] = ["flex"];
$article3["body"] = <<<'EOT'
# 개요
- 콘텐츠를 수평(행) 정렬하는 속성이다.
- 콘텐츠(item)의 가로 넓이가 컨테이너보다 작아야 한다.
- flex-start: 요소들을 컨테이너의 왼쪽으로 정렬합니다.
- flex-end: 요소들을 컨테이너의 오른쪽으로 정렬합니다.
- center: 요소들을 컨테이너의 가운데로 정렬합니다.
- space-between: 요소들 사이에 동일한 간격을 둡니다.
- space-around: 요소들 주위에 동일한 간격을 둡니다.

# 예시
```html
<!doctype>
<html>
    <head>
        <style>
            .flex-container {
                display: flex;
                justify-content: space-between; /* 진행방향 가로!! flex-start, center, flex-end, space-around, space-evenly, space-between */
            }

            .item {
                border: 5px solid black;
                width: 200px;
                height: 100px;

                display: flex;
                justify-content: flex-end; /* 진행 방향(main axis)의 정렬 */
                align-items: flex-end; /* 진행 방향의 반대(세로)(cross axis) 정렬 */
            }
        </style>
    </head>
    <body>
        <div class="flex-container">
            <div class="item">첫번째 박스</div>
            <div class="item">두번째 박스</div>
            <div class="item">세번째 박스</div>
        </div>
    </body>
</html>
```
EOT;

// 게시물 2
$article2 = [];
$article2["id"] = 2;
$article2["title"] = "2화, grow & shrink";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "ʕ•ᴥ•ʔ";
$article2["writerAvatar"] = "임경주";
$article2["tags"] = ["flex"];
$article2["body"] = <<<'EOT'
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
EOT;

// 게시물 1
$article1 = [];
$article1["id"] = 1;
$article1["title"] = "1화, flex 오리엔테이션";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "ʕ•ᴥ•ʔ";
$article1["writerAvatar"] = "임경주";
$article1["tags"] = ["flex"];
$article1["body"] = <<<'EOT'
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
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}