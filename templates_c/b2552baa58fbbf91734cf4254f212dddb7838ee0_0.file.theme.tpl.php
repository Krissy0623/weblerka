<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-02 16:01:55
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\theme.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e5d1fe36d2135_00307360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2552baa58fbbf91734cf4254f212dddb7838ee0' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\theme.tpl',
      1 => 1583161301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/head_js.tpl' => 1,
    'file:tpl/redirect.tpl' => 1,
    'file:tpl/head.tpl' => 1,
    'file:tpl/contact_form.tpl' => 1,
    'file:tpl/okcontact.tpl' => 1,
    'file:tpl/login_form.tpl' => 1,
    'file:tpl/reg_form.tpl' => 1,
    'file:tpl/reservation_form.tpl' => 1,
    'file:tpl/okreservation.tpl' => 1,
    'file:tpl/body.tpl' => 1,
    'file:tpl/footer.tpl' => 1,
  ),
),false)) {
function content_5e5d1fe36d2135_00307360 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">  <!--什麼版本IE 就用什麼版本的標準模式-->

	<title>樂咖桃 x Let's talk</title>

	<!-- Font Awesome Icons -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS - Includes Bootstrap -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/css/creative.css" rel="stylesheet">
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/head_js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body id="page-top">
	  		<?php $_smarty_tpl->_subTemplateRender("file:tpl/redirect.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<?php $_smarty_tpl->_subTemplateRender("file:tpl/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php if ($_smarty_tpl->tpl_vars['op']->value == "contact_form") {?>
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/contact_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "okcontact") {?>
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/okcontact.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "login_form") {?>
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/login_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "reg_form") {?>
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/reg_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

		<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "reservation_form") {?>
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/reservation_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	<?php } elseif ($_smarty_tpl->tpl_vars['op']->value == "okreservation") {?>
		<?php $_smarty_tpl->_subTemplateRender("file:tpl/okreservation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
		<?php } else { ?>
				<?php $_smarty_tpl->_subTemplateRender("file:tpl/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

	<?php }?>

		<?php $_smarty_tpl->_subTemplateRender("file:tpl/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
<!-- Custom scripts for this template -->
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoImgUrl']->value;?>
creative/js/creative.min.js"><?php echo '</script'; ?>
>
</body>

</html><?php }
}
