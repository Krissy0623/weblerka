<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 15:16:43
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6109cbc94795_86789669',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19e2b4d987f54a0659f8326440a8e9ca272e5fef' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\admin.tpl',
      1 => 1583417799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/redirect.tpl' => 1,
    'file:tpl/user.tpl' => 1,
    'file:tpl/prod.tpl' => 1,
    'file:tpl/kind.tpl' => 1,
    'file:tpl/menu.tpl' => 1,
    'file:tpl/slide.tpl' => 1,
  ),
),false)) {
function content_5e6109cbc94795_86789669 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
admin/css/simple-sidebar.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <title><?php echo $_smarty_tpl->tpl_vars['WEB']->value['web_title'];?>
</title>
  
  <!-- Bootstrap core JavaScript -->
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
admin/vendor/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
admin/vendor/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>


</head>

<body>

    <?php $_smarty_tpl->_subTemplateRender("file:tpl/redirect.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">桃桃 x 後台管理</div>
      <div class="list-group list-group-flush">
        <a href="user.php" class="list-group-item list-group-item-action bg-light">會員管理</a> <!--預約管理-->
        <a href="#" class="list-group-item list-group-item-action bg-light">聯絡事項</a>
        <a href="prod.php" class="list-group-item list-group-item-action bg-light">商品管理</a>
        <a href="kind.php" class="list-group-item list-group-item-action bg-light">[ 商品 / 訂單 ] 類別管理</a>
        <a href="menu.php" class="list-group-item list-group-item-action bg-light">[ 導覽列 / 購物車 ] 選單管理</a>
        <a href="slide.php" class="list-group-item list-group-item-action bg-light">輪播圖管理</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <button class="btn btn-primary" id="menu-toggle">Menu</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">首頁 <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cart.php">購物車</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="https://www.facebook.com/LerkaTao/" target="_blank">臉書</a>
                <a class="dropdown-item" href="http://localhost/adminer/adminer.php" target="_blank">資料庫管理</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="index.php?op=logout">登出</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      
    <h1 class="text-center mt-3"><?php echo $_smarty_tpl->tpl_vars['WEB']->value['web_title'];?>
</h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <?php if ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "user.php") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:tpl/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "prod.php") {?>  
                    <?php $_smarty_tpl->_subTemplateRender("file:tpl/prod.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "kind.php") {?>  
                    <?php $_smarty_tpl->_subTemplateRender("file:tpl/kind.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "menu.php") {?>
                    <?php $_smarty_tpl->_subTemplateRender("file:tpl/menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } elseif ($_smarty_tpl->tpl_vars['WEB']->value['file_name'] == "slide.php") {?>  
                  <?php $_smarty_tpl->_subTemplateRender("file:tpl/slide.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                  
                <?php }?>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

  <!-- Menu Toggle Script -->
  <?php echo '<script'; ?>
>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  <?php echo '</script'; ?>
>

</body>

</html>
<?php }
}
