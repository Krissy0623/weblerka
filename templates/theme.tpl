<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">  <!--什麼版本IE 就用什麼版本的標準模式-->

	<title>樂咖桃 x Let's talk</title>

	<!-- Font Awesome Icons -->
	<link href="<{$xoImgUrl}>creative/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="<{$xoImgUrl}>creative/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS - Includes Bootstrap -->
	<link href="<{$xoImgUrl}>creative/css/creative.css" rel="stylesheet">
	<{* 把head_js.tpl引進來 *}>
	<{include file="tpl/head_js.tpl"}>

</head>

<body id="page-top">
	<{* 轉向樣版連結 *}>
  		<{include file="tpl/redirect.tpl"}>

	<{* 把head.tpl引進來 *}>
		<{include file="tpl/head.tpl"}>

	<{* 把index.tpl引進來 *}>
	<{if $WEB.file_name == "index.php"}>
		<{include file="tpl/index.tpl"}>
	<{elseif  $WEB.file_name == "cart.php"}>
		<{include file="tpl/cart.tpl"}>
	<{/if}>

	<{* 把footer.tpl引進來 *}>
	<{include file="tpl/footer.tpl"}>
	
	<{* 購物車圖示 *}>  
  	<{if $smarty.session.cartAmount}>
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
		<a href="cart.php?op=order_form" class="fab fab-facebook mp-click" data-toggle="tooltip" title="你選擇了<{$smarty.session.cartAmount}>餐點">
			<i class="fas fa-cart-plus"></i>  
			<span class="badge badge-danger badge-counter"><{$smarty.session.cartAmount}></span> 
		</a>
    </div>

    <script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
	
  	<{/if}>

	
<!-- Custom scripts for this template -->
<script src="<{$xoImgUrl}>creative/js/creative.min.js"></script>
</body>

</html>