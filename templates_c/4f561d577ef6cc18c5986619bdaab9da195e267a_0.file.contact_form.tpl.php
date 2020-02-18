<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-18 15:52:27
  from 'D:\Krissy\PHP\xampp\htdocs\weblerka\templates\tpl\contact_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4bfa2b18a8f3_45257228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4f561d577ef6cc18c5986619bdaab9da195e267a' => 
    array (
      0 => 'D:\\Krissy\\PHP\\xampp\\htdocs\\weblerka\\templates\\tpl\\contact_form.tpl',
      1 => 1582031941,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4bfa2b18a8f3_45257228 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container" style="padding-top: 120px; padding-bottom: 20px;">
    <div class="text-center">
        <h2 class="mb-3 font-weight-normal">聯絡我們</h2>
    </div>
    
    <!-- 表單返回頁，記得在表單加「 target='returnWin' 」 -->
    <iframe name="returnWin" style="display: none;" onload="this.onload=function(){window.location='index.php?op=okcontact'}"></iframe>
    <form  target='returnWin' role="form" action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd4C0EGK97haIGrC5k74NI3YcrpqgRG3QO9m6kJ_buB8W3yKA/formResponse" method="post" id="myForm">
        <div class="row mt-3">         
            <!--姓名-->              
            <div class="col-sm-4">
                <div class="form-group">
                    <label><span class="title">姓名</span></label>
                    <span class="text-danger"></span>
                    <input type="text" class="form-control" name="entry.309241924" id="name" value="">
                </div>
            </div>          
            <!--電話-->              
            <div class="col-sm-4">
                <div class="form-group">
                    <label><span class="title">電話</span></label>
                    <span class="text-danger"></span>
                    <input type="text" class="form-control" name="entry.1303439956" id="tel" value="">
                </div>
            </div>  
            <!--email-->              
            <div class="col-sm-4">
                <div class="form-group">
                    <label><span class="title">email</span></label>
                    <span class="text-danger"></span>
                    <input type="text" class="form-control" name="entry.1887980734" id="email" value="">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">  
                <!-- 聯絡事項 -->
                <div class="form-group mt-3">
                    <label class="control-label">聯絡事項</label>
                    <textarea class="form-control" rows="4" name="entry.1926273471" id="note"></textarea>
                </div>
            </div>
        </div>
        <div class="text-center pb-3">
            <button type="submit" class="btn btn-warning">送出</button>
        </div>
    </form>
</div>

<!--表單驗證-->
<?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js">
<?php echo '</script'; ?>
>
<style>
    .error{
        color:red;
    }
</style>

<!--調用函式-->
<?php echo '<script'; ?>
>
$(function(){
});
$(function(){
    $("#myForm").validate({
        submitHandler: function(form) {
            form.submit(); //form的物件 驗證後送出
        },
        rules: { 
            'entry.309241924' : { 
                required: true
            },
            'entry.1303439956' : {
                required: true
            },
            'entry.1887980734' : {
                required: true,
                email: true
            },
        },
        messages: {
            'entry.309241924' : {
                required: "必填"
            },
            'entry.1303439956' : {
                required: "必填"
            },
            'entry.1887980734' : {
                required: "必填",
                email: "email格式不正確"
            },
        },
    })
});
<?php echo '</script'; ?>
><?php }
}
