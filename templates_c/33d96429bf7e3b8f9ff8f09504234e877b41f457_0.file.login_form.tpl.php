<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 15:52:02
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\login_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4bfa12a377e7_75265002',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '33d96429bf7e3b8f9ff8f09504234e877b41f457' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\login_form.tpl',
      1 => 1582032075,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4bfa12a377e7_75265002 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    .form-signin {
        width: 100%;
        max-width: 400px;
        padding: 15px;
        margin: 0 auto;
    }      
</style>    
<div class="container" style="padding-top: 106px; padding-bottom: 145px;">
    <form class="form-signin" action="index.php" method="post">
        <h1 class="h3 mb-3 font-weight-normal">會員登入</h1>
        <div class="mb-3">
            <label for="name" class="sr-only">帳號</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="請輸入帳號"  required>
        </div>
        <div class="mb-3">
            <label for="pass" class="sr-only">密碼</label>
            <input type="password" name="pass" id="pass" class="form-control" placeholder="請輸入密碼" required>
        </div>
    
        <div class="checkbox mb-3">
            <label>
            <input type="checkbox" name="remember" id="remember"> 記住我
            </label>
        </div>
        <input type="hidden" name="op" id="op" value="login">
        <button class="btn btn-lg btn-warning btn-block" type="submit">會員登入</button> 
    </form>
</div><?php }
}
