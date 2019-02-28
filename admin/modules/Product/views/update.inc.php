<script>
    function check(){


        var product_name = document.getElementById("product_name").value; 
        var product_detail = document.getElementById("product_detail").value; 
        var product_price = document.getElementById("product_price").value; 
 
        
        product_name = $.trim(product_name); 
        product_detail = $.trim(product_detail);
        product_price = $.trim(product_price);
        
        if(product_name.length == 0){
            alert("กรุณากรอกชื่อ");
            document.getElementById("product_name").focus();
            return false; 
        }else if(product_detail.length == 0){
            alert("กรุณากรอกรายละเอียด");
            document.getElementById("product_detail").focus();
            return false; 
        }else if(product_price.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_price").focus();
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
            $('#img_'+id).attr('src', '../img_upload/product/default.png');
        }
    }

</script>

<div class="row">
    <div class="col-lg-6">
        <h1>แก้ไข</h1>
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=product&action=edit" enctype="multipart/form-data">
                    <input type="hidden"  id="product_id" name="product_id" value="<?php echo $product['product_id']; ?>" />
                    <input type="hidden"  id="product_img_o" name="product_img_o" value="<?php echo  $product['product_img'] ;?>" />
                    <div class="row"> 
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>ชื่อ <font color="#F00"><b>TH</b></font></label>
                                <input id="product_name_th" name="product_name_th" class="form-control" value="<?php echo $product['product_name_th'];?>" >
                            </div>
                        </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                <label>ชื่อ <font color="#F00"><b>EN</b></font></label>
                                <input id="product_name_en" name="product_name_en" class="form-control" value="<?php echo $product['product_name_en'];?>" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>ประเภท <font color="#F00"><b>*</b></font></label>
                                <select class="form-control  custom-select" id="product_types_id" name="product_types_id">
                                    <? for ($i=0; $i < count($type); $i++) {  ?>
                                    <option <?php if($product['product_types_id']==$type[$i]['product_types_id']){ echo "selected";}  ?> value="<? echo $type[$i]['product_types_id'];?>">
                                    <? echo $type[$i]['product_types_name_th'];?>
                                    </option>
                                    <? }?>
                                </select>
                            </div>
                        </div>   
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>ราคา<font color="#F00"><b>*</b></font></label>
                                <input id="product_price" name="product_price" class="form-control" value="<?php echo $product['product_price'];?>" >
                            </div>
                        </div>   
                    </div> 

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Location </label>
                                <select class="form-control  custom-select" id="product_types_id" name="product_types_id">
                                    <? for ($i=0; $i < count($type); $i++) {  ?>
                                    <option selected value="<? echo $type[$i]['product_types_id'];?>">
                                    <? echo $type[$i]['product_types_name_th'];?>
                                    </option>
                                    <? }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Furniture </label>
                                <select class="form-control  custom-select" id="product_types_id" name="product_types_id">
                                    <? for ($i=0; $i < count($type); $i++) {  ?>
                                    <option selected value="<? echo $type[$i]['product_types_id'];?>">
                                    <? echo $type[$i]['product_types_name_th'];?>
                                    </option>
                                    <? }?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">  
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>NO. of Bedroom </label>
                                <input id="product_name_th" name="product_name_th" class="form-control"  value="<?php echo $product['product_price'];?>" >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>No. of Bathroom </label>
                                <input id="product_name_en" name="product_name_en" class="form-control"  value="<?php echo $product['product_price'];?>" >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูป</label>
                                <img id="img_product_img" src="../img_upload/product/<?php echo $product['product_img']; ?>" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="product_img" name="product_img" class="form-control" style="" onChange="readURL(this,'product_img');">
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row">    
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด</label> 
                                <textarea id="product_detail_th" name="product_detail_th" class="form-control" style="min-height: 200px;"/><?php echo $product['product_detail_th'];?></textarea>
                            </div>
                        </div> 
                    </div> 
                    <div class="row">    
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด</label> 
                                <textarea id="product_detail_en" name="product_detail_en" class="form-control" style="min-height: 200px;"/><?php echo $product['product_detail_en'];?></textarea>
                            </div>
                        </div> 
                    </div> 

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=product';" >ย้อนกลับ</button>
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