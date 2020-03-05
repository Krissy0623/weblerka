<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-05 14:59:05
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\cartpic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e6105a92c8ef7_41080948',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d59f548c5421e0c0954768055d00becf5285fcf' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\cartpic.tpl',
      1 => 1583416393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e6105a92c8ef7_41080948 (Smarty_Internal_Template $_smarty_tpl) {
?>  
  <?php if ($_SESSION['cartAmount']) {?>
    <style>
      .fab-fixed-wrap .fab {
        display: block;
        width: 56px;
        height: 56px;
        border-radius: 50%;
        color: white;
        background-color: #0c9;
        text-align: center;
        box-shadow: 0 3px 3px rgba(0, 0, 0, 0.16);
        text-decoration: none;
        display: flex;
        line-height: 1.2;
        align-items: center;
        justify-content: center;
      }
      .fab-fixed-wrap .fab.fab-facebook {
        /* background-color: #4080ff; */
        background-color: #f4623a;
      }
      .fab-fixed-wrap .fab.fab-line {
        background-color: #0b0;
      }
      .badge-counter {
        position: absolute;
        transform: scale(.7);
        transform-origin: top right;
        top: 10px;
        right: 10px;
        /* color:red;
        background: #fff; */
      }
    </style>
    <div class="fab-fixed-wrap with-navbar-bottom" style="bottom: 4.6875rem;position: fixed;z-index: 1035;right: .9375rem;bottom: .9375rem;">
      <a href="cart.php?op=order_form" class="fab fab-facebook mp-click" data-toggle="tooltip" title="你選擇了<?php echo $_SESSION['cartAmount'];?>
餐點">
        <i class="fas fa-cart-plus"></i>  
        <span class="badge badge-danger badge-counter"><?php echo $_SESSION['cartAmount'];?>
</span> 
      </a>
    </div>

    <?php echo '<script'; ?>
>
      $(function () {
        $('[data-toggle="tooltip"]').tooltip()
      })
    <?php echo '</script'; ?>
>
  <?php }
}
}
