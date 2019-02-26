<script>
    function check(){
        var product_types_name = document.getElementById("product_types_name").value;

        product_types_name = $.trim(product_types_name);
        product_types_detail = $.trim(	product_types_detail);
        
        if(product_types_name.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("product_types_name").focus();
            return false;
        }else if(product_types_detail.length == 0){
            alert("กรุณากรอกรายละเอียดสินค้า");
            document.getElementById("product_types_detail").focus();
            return false;
        }else if(product_types_detail.length == 0){
            alert("กรุณากรอกราคาสินค้า");
            document.getElementById("product_types_price").focus();
            return false;
        }else{
            return true;
        }
    }

    //---------ฟังชั่นแสดงรูป----------------
    function readURL(input) {
        if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#_img').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
        }else{
            $('#_img').attr('src',   '../img_upload/Types/default.png');
        }
    }


</script>

<div class="row">
    <div class="col-lg-6">
        <h1>เพิ่มประเภทสินค้า</h1>

    </div>

    
    <div class="col-lg-6" align="right">

    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=Types&action=add" enctype="multipart/form-data">
                     
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>ชื่อประเภทสินค้า <font color="#F00"><b>*</b></font></label>
                            <input id="product_types_name" name="product_types_name" class="form-control"  >
                        </div>
                    </div>   

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปประเภทสินค้า </label>
                                <img id="img_product_types_img" src="../img_upload/default.png" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="product_types_img" name="product_types_img" class="form-control" style="" onChange="readURL(this,'product_types_img');">
                            </div>
                        </div> 
                    </div>
                     
                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=Types';" >ย้อนกลับ</button>
                        <button type="reset" class="btn btn-primary">ล้างข้อมูล</button>
                        <button type="submit" class="btn btn-success">บันทึกข้อมูล</button>
                    </div>
                    <!-- /.row (nested) -->
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>