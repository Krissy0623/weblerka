<div class="container mt-5">
    <div class="text-center">
        <h2 class="border-top mt-3" style="padding-top: 80px;">聯絡我們</h2>
    </div>
        
    <form role="form" action="index.php" method="post" id="myForm" >
        
        <div class="row">
            <!--姓名-->              
            <div class="col-sm-4">
                <div class="form-group">
                    <label><span class="title">姓名</span><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="">
                </div>
            </div>
            <!--電話-->              
            <div class="col-sm-4">
                <div class="form-group">
                    <label><span class="title">電話</span><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="tel" id="tel" value="">
                </div>
            </div>
            <!--email-->              
            <div class="col-sm-4">
                <div class="form-group">
                    <label><span class="title">email</span><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" id="email" value="">
                </div>
            </div>
        </div> 
        
        <div class="row">
            <div class="col-sm-12">  
                <!-- 聯絡事項 -->
                <div class="form-group">
                    <label class="control-label">聯絡事項</label>
                    <textarea class="form-control" rows="5" name="content" id="content" ></textarea>
                </div>
            </div>
        </div>
        <div class="text-center pb-3">
            <input type="hidden" name="op" value="<{$row.op}>">
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
            required: true,
            email: true
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
            required: "必填",
            email : "email格式不正確"
            }
        }
        });
    });
    </script>