<?PHP 
require_once('models/ProductModel.php');    
$product_model = new ProductModel;   
$product_header = $product_model-> getProductHeaderBy();
// print_r($product_header);
require_once('models/ProductModel.php');    
$product_model = new ProductModel;   
$product = $product_model->getProductBy(); 
?>

<div style="padding: 5% 10%;">
    <div class="text-center">
        <div class="text-header-medium">
            <?PHP if ($lng == "TH"){echo $product_header[0]['product_header_th'] ;}else{echo $product_header[0]['product_header_en'] ;} ?>
        </div>
        <div class="text-detail" style="padding: 3.5% 20%;">
            <?PHP if ($lng == "TH"){echo $product_header[0]['product_header_detail_th'] ;}else{echo $product_header[0]['product_header_detail_en'] ;} ?>
        </div>

        <div class="row">
        <?PHP for($i=0;$i<count($product );$i++){ ?> 
                <div class="col-md-4">
                <img src="img_upload/product/<?PHP echo $product[$i]['product_img'];?>" style="width: 90%;" alt="<?PHP echo $product[$i]['product_name'];?>">
                <div class="text-regular" style="padding-top: 48px;">
                <?PHP echo $product[$i]['product_name'];?>
                <?PHP echo $product[$i]['product_name'];?>
                </div>
                <div class="text-regular" style="padding: 16px 0px; color: #c6c6c6;">
                <?php echo number_format($product[$i]['product_price']); ?> ฿
                </div>
            </div>
            <?PHP } ?>
        </div>
    </div>
</div>