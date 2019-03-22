<div class="container" style="margin-bottom: 7vw;">
    <fieldset class="border-poplar-home ">
        <legend class="topic-popular-home">
        <?PHP
            if($lng == "TH"){
                echo 'อสังหาริมทรัพย์ยอดนิยม';
            }else{
                echo 'POPPULAR PROPERTIES';
            } 
            ?>
        </legend>
        <div class="row" style="max-width: 1100px;margin: auto;">
            <div class="element-item col-lg-6 col-md-6 col-sm-6 col-6 img-poppular-home-padding">
            <a href="property.php?action=product&id=<?PHP  echo ($product_popular[0]['product_id']) ?>">
                <img class="img-poppular-home1"
                    src="img_upload/product_image/<?PHP  echo ($product_popular[0]['product_image_img']) ?>"></a>
            </div>
            <div class="element-item col-lg-6 col-md-6 col-sm-6 col-6 img-poppular-home-padding">
            <a href="property.php?action=product&id=<?PHP  echo ($product_popular[1]['product_id']) ?>">
                <img class="img-poppular-home1"
                    src="img_upload/product_image/<?PHP  echo ($product_popular[1]['product_image_img']) ?>"></a>
            </div>
        </div>
        <div class="row" style="max-width: 1100px;margin: auto; padding-top: 1vw; padding-bottom: 1vw;">
            <div class="element-item col-lg-4 col-md-4 col-sm-4 col-4 img-poppular-home-padding">
            <a href="property.php?action=product&id=<?PHP  echo ($product_popular[2]['product_id']) ?>">
                <img class="img-poppular-home2"
                    src="img_upload/product_image/<?PHP  echo ($product_popular[2]['product_image_img']) ?>"></a>
            </div>
            <div class="element-item col-lg-4 col-md-4 col-sm-4 col-4 img-poppular-home-padding">
            <a href="property.php?action=product&id=<?PHP  echo ($product_popular[3]['product_id']) ?>">
                <img class="img-poppular-home2"
                    src="img_upload/product_image/<?PHP  echo ($product_popular[3]['product_image_img']) ?>"></a>
            </div>
            <div class="element-item col-lg-4 col-md-4 col-sm-4 col-4 img-poppular-home-padding">
            <a href="property.php?action=product&id=<?PHP  echo ($product_popular[4]['product_id']) ?>">
                <img class="img-poppular-home3"
                    src="img_upload/product_image/<?PHP  echo ($product_popular[4]['product_image_img']) ?>"></a>
            </div>
        </div>
    </fieldset>
</div>
