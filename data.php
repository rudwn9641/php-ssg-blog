<?php
$siteTitle = "디자이너 임경주";

// 게시물 2
$article2 = [];
$article2["title"] = "2화, grow & shrink";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writerName"] = "임경주";
$article2["writerAvatar"] = "ʕ•ᴥ•ʔ";
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
              </script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
EOT;

// 게시물 1
$article1 = [];
$article1["title"] = "1화, flex 오리엔테이션";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writerName"] = "임경주";
$article1["writerAvatar"] = "ʕ•ᴥ•ʔ";
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
</script>
                <div class="toast-ui-viewer"></div>
              </div>
            </li>
EOT;

if ( isset($articleId) ) {
    $articleVarName = "article" . $articleId;
    $selectedArticle = $$articleVarName;
}