<script>
    function check(){


        var types_name = document.getElementById("types_name").value; 
 
        
        types_name = $.trim(types_name); 
        types_detail = $.trim(types_detail); 
        
        if(types_name.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("types_name").focus();
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
            $('#img_'+id).attr('src', '../img_upload/types/default.png');
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=Types&action=edit" enctype="multipart/form-data">
                    <input type="hidden"  id="types_id" name="types_id" value="<?php echo $types['types_id']; ?>" />
                    <input type="hidden"  id="types_img_o" name="types_img_o" value="<?php echo  $types['types_img'] ;?>" />

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>ชื่อสินค้า <font color="#F00"><b>*</b></font></label>
                                <input id="types_name" name="types_name" class="form-control" value="<?php echo $types['types_name'];?>" >
                            </div>
                        </div>                        
                    </div> 

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปเทรนด์สินค้า </label>
                                <img id="img_types_img" src="../img_upload/types/<?php echo $types['types_img']; ?>" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="types_img" name="types_img" class="form-control" style="" onChange="readURL(this,'types_img');">
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row">    
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด </label> 
                                <textarea id="types_detail" name="types_detail" class="form-control" style="min-height: 200px;"/><?php echo $types['types_detail'];?></textarea>
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