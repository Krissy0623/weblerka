<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-03 17:16:15
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5e82cfa2e085_60832317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e7e28752ce5a5c26fd1f8da57f5398ef503147' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\head.tpl',
      1 => 1583252173,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e5e82cfa2e085_60832317 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    #mainNav {
      background-color: rgba(255, 193, 7, .7);
    }
</style>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" style="margin-left: -50px;" href="index.php">樂咖桃 x Let's talk</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#about"><?php echo $_smarty_tpl->tpl_vars['a0']->value;?>
</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#services"><?php echo $_smarty_tpl->tpl_vars['a1']->value;?>
</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php#portfolio"><?php echo $_smarty_tpl->tpl_vars['a2']->value;?>
</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?op=reservation_form"><?php echo $_smarty_tpl->tpl_vars['a3']->value;?>
</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="index.php?op=contact_form"><?php echo $_smarty_tpl->tpl_vars['a4']->value;?>
</a>
                </li>
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
