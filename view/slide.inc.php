<?php

require_once('models/ProductModel.php');  
$home_slide_model = new ProductModel;
$home_slide = $home_slide_model-> getProductBy();
// echo "<pre>";
// print_r($home_slide);
// echo "</pre>";
?>

<section class="slide slide-background-img">
    <?PHP for($i=0;$i<count($home_slide );$i++){ ?>
    <div class="col-12">
        <div class="row">
            <div class="col-md-8">
                <div>
                    <?PHP echo $home_slide[$i]['product_name'];?>
                </div>
                <div class="slide-product-detail">
                    <?PHP echo $home_slide[$i]['product_detail'];?>
                </div>
                <div class="row">
                    <div class="">
                        <a name="" id="" class="btn btn-primary" href="#" role="button">VIEW DETAIL</a> &nbsp;&nbsp;&nbsp;&nbsp;
                    </div>
                    <div class="">
                        <a name="" id="" class="  btn-outline-light" href="#" role="button">VIEW DETAIL</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div>
                    <img class="img-fluid" src="img_upload/product/<?PHP echo $home_slide[$i]['product_img'];?>">
                </div>
            </div>
        </div>
    </div>
    <?PHP } ?>
</section>

<style>
.slide-background-img {
    background-color: chocolate;
    /* background-image: url('img_upload/product/27022019115248-2201201916461622012019164616749792239.jpg'); */
}
.slide-product-detail {
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
}
</style>

<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide").slick({
        arrows: false,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
    });
});
</script>