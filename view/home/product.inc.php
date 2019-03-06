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
    <div class="text-center" style="padding-top: 7vw;">
        <div class="text-product-home-topic">
            We are Offering the Best Real Estate Deals
        </div>
        <div class="text-product-home">
            <?PHP if ($lng == "TH"){echo $product_header[0]['product_header_detail_th'] ;}else{echo $product_header[0]['product_header_detail_en'] ;} ?>
        </div>
        
        <div class="multiple-items" style="margin-right: 1vw;">
                <?PHP for($i=0;$i<count($product );$i++){ ?>
                <div class="" style="border: ridge;">
                    <img src="img_upload/home/1.jpg" style="width: 100%;"
                        alt="<?PHP echo $product[$i]['product_name_th'];?>">
                    <div class="text-regular" style="padding-top: 20px;">
                        <div class="product-product-name">
                            Villa with 6 Rooms in Dorobanti Area
                        </div>
                        <div class="product-product-detail">
                            Benefits are: very close to city center, easy access to schools, cafes /
                            restaurants etc... The villa consists; entrance hall, living room, dining room [...]
                        </div>
                    </div>
                    <div class="text-regular" style="padding: 16px 0px; color: #c6c6c6;">
                        <button type="button" class="btn btn-outline-success">Success</button>
                        <button class="btn btn-primary"
                            type="submit"><?php echo number_format($product[$i]['product_price'],2); ?></button>
                    </div>
                </div>
                <?PHP } ?>
           
        </div>
    </div>
</div>



<style>
@import url('https://fonts.googleapis.com/css?family=K2D:300');
</style>
<script>
$(document).on('ready', function() {
    $(".multiple-items").slick({
        dots: true,
        arrows: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
    });
});
</script>