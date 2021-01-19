<?php
$siteTitle = "디자이너 구미베어";

// 게시물 4
$article4 = [];
$article4["id"] = 4;
$article4["title"] = "4화, align-items";
$article4["regDate"] = "2020-01-18 17:28:15";
$article2["writerName"] = "ʕ•ᴥ•ʔ";
$article2["writerAvatar"] = "임경주";
$article4["body"] = <<<EOT
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
$article2["writerName"] = "ʕ•ᴥ•ʔ";
$article2["writerAvatar"] = "임경주";
$article3["body"] = <<<EOT
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
$article2["body"] = <<<EOT
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
$article2["writerName"] = "ʕ•ᴥ•ʔ";
$article2["writerAvatar"] = "임경주";
$article1["body"] = <<<EOT
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

if ( isset($articleId) ) {
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
}