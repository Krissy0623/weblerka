<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-08 11:37:47
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e64cafb2e41b1_28061330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a39b1f1dc8203b889a4ed872d9fc51f9199400d' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\index.tpl',
      1 => 1583251415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl/contact_form.tpl' => 1,
    'file:tpl/okcontact.tpl' => 1,
    'file:tpl/login_form.tpl' => 1,
    'file:tpl/reg_form.tpl' => 1,
    'file:tpl/reservation_form.tpl' => 1,
    'file:tpl/okreservation.tpl' => 1,
    'file:tpl/body.tpl' => 1,
  ),
),false)) {
function content_5e64cafb2e41b1_28061330 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "contact_form") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/contact_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['op']->value == "okcontact") {?>
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
} elseif ($_smarty_tpl->tpl_vars['op']->value == "okreservation") {?>
    <?php $_smarty_tpl->_subTemplateRender("file:tpl/okreservation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender("file:tpl/body.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
}
