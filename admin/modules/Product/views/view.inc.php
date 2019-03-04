<div class="row">
    <div class="col-lg-12">
        <div>
            <h1>ระบบจัดการสินค้า</h1>
            <h2>เพิ่ม ลบ เเก้ไข สินค้า</h2>
            <!-- <div align=right>
                <a href="?content=product&action=insert">
                    <input class="button" type="submit" value="เพิ่ม">
                </a>
            </div> -->
        </div>




        <form id="form_target" role="form" method="post" action="index.php?content=product&action=edit_head">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <h2> </h2>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="" id="" class="btn btn-warning btn-xs float-right"
                                btn-block>แก้ไข</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label> </label>
                        <div class="row">
                            <div class="col-lg-6">
                                <font color="#F00"><b>TH</b></font>
                                <input id="product_header_th" name="product_header_th"
                                    value="<?PHP echo $product_header[0]['product_header_th'];?>"
                                    class="form-control" />

                                <textarea class="form-control " id="product_header_detail_th"
                                    name="product_header_detail_th"
                                    rows="5"><?PHP echo $product_header[0]['product_header_detail_th'];?></textarea>
                            </div>
                            <div class="col-lg-6">
                                <font color="#F00"><b>EN</b></font>
                                <input id="product_header_en" name="product_header_en"
                                    value="<?PHP echo $product_header[0]['product_header_en'];?>"
                                    class="form-control" />
                                <textarea class="form-control " id="product_header_detail_en"
                                    name="product_header_detail_en"
                                    rows="5"><?PHP echo $product_header[0]['product_header_detail_en'];?></textarea>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div align=right>
            <a href="?content=product&action=insert">
                <input class="button" type="submit" value="เพิ่ม">
            </a>
        </div>


        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th width="20%">รูปภาพ</th>
                    <th width="20%">ชื่อสินค้า TH</th>
                    <th width="20%">ชื่อสินค้า EN</th>
                    <th width="20%">ประเภท TH</th>
                    <th width="20%">ประเภท EN</th>
                    <th width="20%">ราคา</th>
                    <th>รูปภาพเพิ่มเติม</th>
                    <th>เเก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php 
      for($i=0; $i < count($product); $i++){
        ?>
                <tr>
                    <td><?php echo $i+1; ?></td>
                    <td>
						<a href="?content=product_image&product_id=<?php echo $product[$i]['product_id'];?>" style="color: green;">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</a> 
					</td>
                    <td>
                        <?php echo $product[$i]['product_name_th'];?>
                    </td>
                    <td>
                        <?php echo $product[$i]['product_name_en'];?>
                    </td>
                    <td>
                        <?php echo $product[$i]['product_types_name_th'];?>
                    </td>
                    <td>
                        <?php echo $product[$i]['product_types_name_en'];?>
                    </td>
                    <td>
                        <?php echo $product[$i]['product_price'];?>
                    </td>

                    <td>
						<a href="?content=product_highlight&product_id=<?php echo $product[$i]['product_id'];?>" style="color: green;">
							<i class="fa fa-plus" aria-hidden="true"></i>
						</a> 
					</td>


                    <td>
                        <a href="?content=product&action=update&id=<?php echo $product[$i]['product_id'];?>"
                            style="font-size: 20px;">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        </a>
                    </td>
                    <td>
                        <a href="?content=product&action=delete&id=<?php echo $product[$i]['product_id'];?>"
                            onclick="return confirm('คุณต้องการลบ?');" style="color:red; font-size: 20px;">
                            <i class="fa fa-times" aria-hidden="true"></i>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>