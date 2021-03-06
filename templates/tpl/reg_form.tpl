<div class="container mt-5" style="padding-top: 80px;">
    <h1 class="text-center">註冊表單</h1>
    
    <form action="index.php" method="post" id="myForm" class="mb-2" enctype="multipart/form-data">
    <!--傳檔案就是要加enctype="multipart/form-data"(規定)-->
    <!-- <div class="row"> -->
    <div display:flex>         
        <!--帳號-->              
        <div class="col-sm-6, col-md-4">
			<div class="form-group">
				<label>帳號<span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="uname" id="uname" value="">
			</div>
        </div>         
        <!--密碼-->              
        <div class="col-sm-6, col-md-4">
			<div class="form-group">
				<label>密碼<span class="text-danger">*</span></label>
				<input type="password" class="form-control" name="pass" id="pass" value="">
			</div>
        </div>         
        <!--確認密碼-->              
        <div class="col-sm-6, col-md-4">
			<div class="form-group">
				<label>確認密碼<span class="text-danger">*</span></label>
				<input type="password" class="form-control" name="chk_pass" id="chk_pass" value="">
			</div>
        </div>         
        <!--姓名-->              
        <div class="col-sm-6, col-md-4">
			<div class="form-group">
				<label>姓名<span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="name" id="name" value="">
			</div>
        </div>         
        <!--電話-->              
        <div class="col-sm-6, col-md-4">
			<div class="form-group">
				<label>電話<span class="text-danger">*</span></label>
				<input type="text" class="form-control" name="tel" id="tel" value="">
			</div>
        </div>             
        <!--信箱-->              
        <div class="col-sm-6, col-md-4">
			<div class="form-group">
				<label>信箱<span class="text-danger">*</span class="text-danger"></label>
				<input type="text" class="form-control" name="email" id="email" value="">
			</div>
        </div> 
	</div>
	<div class="text-center pb-2">
		<input type="hidden" name="op" value="reg"> <!--$_POST['op給他一個']="叫做reg-未來要做的動作"-->
		<button type="submit" class="btn btn-primary">送出</button>
	</div>  
	<!--name是要拿來顯示資料後端的標題-->
  	</form>
	<!--表單驗證-->
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.1/dist/jquery.validate.min.js">
	</script>
	<style>
		.error{
			color:red;
		}
	</style>
	<!--調用函式-->
	<script>
		//`uname`, `pass`, `name`, `tel`, `email`
		// $(function(){
		// });
		$(function(){
			$("#myForm").validate({
				submitHandler: function(form) {
					form.submit(); //form的物件 驗證後送出
				},
				rules: {  //rules是屬性
					'uname': {  //uname是物件 
						required: true,//必填
						remote: {
							url: "index.php",
							type: "post",               //方法
							dataType: "json",           //接受数据格式
							data: {                     //資料
								"op" : "checkUname",
								"uname" : function() {
								return $("#uname").val();
								}
							}
						}
					},
					'pass' : {
						required: true
					},
					'chk_pass' : {
						equalTo:"#pass" //輸入值必須和#pass相同
					},
					'name' : {
						required: true
					},
					'tel' : {
						required: true
					},
					'email' : {
						required: true,
						email: true
					},
				},
				messages: {
					'uname' : {
						required: "必填",
                		remote: "這個帳號已經有人使用"
					},
					'pass' : {
						required: "必填"
					},
					'chk_pass' : {
						equalTo:"密碼不一致"
					},
					'name' : {
						required: "必填"
					},
					'tel' : {
						required: "必填"
					},
					'email' : {
						required: "必填",
						email: "email格式不正確"
					},
				},
			})
		});
	</script>
</div>