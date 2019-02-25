<div class="row">
  <div class="col-lg-12">
    <div>
     <h1>ระบบจัดการประเภทสินค้า</h1>
     <h2>เพิ่ม ลบ เเก้ไข ประเภทสินค้า</h2> 
     <div align=right>
      <a href="?content=Types&action=insert">
        <input class="button" type="submit" value="เพิ่ม">
      </a>
    </div> 
  </div>
  <table>
    <thead>
      <tr>
        <th>#</th>
        <th width="10%">รูปภาพ</th>    
        <th width="30%">ชื่อประเภทสินค้า</th>    
        <th>เเก้ไข</th>
        <th>ลบ</th>
      </tr>
    </thead>
    <tbody>
    <?php 
      for($i=0; $i < count($types); $i++){
        ?>
        <tr>
          <td><?php echo $i+1; ?></td> 
          <td>
            <div align="center">
              <img  class="img-fluid" src="../img_upload/Types/<?php if($types[$i]['types_img'] != "") echo $types[$i]['types_img']; else echo "default.png" ?>" height="72" width="auto"/>  
            </div>
          </td>  
          <td>
          <?php echo $types[$i]['types_name'];?>
          </td> 

          <td> 
            <a href="?content=Types&action=update&id=<?php echo $types[$i]['types_id'];?>" style="font-size: 20px;">
              <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
            </a> 
          </td> 
          <td>  
            <a href="?content=Types&action=delete&id=<?php echo $types[$i]['types_id'];?>" onclick="return confirm('คุณต้องการลบรูปสไลด์?'
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