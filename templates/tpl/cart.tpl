<{if $op == "op_list"}>
  <!-- Page Content -->
  <div class="container" style="margin-top: 110px;">

    <!-- Page Heading -->
    <h1 class="my-4">
      商品訂購
    </h1>

    <div class="row">
        <{foreach $rows as $row}>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="card h-100">
                    <a href="#"><img class="card-img-top" src="<{$row.prod}>" alt="<{$row.title}>"></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <{$row.title}>： <{$row.price}> 元
                        </h4>
                        <p class="card-text"><{$row.content}></p>
                        <div class="mt-2">
                            <a href="#" class="btn btn-primary btn-sm" onclick="add_cart(<{$row.sn}>);">加入購物車</a>
                        </div>
                    </div>
                </div>
            </div>
        <{/foreach}>      
    </div>
    <!-- /.row -->
    <{$bar}>

  </div>
  <!-- /.container -->
  
  <!-- sweetalert2 -->
  <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
  <script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
  <script>
    function add_cart(sn){
      Swal.fire({
        title: '加入購物車？',
        // text: "您將無法還原！",
        icon: 'success',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: '是的',
        cancelButtonText: '取消'
        }).then((result) => {
        if (result.value) {
            document.location.href="cart.php?op=add_cart&sn="+sn;
        }
      })
    }
</script>
<{elseif  $op == "Portfolio"}>
<{/if}>
<{if $op == "order_form"}>
  <div class="container mt-5">
    <h1 class="text-center">商品訂單</h1>
    <form  role="form" action="cart.php" method="post" id="myForm" >        
        <div class="row">
            <!--姓名-->              
            <div class="col-sm-3">
                <div class="form-group">
                    <label><span class="title">姓名</span><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="<{$row.name}>">
                </div>
            </div>
            <!--電話-->              
            <div class="col-sm-3">
                <div class="form-group">
                    <label><span class="title">電話</span><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tel" id="tel" value="<{$row.tel}>">
                </div>
            </div>
            <!--email-->              
            <div class="col-sm-3">
                <div class="form-group">
                    <label><span class="title">email</span><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" id="email" value="<{$row.email}>">
                </div>
            </div>
                    
            <!--分類-->              
            <div class="col-sm-3">
              <div class="form-group">
                  <label>配送方式</label>
                  <select name="kind_sn" id="kind_sn" class="form-control">
                    <{foreach $row.kind_sn_options as $option}>
                      <option value="<{$option.sn}>" <{if $option.sn == $row.kind_sn}>selected<{/if}>><{$option.title}></option>
                    <{/foreach}>
                  </select>
              </div>
            </div>
        </div> 
        
        <div class="row">
            <div class="col-sm-12">  
                <!-- 聯絡事項 -->
                <div class="form-group">
                    <label class="control-label">備註</label>
                    <textarea class="form-control" rows="2" id="ps" name="ps"></textarea>
                </div>
            </div>
        </div>
        
        <table class="table table table-bordered table-striped table-hover table-sm">
            <thead>
                <tr>
                    <th scope="col" style="width:85px">圖片</th>
                    <th scope="col" class="text-center">商品名稱</th>
                    <th scope="col" class="text-right" style="width: 120px;">價格</th>
                    <th scope="col" class="text-center" style="width: 120px;">數量</th>
                    <th scope="col" class="text-right" style="width: 120px;">小計</th>
                </tr>
            </thead>
            <tbody>
                <{foreach $smarty.session.cart as $sn => $row}>
                <tr>
                    <td><img src="<{$row.prod}>" alt="<{$row.title}>" width=80></td>
                    <td class="align-middle"><{$row.title}></td> <{* <{$別名.索引}> *}>
                    <td class="text-right align-middle price"><{$row.price}></td>
                    <td class="text-center align-middle">
                      <input type="number" class="form-control amount text-right" name="amount[<{$row.sn}>]" id="amount" value="<{$row.amount}>" min="0" onchange="calTotal()">
                    </td>
                    <td class="text-right align-middle total"></td>
                </tr>
                <{foreachelse}>
                    <tr>
                        <td colspan=6>目前您還沒有選購</td>
                    </tr>
                <{/foreach}>
                <tr>
                    <td colspan=4 class="text-right">合計</td>
                    <td class="text-right" id="Total"></td>
                </tr>
            </tbody>
        </table>
        <!--sweetalert2-->
        <link rel="stylesheet" href="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.css">
        <script src="<{$xoAppUrl}>class/sweetalert2/sweetalert2.min.js"></script>
        <script>
            function op_delete(sn){ //這裡是javascript所以不用加錢字符號
                    Swal.fire({
                        title: '你確定嗎?',
                        text: "你將無法還原",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: '是的,刪除它!',
                        cancelButtonText: '取消'
                        }).then((result) => {
                        if (result.value) {
                            document.location.href="prod.php?op=op_delete&sn="+sn;
                        }
                    })    
            }
        </script>
        <div class="text-center pb-3">
          <input type="hidden" name="op" value="<{$row.op}>" >
          <input type="hidden" name="uid" value="<{$row.uid}>" >
          <button type="submit" class="btn btn-primary">送出</button>
        </div>
    </form>
  </div>
  <!-- 表單驗證 -->
  <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js"></script>
  <!-- 調用方法 -->
  <style>
  .error{
    color:red;
  }
    </style>
    <script>
    $(function(){
        $("#myForm").validate({
            submitHandler: function(form) {
            form.submit();
            },
            rules: {
                'name' : {
                required: true
                },
                'tel' : {
                required: true
                },
                'email' : {
                required: true
                }
            },
            messages: {
                'name' : {
                required: "必填"
                },
                'tel' : {
                required: "必填"
                },
                'email' : {
                required: "必填"
                }
            }
        });
    });
    </script>
    <!-- 計算合計金額 -->
    <script>
    calTotal();
    //合計金額
    function calTotal(){
        // document.getElementsByClassName("title")[0].innerText //取標題
        // document.getElementsByClassName("amount")[0].value //取數量
        var prices = document.getElementsByClassName("price");
        var amounts = document.getElementsByClassName("amount");
        var Total = 0;
        for(var i=0; i < prices.length; i++){
            var price = document.getElementsByClassName("price")[i].innerText;
            var amount = document.getElementsByClassName("amount")[i].value;
            var price = parseInt(price);
            Total += (amount * price); //合計
            document.getElementsByClassName("total")[i].innerText = amount * price; //小計
        }
        if(Total === 0){
            document.getElementById("Total").innerText = "";
        }else{
            document.getElementById("Total").innerText = Total;
        }
    }
    </script>
<{/if}>