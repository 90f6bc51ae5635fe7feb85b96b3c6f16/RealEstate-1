<?PHP 
require_once('models/ProductModel.php');    
$product_model = new ProductModel;   
$product_header = $product_model-> getProductHeaderBy();
// print_r($product_header);
require_once('models/ProductModel.php');    
$product_model = new ProductModel;   
$product = $product_model->getProductBy(); 
// print_r($product);

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
                <img src="img_upload/home/1.jpg<?PHP echo $product[$i]['product_img'];?>" style="width: 90%;"
                    alt="<?PHP echo $product[$i]['product_name_th'];?>">
                <div class="text-regular" style="padding-top: 48px;">
                    <div class="product-product-name">
                        <?PHP echo $product[$i]['product_name_th'];?>
                    </div>
                    <div class="product-product-detail">
                        <?PHP echo $product[$i]['product_detail_th'];?>
                    </div>
                </div>
                <div class="text-regular" style="padding: 16px 0px; color: #c6c6c6;">
                <button type="button" class="btn btn-outline-success">Success</button>

                
                <button class="btn btn-primary" type="submit"><?php echo number_format($product[$i]['product_price'],2); ?></button>

                    
                </div>
            </div>
            <?PHP } ?>
        </div>
    </div>
</div>



<style>
@import url('https://fonts.googleapis.com/css?family=K2D:300');

.product-product-detail {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    font-family: 'K2D', sans-serif;
}

.product-product-name {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>