<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Bootstrap core CSS -->
  <link href="<{$xoImgUrl}>admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<{$xoImgUrl}>admin/css/simple-sidebar.css" rel="stylesheet">

  <!-- Font Awesome Icons -->
  <link href="<{$xoImgUrl}>admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  
  <title><{$WEB.web_title}></title>
  
  <!-- Bootstrap core JavaScript -->
  <script src="<{$xoImgUrl}>admin/vendor/jquery/jquery.min.js"></script>
  <script src="<{$xoImgUrl}>admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</head>

<body>

  <{* 轉向樣版連結 *}>
  <{include file="tpl/redirect.tpl"}>
  
  <div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">桃桃 x 後台管理</div>
      <div class="list-group list-group-flush">
        <a href="user.php" class="list-group-item list-group-item-action bg-light">會員管理</a> <!--預約管理-->
        <a href="#" class="list-group-item list-group-item-action bg-light">聯絡事項</a>
        <a href="prod.php" class="list-group-item list-group-item-action bg-light">商品管理</a>
        <a href="kind.php" class="list-group-item list-group-item-action bg-light">類別管理</a>
        <a href="menu.php" class="list-group-item list-group-item-action bg-light">選單管理</a>
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
            <!-- <li class="nav-item">
              <a class="nav-link" href="https://www.facebook.com/LerkaTao/">臉書</a>
            </li> -->
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
      
    <h1 class="text-center mt-3"><{$WEB.web_title}></h1>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">

                <{if $WEB.file_name == "user.php"}>
                    <{include file="tpl/user.tpl"}>
                <{elseif $WEB.file_name == "prod.php"}>  
                    <{include file="tpl/prod.tpl"}>
                <{elseif $WEB.file_name == "kind.php"}>  
                    <{include file="tpl/kind.tpl"}>
                <{elseif $WEB.file_name == "menu.php"}>
                    <{include file="tpl/menu.tpl"}>
                <{elseif $WEB.file_name == "slide.php"}>  
                  <{include file="tpl/slide.tpl"}>
                  
                <{/if}>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>
