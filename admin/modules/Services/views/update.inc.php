<script>
    function check(){


        var services_name = document.getElementById("services_name").value; 
        var services_detail = document.getElementById("services_detail").value; 
 
        
        services_name = $.trim(services_name); 
        services_detail = $.trim(services_detail); 
        
        if(services_name.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("services_name").focus();
            return false; 
        }else if(services_detail.length == 0){
            alert("กรุณากรอกรายละเอียดสินค้า");
            document.getElementById("services_detail").focus();
            return false; 
        }else{
            return true;
        }
    }

    function readURL(input,id) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#img_'+id).attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }else{
            $('#img_'+id).attr('src', '../img_upload/Services/default.png');
        }
    }

</script>

<div class="row">
    <div class="col-lg-6">
        <h1>แก้ไขสินค้า</h1>
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=Services&action=edit" enctype="multipart/form-data">
                    <input type="hidden"  id="services_id" name="services_id" value="<?php echo $services['services_id']; ?>" />
                    <input type="hidden"  id="services_img_o" name="services_img_o" value="<?php echo  $services['services_img'] ;?>" />
                    
                    <div class="row"> 
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>ชื่อบริการ<font color="#F00"><b>*</b></font></label>
                                <input id="services_name" name="services_name" class="form-control" value="<?php echo $services['services_name'];?>" >
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปเทรนด์บริการ</label>
                                <img id="img_services_img" src="../img_upload/Services/<?php echo $services['services_img']; ?>" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="services_img" name="services_img" class="form-control" style="" onChange="readURL(this,'services_img');">
                            </div>
                        </div> 
                    </div>

                    <div class="row">    
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด </label> 
                                <textarea id="services_detail" name="services_detail" class="form-control" style="min-height: 200px;"/><?php echo $services['services_detail'];?></textarea>
                            </div>
                        </div> 
                    </div> 

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=Services';" >ย้อนกลับ</button>
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