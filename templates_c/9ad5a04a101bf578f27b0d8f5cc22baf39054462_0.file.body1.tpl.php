<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-29 15:14:30
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\body1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5a71c6147033_89830908',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ad5a04a101bf578f27b0d8f5cc22baf39054462' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\body1.tpl',
      1 => 1582985658,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5a71c6147033_89830908 (Smarty_Internal_Template $_smarty_tpl) {
?><link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC&display=swap" rel="stylesheet">
<style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        font-family: 'Noto Sans TC', sans-serif;
    }
    .banner{
        width: 100%;
        height: 700px;
        background-color: cadetblue;
        background: linear-gradient(115deg, #7bf 50%, transparent 50%) center center / 100% 100%,
        url("banner.jpg") right center / auto 100%; !important
    }
    .container{
        width: 100%;
        height: 100%;
        max-width: 1440px;
        margin: auto;
    }
    .banner-txt{
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .banner-txt h1{
        font-size: 70px;
        border-bottom: 1px solid #333;
        font-weight: 900;
        padding-bottom: .3em;
        margin-bottom: .3em;
    }
    .banner-txt h1 small{
        display: block;
        font-size: 43px;
        font-weight: 700;
    }
    .banner-txt h2{
        font-size: 40px;
        font-weight: 700;
    }
    .banner-txt p{
        font-size: 20px;
        font-weight: 300;
    }       
</style>

    <div class="banner">
        <div class="container">
            <div class="banner-txt">
                <img src="banner.jpg" alt="">
                <h1>
                    金魚都能懂的
                    <small>
                        這個網頁畫面怎麼切
                    </small>
                </h1>
                <h2>圖文滿版區塊</h2>
                <p>這畫面實在常見,在各種樣版網站可說是設計常客
                <br>
                    金魚切不出來實在說不過去阿</p>
            </div>
        </div>
    </div><?php }
}
