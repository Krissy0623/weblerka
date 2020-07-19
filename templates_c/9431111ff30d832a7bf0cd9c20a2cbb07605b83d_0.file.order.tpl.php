<?php
/* Smarty version 3.1.34-dev-7, created on 2020-03-11 14:48:26
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\order.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e68ec2a93f084_45427537',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9431111ff30d832a7bf0cd9c20a2cbb07605b83d' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\order.tpl',
      1 => 1583934504,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e68ec2a93f084_45427537 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">日期</th>
            <th scope="col">姓名</th>
            <th scope="col">電話</th>
            <th scope="col">配送方式</th>
            <th scope="col" class="text-right">合計</th>
            <th scope="col" class="text-center">功能</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['tel'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['kind_title'];?>
</td>
                    <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['row']->value['total'];?>
</td>
                    <td class="text-center">
                        <a href="cart.php?op=order_form&sn=<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
"><i class="far fa-edit"></i></a>
                        <a href="javascript:void(0)" onclick="op_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['sn'];?>
);"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php
}
} else {
?>
                <tr>
                    <td colspan=6>目前沒有資料</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
    <?php echo $_smarty_tpl->tpl_vars['bar']->value;?>

    
    <!-- sweetalert2 -->
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function op_delete(sn){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="order.php?op=order_delete&sn="+sn;
                }
            })
        }
    <?php echo '</script'; ?>
>
<?php }
}
}