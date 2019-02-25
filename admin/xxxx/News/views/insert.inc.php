<script>
    function check(){
        var news_name = document.getElementById("news_name").value;
        var news_detail = document.getElementById("news_detail").value;

        news_name = $.trim(news_name);
        news_detail = $.trim(	news_detail);
        
        if(news_name.length == 0){
            alert("กรุณากรอกชื่อเทรนด์สินค้า");
            document.getElementById("news_name").focus();
            return false;
        }else if(news_detail.length == 0){
            alert("กรุณากรอกรายละเอียดสินค้า");
            document.getElementById("news_detail").focus();
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
                <form role="form" method="post" onsubmit="return check();" action="index.php?content=News&action=add" enctype="multipart/form-data">
                     
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>ชื่อสินค้า <font color="#F00"><b>*</b></font></label>
                            <input id="news_name" name="news_name" class="form-control"  >
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group" >
                                <label>รูปข่าว </label>
                                <img id="img_news_img" src="../img_upload/default.png" class="img-fluid shadows hoverable"  > 
                                <input accept=".jpg , .png" type="file" id="news_img" name="news_img" class="form-control" style="" onChange="readURL(this,'news_img');">
                            </div>
                        </div> 
                    </div>
                     
                    <div class="row">  
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>รายละเอียดสินค้า <font color="#F00"><b>*</b></font></label>
                                <Textarea id="news_detail" name="news_detail" class="form-control" style=""  > </Textarea>
                            </div>
                        </div>    
                    </div>

                    <div align="right">
                        <button type="button" class="btn btn-default" onclick="window.location='?content=News';" >ย้อนกลับ</button>
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