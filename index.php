<?php
require_once 'head.php';

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string'); /*$_REQUEST就是POS,GET,COOKIE都算*/
$sn = system_CleanVars($_REQUEST, 'sn', '', 'int');

/* 程式流程 */
switch ($op){
    case "reservation_form" : 
        $msg = reservation_form(); 
        break;

    case "logout" :
        $msg = logout();
        redirect_header("index.php", '登出成功', 3000);
        // header("location:index.php"); 注意前面不可以有輸出
        exit; //跟die();是一樣的   

    case "login" :
        $msg = login();
        header("location:index.php");//注意前面不可以有輸出
        // header("location:index.php"); 注意前面不可以有輸出
        exit; //跟die();是一樣的

    case "contact_form" : 
        $msg = contact_form(); 
        break;

    case "okcontact" : 
        $msg = okcontact(); 
        break;

    case "login_form" : 
        $msg = login_form(); 
        break;

    default: 
        $op = "op_list";
        break;  
}

/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op); //送去樣板就會顯示,但要下指令<{$op}>

$smarty->assign("a0", "關於我們");
$smarty->assign("a1", "服務項目");
$smarty->assign("a2", "寶貝畫畫");
$smarty->assign("a3", "線上預約");
$smarty->assign("a4", "聯絡我們");

/*---- 程式結尾-----*/
$smarty->display('theme.tpl');

/*---- 函式區-------*/
function reservation_form(){

}

function contact_form(){

}

function okcontact(){

}

function login_form(){

}

function login(){
    global $smarty;
    $name="admin";
    $pass="111111";
    $token="xxxxxx";
  
    if ($name == $_POST['name'] and $pass == $_POST['pass']){
        $_SESSION['admin'] = true;
        $_POST['remember'] = isset($_POST['remember']) ? $_POST['remember'] : "";
        
        if($_POST['remember']){
          setcookie("name", $name, time()+ 3600 * 24 * 365); 
          setcookie("token", $token, time()+ 3600 * 24 * 365); 
        }
        redirect_header("index.php", '登入成功', 3000);
    }else{
      redirect_header("index.php?op=login_form", '登入失敗', 3000);
    }
    print_r($_POST); //也可以使用var_dump($_POST);
    die();
}

function logout(){
    $_SESSION['admin']="";
    setcookie("name", "", time()- 3600 * 24 * 365); 
    setcookie("token", "", time()- 3600 * 24 * 365); 
}