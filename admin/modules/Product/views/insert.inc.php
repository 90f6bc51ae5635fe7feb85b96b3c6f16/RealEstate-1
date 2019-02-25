<script>
    function check(){
        var product_name = document.getProductById("product_name").value; 
        var product_detail = document.getProductById("product_detail").value; 
        var product_price = document.getProductById("product_price").value; 

        product_name = $.trim(product_name);
        product_detail = $.trim(	product_detail);
        
        if(product_name.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("product_name").focus();
            return false;
        }else if(product_detail.length == 0){
            alert("กรุณากรอกรายละเอียดสินค้า");
            document.getElementById("product_detail").focus();
            return false;
        }else if(product_price.length == 0){
            alert("กรุณากรอกราคาสินค้า");
            document.getElementById("product_price").focus();
            return false;
        }else{
            return true;
        }
    }
</script>

<div class="row">
    <div class="col-lg-6">
        <h1>เพิ่มสินค้า</h1>

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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=Product&action=add" enctype="multipart/form-data">
                     
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>ชื่อสินค้า <font color="#F00"><b>*</b></font></label>
                            <input id="product_name" name="product_name" class="form-control"  >
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>ประเภท <font color="#F00"><b>*</b></font></label>
                            <input id="types_id" name="types_id" class="form-control"  >
                        </div>
                    </div>   

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label> ราคาสินค้า <font color="#F00"><b>*</b></font></label>
                            <input id="product_price" name="product_price" class="form-control"  >
                        </div>
                    </div>    


                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปสินค้า </label>
                                <img id="img_product_img" src="../img_upload/default.png" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="product_img" name="product_img" class="form-control" style="" onChange="readURL(this,'product_img');">
                            </div>
                        </div> 
                    </div>
                     
                    <div class="row">  
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียดสินค้า <font color="#F00"><b>*</b></font></label>
                                <Textarea id="product_detail" name="product_detail" class="form-control" style=""  > </Textarea>
                            </div>
                        </div>    
                    </div>

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=Product';" >ย้อนกลับ</button>
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