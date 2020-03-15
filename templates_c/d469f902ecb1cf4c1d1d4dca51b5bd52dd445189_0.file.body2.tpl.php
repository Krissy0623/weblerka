<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-15 06:55:05
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\body2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6dc3392f6d87_61165153',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd469f902ecb1cf4c1d1d4dca51b5bd52dd445189' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\body2.tpl',
      1 => 1584251694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6dc3392f6d87_61165153 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['mainDraws']->value[0]['pic']) {?>

<style>
    .img-fluid{
        border: 2px solid #fff;
    }
</style>
<!-- Portfolio Section -->
<section id="portfolio">
    <div class="container-fluid p-3 bg-dark">
        <div class="row no-gutters">
            <div class="col-lg-3 col-sm-6">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainDraws']->value, 'mainSlide', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['mainSlide']->value) {
?>
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg">  <!--大圖-->
                    <img class="img-fluid <?php if ($_smarty_tpl->tpl_vars['index']->value == 0) {?> active <?php }?>" style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['mainDraw']->value['pic'];?>
')"> <!--小圖-->
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            <?php echo $_smarty_tpl->tpl_vars['mainDraw']->value['title'];?>

                        </div>
                        <div class="project-name">
                            <?php echo $_smarty_tpl->tpl_vars['mainDraw']->value['content'];?>

                        </div>
                    </div>
                </a>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
</section>
<?php }?>
            <!-- <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/7.jpg">  
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/7.jpg" alt=""> 
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 為什麼要喵喵叫】
                        </div>
                        <div class="project-name">
                            #傲嬌 #眼裡只有媽媽
                        </div>
                    </div>
                </a>
            </div> -->
            <!-- <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/25.jpg">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/25.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 把拔不能死掉】
                        </div>
                        <div class="project-name">
                            #跟把拔一樣自戀 #很害怕把拔死掉<br>#想要多吃點肉肉
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/20.jpg">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/20.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 我也可以照顧妹妹】
                        </div>
                        <div class="project-name">
                            #第一次被催促溝通就上手<br>#終於進入正式溝通
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/21.jpg">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/21.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 家有雙寶超歡樂(上篇-老大汪)】
                        </div>
                        <div class="project-name">
                            #老大冷眼地表示這個傢伙又再耍寶了
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/22.jpg">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/22.jpg" alt="">
                    <div class="portfolio-box-caption">
                        <div class="project-category text-white-50">
                            【個案分享 之 家有雙寶超歡樂(下篇-老么汪)】
                        </div>
                        <div class="project-name">
                            #雙寶是分別聊天#個性是天差地遠
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a class="portfolio-box" href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/fullsize/23.jpg">
                    <img class="img-fluid" src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/img/portfolio/thumbnails/23.jpg" alt="">
                    <div class="portfolio-box-caption p-3">
                        <div class="project-category text-white-50">
                            【故事分享 之 心情不好時就摸摸我吧】
                        </div>
                        <div class="project-name">
                            #暖男 #愛唱歌的暖男
                        </div>
                    </div>
                </a>
            </div> -->

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
</section> --><?php }
}
