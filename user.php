<?php
require_once 'head.php';

#權限檢查
if(!$_SESSION['admin'])redirect_header("index.php", '您沒有權限', 3000);

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string'); /*$_REQUEST就是POS,GET,COOKIE都算*/
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');

/* 程式流程 */
switch ($op){
    default: //都沒有的時候跑default的login_form
        $op = "op_list"; //login_form
        op_list();
        break;  
}


/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op); //送去樣板就會顯示,但要下指令<{$op}>

/*---- 程式結尾-----*/
$smarty->display('admin.tpl');

/*---- 函數區-----*/
/*=======================
註冊函式(寫入資料庫)
=======================*/
function op_list(){
    global $smarty,$db;

}