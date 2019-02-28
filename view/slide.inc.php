<?PHP
require_once('models/ProductModel.php');
$slide_model = new ProductModel;
$slide = $slide_model -> getProductBy();
?>




<div class="menu-slide-style">
    <section class="menu-slide">
        <?php for ($i = 0; $i < count($slide); ++$i) { ?>
            <div class="menu-slide-item"  >
                <div class="menu-slide-detail" >
                    <div class="row">
                        <div class="col-lg-7 menu-slide-title">
                        <h4 class="pb-4"><?php if ($lng == TH) {  echo "ยินดีต้อนรับเข้าสู่";   }else {  echo "Welcome To"; }  ?></h4>
                            <h1 class="pb-4"><?php if ($lng == TH) {  echo $slide[$i]['slide_title_th'];   }else {  echo $slide[$i]['slide_title_en'];  }  ?></h1>
                            <div class="d-none d-lg-block">
                                <h3 class="pb-4"><?php if ($lng == TH) {  echo $slide[$i]['slide_sub_title_th'];   }else {  echo $slide[$i]['slide_sub_title_en'];  }  ?></h3>
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