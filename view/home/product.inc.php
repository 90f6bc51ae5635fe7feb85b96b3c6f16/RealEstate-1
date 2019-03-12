
<div style="padding: 5% 10%;">
    <div class="text-center" style="padding-top: 7vw;">
        <div class="text-product-home-topic">
        <?PHP if ($lan == 'TH') { ?>
           <?PHP  echo ($product_header[0]['product_header_th']) ?>
        <?PHP } else { ?>
           <?PHP  echo ($product_header[0]['product_header_en']) ?>
        <?PHP } ?>
        </div>
        <div class="text-product-home">
        
        <?PHP if ($lan == 'TH') { ?>
           <?PHP  echo ($product_header[0]['product_header_detail_th']) ?>
        <?PHP } else { ?>
           <?PHP  echo ($product_header[0]['product_header_detail_en']) ?>
        <?PHP } ?>


        </div>
        
        <div class="responsive" style="margin-right: 1vw;">
                <?PHP for($i=0;$i<count($product );$i++){ ?>
                <div class="" style="border: ridge;">
                    <img src="img_upload/product_image/<?PHP echo $product[$i]['product_image_img'];?>" style="width: 100%;"
                        alt="">
                    <div class="text-regular" style="padding-top: 20px;">
                        <div class="product-product-name">


                            <?PHP if ($lan == 'TH') { ?>
                            <?PHP  echo ($product[$i]['product_name_th']) ?>
                            <?PHP } else { ?>
                            <?PHP  echo ($product[$i]['product_name_en']) ?>
                            <?PHP } ?>


                        </div>
                        <div class="product-product-detail">

                            <?PHP if ($lan == 'TH') { ?>
                            <?PHP  echo ($product[$i]['product_detail_th']) ?>
                            <?PHP } else { ?>
                            <?PHP  echo ($product[$i]['product_detail_en']) ?>
                            <?PHP } ?>


                        </div>
                    </div>
                    <div class="text-regular" style="padding: 16px 0px; color: #c6c6c6;">
                        <button type="button" class="btn btn-outline-success">VIEW DETAIL</button>
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
    $('.responsive').slick({
        infinite: true,
        speed: 200,
        slidesToShow: 3,
        arrows: false,
        slidesToScroll: 3,
        responsive: [
            {
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
            },
            {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
            },
            {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
});
});
</script>