<div class="row">
  <div class="col-lg-12">
    <div>
     <h1>ระบบจัดการบริการ</h1>
     <h2>เพิ่ม ลบ เเก้ไข บริการ</h2> 
     <div align=right>
      <a href="?content=services&action=insert">
        <input class="button" type="submit" value="เพิ่ม">
      </a>
    </div> 
  </div>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th width="20%">รูปภาพ</th>    
        <th width="20%">ชื่อบริการ TH</th>    
        <th width="20%">ชื่อบริการ EN</th>    
        <th>เเก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      for($i=0; $i < count($services); $i++){
        ?>
        <tr>
          <td><?php echo $i+1; ?></td> 
          <td>
            <div align="center">
              <img  class="img-fluid" src="../img_upload/services/<?php if($services[$i]['services_img'] != "") echo $services[$i]['services_img']; else echo "default.png" ?>" height="72" width="auto"/>  
            </div>
          </td>  
          <td>
            <?php echo $services[$i]['services_name_th'];?>
          </td> 
          <td>
            <?php echo $services[$i]['services_name_en'];?>
          </td> 
          <td> 
            <a href="?content=services&action=update&id=<?php echo $services[$i]['services_id'];?>" style="font-size: 20px;">
              <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
            </a> 
          </td> 
          <td>  
            <a href="?content=services&action=delete&id=<?php echo $services[$i]['services_id'];?>" onclick="return confirm('คุณต้องการลบ?'
            );" style="color:red; font-size: 20px;">
              <i class="fa fa-times" aria-hidden="true"></i>
            </a> 
          </td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>