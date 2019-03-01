<script>
    function check(){
        var product_name_th = document.getElementById("product_name_th").value; 
        var product_name_en = document.getElementById("product_name_en").value; 
        var product_price = document.getElementById("product_price").value; 
        // var product_img = document.getElementById("product_img").value; 
        var product_detail_th = document.getElementById("product_detail_th").value; 
        var product_detail_en = document.getElementById("product_detail_en").value; 
        var product_bathroom = document.getElementById("product_bathroom").value; 
        var product_bedroom = document.getElementById("product_bedroom").value; 
        var product_longitude = document.getElementById("product_longitude").value; 
        var product_latitude = document.getElementById("product_latitude").value; 

        product_name_th = $.trim(product_name_th);
        product_name_en = $.trim(product_name_en);
        product_price = $.trim(	product_price);
        // // product_img = $.trim(	product_img);
        product_detail_th = $.trim(product_detail_th);
        product_detail_en = $.trim(product_detail_en);
        product_bathroom = $.trim(product_bathroom);
        product_bedroom = $.trim(product_bedroom);
        product_longitude = $.trim(product_longitude);
        product_latitude = $.trim(product_latitude);

        if(product_name_th.length == 0){
            alert("กรุณากรอกชื่อ");
            document.getElementById("product_name_th").focus();
            return false;
        }else if(product_name_en.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_name_en").focus();
            return false;
        }else if(product_price.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_price").focus();
            return false;
        // }else if(product_img.length == 0){
            // alert("กรุณาเลือกรูปภาพ");
            // document.getElementById("product_img").focus();
            return false;
        }else if(product_detail_th.length == 0){
            alert("กรุณากรอกรายละเอียด");
            document.getElementById("product_detail_th").focus();
            return false;
        }else if(product_detail_en.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_detail_en").focus();
            return false;
        }else if(product_bathroom.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_bathroom").focus();
            return false;
        }else if(product_bedroom.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_bedroom").focus();
            return false;
        }else if(product_longitude.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_longitude").focus();
            return false;
        }else if(product_latitude.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_latitude").focus();
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
                                <select class="form-control  custom-select" id="location_id" name="location_id">
                                    <? for ($i=0; $i < count($location); $i++) {  ?>
                                    <option selected value="<? echo $location[$i]['location_id'];?>">
                                    <? echo $location[$i]['location_name_th'];?>
                                    </option>
                                    <? }?>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Furniture </label>
                                <select class="form-control  custom-select" id="furniture_id" name="furniture_id">
                                    <? for ($i=0; $i < count($furniture); $i++) {  ?>
                                    <option selected value="<? echo $furniture[$i]['furniture_id'];?>">
                                    <? echo $furniture[$i]['furniture_name_th'];?>
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
                                <input id="product_bedroom" name="product_bedroom" class="form-control" value="<?php echo $product['product_bedroom'];?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>No. of Bathroom </label>
                                <input id="product_bathroom" name="product_bathroom" class="form-control" value="<?php echo $product['product_bedroom'];?>">
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

<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->
                    <fieldset class="gllpLatlonPicker">
                        <input type="text" class="gllpSearchField form-control" placeholder="ค้นหาตำแหน่ง">
                        <input type="button" class="gllpSearchButton btn btn-primary" value="ค้นหา">
                        <div class="gllpMap" style="width: 85em;  height: 20em;">Google Maps</div>
                        <!-- <div class="gllpMap" style="width: 100%; height: 80%;">Google Maps</div> -->
                        <input type="text" class="gllpLatitude form-control" name="product_latitude" value="<?PHP echo $contact_us[0]['product_latitude'];?><?php echo $product['product_latitude'];?>"/>
                        <input type="text" class="gllpLongitude form-control" name="product_longitude" value="<?PHP echo $contact_us[0]['product_longitude'];?><?php echo $product['product_longitude'];?>"/>
                        <input type="hidden" class="gllpZoom" value="14" />
                    </fieldset>

                    <script src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false"></script>
                    <script src="../template/map/js/jquery-gmaps-latlon-picker.js"></script>
<!-- ---------------------------------------------------------------------------------------------------------------------------------- -->


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