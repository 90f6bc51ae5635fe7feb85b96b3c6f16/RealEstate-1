<script>
    function check(){
        var product_name_th = document.getElementById("product_name_th").value; 
        var product_name_en = document.getElementById("product_name_en").value; 
        var product_price = document.getElementById("product_price").value; 
        var product_img = document.getElementById("product_img").value; 
        var product_detail_th = document.getElementById("product_detail_th").value; 
        var product_detail_en = document.getElementById("product_detail_en").value; 

        product_name_th = $.trim(product_name_th);
        product_name_en = $.trim(product_name_en);
        product_price = $.trim(	product_price);
        product_img = $.trim(	product_img);
        product_detail_th = $.trim(product_detail_th);
        product_detail_en = $.trim(product_detail_en);

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
        }else if(product_img.length == 0){
            alert("กรุณาเลือกรูปภาพ");
            document.getElementById("product_img").focus();
            return false;
        }else if(product_detail_th.length == 0){
            alert("กรุณากรอกรายละเอียด");
            document.getElementById("product_detail_th").focus();
            return false;
        }else if(product_detail_en.length == 0){
            alert("กรุณากรอกราคา");
            document.getElementById("product_detail_en").focus();
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
        <h1>เพิ่ม</h1>

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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=product&action=add" enctype="multipart/form-data">
                    <div class="row">  
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>ชื่อ<font color="#F00"><b>TH</b></font></label>
                                <input id="product_name_th" name="product_name_th" class="form-control"  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>ชื่อ<font color="#F00"><b>EN</b></font></label>
                                <input id="product_name_en" name="product_name_en" class="form-control"  >
                            </div>
                        </div>
                    </div>
                    <div class="row">  
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>ประเภท <font color="#F00"><b>*</b></font></label>
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
                                <label> ราคา <font color="#F00"><b>*</b></font></label>
                                <input id="product_price" name="product_price" class="form-control"  >
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
                                <input id="product_bedroom" name="product_bedroom" class="form-control"  >
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>No. of Bathroom </label>
                                <input id="product_bathroom" name="product_bathroom" class="form-control"  >
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูป </label>
                                <img id="img_product_img" src="../img_upload/default.png" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="product_img" name="product_img" class="form-control" style="" onChange="readURL(this,'product_img');">
                            </div>
                        </div> 
                    </div>
                     
                    <div class="row">  
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด<font color="#F00"><b>TH</b></font></label>
                                <Textarea id="product_detail_th" name="product_detail_th" class="form-control" style=""  > </Textarea>
                            </div>
                        </div>    
                    </div>
                    <div class="row">  
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด<font color="#F00"><b>EN</b></font></label>
                                <Textarea id="product_detail_en" name="product_detail_en" class="form-control" style=""  > </Textarea>
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