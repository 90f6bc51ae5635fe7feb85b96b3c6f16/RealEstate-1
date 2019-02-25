<script>
    function check(){
        var types_name = document.getElementById("types_name").value;

        types_name = $.trim(types_name);
        types_detail = $.trim(	types_detail);
        
        if(types_name.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("types_name").focus();
            return false;
        }else if(types_detail.length == 0){
            alert("กรุณากรอกรายละเอียดสินค้า");
            document.getElementById("types_detail").focus();
            return false;
        }else if(types_detail.length == 0){
            alert("กรุณากรอกราคาสินค้า");
            document.getElementById("types_price").focus();
            return false;
        }else{
            return true;
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
                            <input id="types_name" name="types_name" class="form-control"  >
                        </div>
                    </div>   

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปประเภทสินค้า </label>
                                <img id="img_types_img" src="../img_upload/default.png" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="types_img" name="types_img" class="form-control" style="" onChange="readURL(this,'types_img');">
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