<?PHP
require_once('models/ProductModel.php');
$slide_model = new ProductModel;
$slide = $slide_model -> getProductBy();
// print_r($slide);
?>




<div class="menu-slide-style">
    <section class="menu-slide">
        <?php for ($i = 0; $i < count($slide); ++$i) { ?>
            <div class="menu-slide-item"  >
                <div class="menu-slide-detail" >
                    <div class="row">
                        <div class="col-lg-7 menu-slide-title">
                        <h3 class="pb-4 slide-detail-title"><?php if ($lng == TH) {  echo $slide[$i]['product_name_th'];   }else {  echo$slide[$i]['product_name_en']; }  ?></h3>
                            <h4 class="pb-4 "><?php if ($lng == TH) {  echo $slide[$i][''];   }else {  echo $slide[$i][''];  }  ?></h4>
                            <div class="d-none d-lg-block">
                                <h3 class="pb-4 slide-detail-slide"><?php if ($lng == TH) {  echo $slide[$i]['product_detail_th'];   }else {  echo $slide[$i]['product_detail_en'];  }  ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-slide-color" >
                    <img style=" width: 100%; height: 900px; object-fit: cover;  
                    
            opacity: 0;
            filter: alpha(opacity=0); /* For IE8 and earlier */
                    
                    " src="img_upload/product/<?php echo $slide[$i]['product_img']; ?>">
                </div>
            </div>
        <?php } ?>
    </section>

</div>
<script type="text/javascript">
$(document).on('ready', function() {
    $(".menu-slide").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2500,
    });
});
</script>

<style>
.slide-detail-title {
    display: -webkit-box;
    -webkit-line-clamp: 1;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
.slide-detail-slide {
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>