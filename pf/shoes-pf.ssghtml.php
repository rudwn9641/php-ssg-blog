<?php
require_once "shoes-head.ssghtml.php";
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.8.4/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="shoes-pf.css">
<script src="shoes-pf.js"></script>

<div class="pages"
    style="background-image: url('https://i.postimg.cc/BQv5XnYc/marjanblan-k-Ux-T8-Wkoe-Y-unsplash-1.jpg');">
    <h1>Portfolio</h1>
    <div class="page page-1" id="page-1">
        <div class="section section-1">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="my-slider-box-1__nav">
                        <!-- Add Arrows -->
                        <div class="my-slider-box-1__btn-left"><i class="fas fa-caret-left"></i></div>
                        <div class="my-slider-box-1__btn-right"><i class="fas fa-caret-right"></i></div>
                    </div>
                    <div class="mockup mockup-1">
                        <div>
                            <img src="https://i.postimg.cc/Dw9QJFvR/i-Mac-27-Mockup.jpg" alt="">
                        </div>
                    </div>
                    <div class="title title-1">INTERNI</div>
                    <div class="title title-2">& Decor</div>
                    <span class="view view-box-1">
                        <span>
                            <span><a href="#">Process View</a></span>
                            <span><a href="#">Process View</a></span>
                        </span>
                        <div class="line"></div>
                    </span>
                    <span class="view view-box-2">
                        <span>
                            <span><a href="#">Design View</a></span>
                            <span><a href="#">Design View</a></span>
                        </span>
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="page page-2" id="page-2">
        <div class="section section-3">
            <div class="mockup mockup-2">
                <div>
                    <img src="https://i.postimg.cc/W4BSHwjy/image.jpg" alt="">
                </div>
            </div>
            <div class="title title-1">Meeting</div>
            <span class="view view-box-3">
                <span>
                    <span><a href="#">Design View</a></span>
                    <span><a href="#">Design View</a></span>
                </span>
            </span>
        </div>
    </div>
    <div class="page page-3" id="page-3">
        <div class="mockup mockup-3">
            <div>
                <img src="https://i.postimg.cc/h43MGCrH/image.jpg" alt="">
            </div>
        </div>
        <div class="mockup mockup-4">
            <img src="https://i.postimg.cc/cJz2PVjR/image.jpg" alt="">
        </div>
        <div class="mockup mockup-5">
            <img src="https://i.postimg.cc/bvbbxnQQ/image.jpg" alt="">
        </div>
    </div>
    <div class="page page-4" id="page-4">
        <h1>페이지 4</h1>
        <div class="mockup mockup-6">
            <img src="https://i.postimg.cc/RFg88MVV/image.jpg" alt="">
        </div>
        <div class="mockup mockup-7">
            <img src="https://i.postimg.cc/BQjT2Jrc/2.jpg" alt="">
        </div>
    </div>
    <div class="page page-5" id="page-5">
        <h1>페이지 5</h1>
        <div class="mockup mockup-8">
            <img src="https://i.postimg.cc/h43MGCrH/image.jpg" alt="">
        </div>
    </div>
</div>

<div class="page-indicator">
    <ul>
        <li><a href="#page-1">Web design</a></li>
        <li><a href="#page-2">UI / UX</a></li>
        <li><a href="#page-3">Poster design</a></li>
        <li><a href="#page-4">Infographic</a></li>
    </ul>
</div>

<?php
require_once "shoes-foot.ssghtml.php";
?>