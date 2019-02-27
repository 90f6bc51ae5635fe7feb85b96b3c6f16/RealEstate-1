<script>
    function check(){
        var news_name = document.getnewsById("news_name").value; 
        var news_img = document.getElementById("news_img").value;
        var news_detail = document.getnewsById("news_detail").value; 
 
        news_name = $.trim(news_name); 
        news_img = $.trim(	news_img);
        news_detail = $.trim(news_detail); 
        
        if(news_name.length == 0){
            alert("กรุณากรอกชื่อ");
            document.getnewsById("news_name").focus();
            return false; 
        }else if(news_img.length == 0){
            alert("กรุณาเลือกรูปภาพ");
            document.getElementById("news_img").focus();
            return false;
        }else if(news_detail.length == 0){
            alert("กรุณากรอกราย");
            document.getnewsById("news_detail").focus();
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
            $('#img_'+id).attr('src', '../img_upload/news/default.png');
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=news&action=edit" enctype="multipart/form-data">
                    <input type="hidden"  id="news_id" name="news_id" value="<?php echo $news['news_id']; ?>" />
                    <input type="hidden"  id="news_img_o" name="news_img_o" value="<?php echo  $news['news_img'] ;?>" />

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label>ชื่อ <font color="#F00"><b>*</b></font></label>
                                <input id="news_name" name="news_name" class="form-control" value="<?php echo $news['news_name'];?>" >
                            </div>
                        </div>                        
                    </div> 

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูป </label>
                                <img id="img_news_img" src="../img_upload/news/<?php echo $news['news_img']; ?>" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="news_img" name="news_img" class="form-control" style="" onChange="readURL(this,'news_img');">
                            </div>
                        </div> 
                    </div>
                    
                    <div class="row">    
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียด </label> 
                                <textarea id="news_detail" name="news_detail" class="form-control" style="min-height: 200px;"/><?php echo $news['news_detail'];?></textarea>
                            </div>
                        </div> 
                    </div> 

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=news';" >ย้อนกลับ</button>
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