<{*被theme.tpl所引入*}>
<{if $mainSlides.0.pic}>
<!-- 輪播圖 -->
<style>
  .carousel-item {
    height: 100vh;
    min-height: 350px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
  } 
</style>
<header>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <{foreach $mainSlides as $index => $mainSlide}>
      <li data-target="#carouselExampleIndicators" data-slide-to="<{$index}>" <{if $index == '0'}>class="active" <{/if}> ></li>
      <{/foreach}>
    </ol>
    <div class="carousel-inner" role="listbox">

      
      <{foreach $mainSlides as $index => $mainSlide}>
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item <{if $index == 0}> active <{/if}>" style="background-image: url('<{$mainSlide.pic}>')">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4"><{$mainSlide.title}></h2>
          </div>
        </div>
      <{/foreach}>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
</header>
<{/if}>
<!-- About Section -->
<section class="page-section" style="background-color: #ffc107;" id="about"> <!--#f4a33a-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="text-white mt-0">關於 樂咖桃 x Let's talk</h2>
                <hr class="divider light my-4">
                <p class="text-block mb-4">2019年，學了一個新語言，做為自己的生日禮物–「動物溝通」。</p>
                <p class="text-block mb-5">從寵物到動物伴侶，他們以數年至十數年的光陰，不斷地引領著我思考生命的意義<br>曾無助的選擇安樂、也曾安然地告別；<br>為了放下，所以拾起，踏上了這趟「動物溝通 x 靈魂療癒」的旅程。</p>
                <p class="text-block mb-4">Gift，這份禮物，成為了天賦，也啟動了夢想。</p>
                <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">服務項目</a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="page-section"  style="background-color: #e4e4e4;" id="services">
    <div class="container">
        <h2 class="text-center mt-0">服務項目</h2>
        <hr class="divider my-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-comments text-primary mb-4"></i>
                    <h3 class="h4 mb-2">動物溝通</h3>
                    <p class="text-muted mb-0">免費體驗 / 付費服務</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x fa-search-location text-primary mb-4"></i>
                    <h3 class="h4 mb-2">失蹤協尋</h3>
                    <p class="text-muted mb-0">（尚未開放）</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fab fa-4x fa-creative-commons-sampling text-primary mb-4"></i>
                    <h3 class="h4 mb-2">離世溝通</h3>
                    <p class="text-muted mb-0">（尚未開放）</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="mt-5">
                    <i class="fas fa-4x  fa-hands text-primary mb-4"></i>
                    <h3 class="h4 mb-2">筋絡保養</h3>
                    <p class="text-muted mb-0">（尚未開放）</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Section -->
<section id="portfolio">
    <div class="container-fluid p-0">
        <div class="row no-gutters">
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<{$xoImgUrl}>creative/img/portfolio/fullsize/18.jpg">
                <img class="img-fluid" src="<{$xoImgUrl}>creative/img/portfolio/thumbnails/18.jpg" alt="">
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">
                        Category
                    </div>
                    <div class="project-name">
                        Project Name
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<{$xoImgUrl}>creative/img/portfolio/fullsize/19.jpg">
                <img class="img-fluid" src="<{$xoImgUrl}>creative/img/portfolio/thumbnails/19.jpg" alt="">
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">
                        Category
                    </div>
                    <div class="project-name">
                        Project Name
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<{$xoImgUrl}>creative/img/portfolio/fullsize/20.jpg">
                <img class="img-fluid" src="<{$xoImgUrl}>creative/img/portfolio/thumbnails/20.jpg" alt="">
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">
                        Category
                    </div>
                    <div class="project-name">
                        Project Name
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<{$xoImgUrl}>creative/img/portfolio/fullsize/21.jpg">
                <img class="img-fluid" src="<{$xoImgUrl}>creative/img/portfolio/thumbnails/21.jpg" alt="">
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">
                        Category
                    </div>
                    <div class="project-name">
                        Project Name
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<{$xoImgUrl}>creative/img/portfolio/fullsize/22.jpg">
                <img class="img-fluid" src="<{$xoImgUrl}>creative/img/portfolio/thumbnails/22.jpg" alt="">
                <div class="portfolio-box-caption">
                    <div class="project-category text-white-50">
                        Category
                    </div>
                    <div class="project-name">
                        Project Name
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="<{$xoImgUrl}>creative/img/portfolio/fullsize/6.jpg">
                <img class="img-fluid" src="<{$xoImgUrl}>creative/img/portfolio/thumbnails/6.jpg" alt="">
                <div class="portfolio-box-caption p-3">
                    <div class="project-category text-white-50">
                        Category
                    </div>
                    <div class="project-name">
                        Project Name
                    </div>
                </div>
            </a>
        </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="page-section bg-dark text-white">
    <div class="container text-center">
        <h2 class="mb-4">更多動溝精彩花絮分享</h2>
        <a class="btn btn-light btn-xl" target="_blank" href="https://www.facebook.com/LerkaTao/">樂咖桃 × Let's talk facebook</a>
    </div>
</section>

<!-- Contact Section -->
<!-- <section class="page-section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h2 class="mt-0">與我們聯繫吧</h2>
                <hr class="divider my-4">
                <p class="text-muted mb-1">週二至週五:9:00am - 8:00pm</p>
                <p class="text-muted mb-5">週六至周日:8:00am - 6:00pm</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                <i class="fas fa-phone fa-3x mb-3 text-muted"></i>
                <div>+1 (202) 555-0149</div>
            </div>
            <div class="col-lg-4 mr-auto text-center">
                <i class="fas fa-envelope fa-3x mb-3 text-muted"></i> -->
                <!-- Make sure to change the email address in anchor text AND the link below! -->
                <!-- <a class="d-block" href="mailto:lerkatao@gmail.com">lerkatao@gmail.com</a>
            </div>
        </div>
    </div>
</section> -->