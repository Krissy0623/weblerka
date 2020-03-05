<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 15:22:55
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e610b3f03b0f2_16225060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e7e28752ce5a5c26fd1f8da57f5398ef503147' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\head.tpl',
      1 => 1583418171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e610b3f03b0f2_16225060 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #mainNav {
      background-color: rgba(255, 193, 7, .7);
    }
</style>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" style="margin-left: -50px;" href="index.php"><?php echo $_smarty_tpl->tpl_vars['WEB']->value['web_title'];?>
</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mainMenus']->value, 'mainMenu');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['mainMenu']->value) {
?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="<?php echo $_smarty_tpl->tpl_vars['mainMenu']->value['url'];?>
" <?php if ($_smarty_tpl->tpl_vars['mainMenu']->value['target'] == 1) {?>target="_blank" <?php }?>><?php echo $_smarty_tpl->tpl_vars['mainMenu']->value['title'];?>
</a>
                    </li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if ($_SESSION['user']['kind'] === 1) {?> 
                                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="user.php">後台</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?op=logout">登出</a>
                    </li>
                  
                <?php } elseif ($_SESSION['user']['kind'] === 0) {?>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?op=logout">登出</a>
                    </li>
                <?php } else { ?>
                                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="index.php?op=login_form">登入</a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</nav><?php }
}
