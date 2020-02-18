<?php
/*
1. head.php為前台每個程式都會引入的檔案
2. 所有檔案都必須執行的流程，請放到這裡
3. smarty_01
 */
session_start(); //啟用 $_SESSION,前面不可以有輸出
error_reporting(E_ALL);@ini_set('display_errors', true); //設定所有錯誤都顯示
$http = 'http://';
if (!empty($_SERVER['HTTPS'])) {
  $http = ($_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
}

#網站實體路徑(不含 /)
define('_WEB_PATH', str_replace("\\", "/", dirname(__FILE__)));

#網站URL(不含 /)
define('_WEB_URL', $http . $_SERVER["HTTP_HOST"] . str_replace($_SERVER["DOCUMENT_ROOT"], "", _WEB_PATH));

#--------- WEB -----
#程式檔名(含副檔名)
$WEB['file_name'] = basename($_SERVER['PHP_SELF']); //index.php
//basename(__FILE__)head.php
#--------- WEB END -----

#
/*---- 必須引入----*/
#引入樣板引擎
require_once _WEB_PATH.'/smarty.php';
#引入資料庫設定
// require_once _WEB_PATH.'/sqlConfig.php';
#引入設定檔
require_once _WEB_PATH . '/function.php';

$_SESSION['admin'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : false; 
/*三元運算,真就將$_SESSION['admin']指定給前面的$_SESSION['admin'];
不真就將false指定給前面的$_SESSION['admin']*/ 

/*為了cookie使用 */
if(!$_SESSION['admin']) {
  $_COOKIE['token'] = isset($_COOKIE['token']) ? $_COOKIE['token'] : "";  
  $_COOKIE['name'] = isset($_COOKIE['name']) ? $_COOKIE['name'] : "";  
  if($_COOKIE['name'] == "admin" and $_COOKIE['token'] == "xxxxxx")$_SESSION['admin'] = true;
}

#轉向用
// (3)三元運算
$_SESSION['redirect'] = isset($_SESSION['redirect']) ? $_SESSION['redirect'] : "";
$_SESSION['message'] = isset($_SESSION['message']) ? $_SESSION['message'] : "";
$_SESSION['time'] = isset($_SESSION['time']) ? $_SESSION['time'] : "";

// (2)傳到樣板去
$smarty->assign("redirect", $_SESSION['redirect']); // <{$redirect}>
$smarty->assign("message", $_SESSION['message']);
$smarty->assign("time", $_SESSION['time']);

// (4)傳完就清掉
$_SESSION['redirect'] = "";
$_SESSION['message'] = "";
$_SESSION['time'] = "";