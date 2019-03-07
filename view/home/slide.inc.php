<?php require_once('view/menu.inc.php')?>
<section class="col-lg-12 no-padding" style="position: relative;">


    <img class="size-img-slide" src="img_upload/home/2.jpg">
    <div class="overlay">
    </div>
    <div class="overlay2">
    </div>

    <section class="slide no-padding slide-home ">

        <?PHP for ($i=0; $i < count($product); $i++) { ?>

        <div class="col-12">
            <div class="container">

                <div class="row">
                    <div class="col-7" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">

                                    <?PHP if ($lan=="TH") {
                                        echo $product[$i]['product_name_th'];
                                    } else{
                                        echo $product[$i]['product_name_en'];
                                    }?>

                                </div>
                                <div class="slide-text-detail">

                                    <?PHP if ($lan=="TH") {
                                        echo $product[$i]['product_detail_th'];
                                    } else{
                                        echo $product[$i]['product_detail_en'];
                                    }?>

                                </div>
                                <div class="btn btn-slide">
                                    VIEW DETAIL
                                </div>
                                <a href="property.php" class="btn btn-slide">
                                    SEE ALL PROPERTY
                                </a>
                            </div>
                        </div>



                    </div>
                    <div class="col-5" style="position: relative;">
                        <img class="rounded-circle float-right"
                            src="img_upload/product_image/<?PHP echo $product[$i]['product_image_img'];?>"
                            alt="Los Angles">

                        <div class="rounded-circle on-img float-right">
                            <p class="price-slide1">
                                <?PHP echo number_format($product[$i]['product_price'],2);?>
                            </p>
                            <p class="price-slide2">foe sale</p>
                            <!-- <img class="rounded-circle on-img float-right" src="" alt="Los Angles"> -->
                        </div>
                    </div>



                </div>

            </div>
        </div>
        <?PHP }?>

        </div>
        </div>

    </section>


    <form action="index.php?search=1" method="post">
        <div class=""
            style="width: 100%; bottom: -8%; position: absolute; z-index: 9999; text-align: center; padding-left: 20%; padding-right: 20%;">
            <div class="shadow-lg" style="background-color: white;">


                <div class="row" style="padding: 1vw;">
                    <div class="col-sm-3">
                        <div class="text-left">
                            <div class="form-group">
                                <br />
                                <select class="form-control  custom-select" id="location_id" name="location_id">
                                    <option value=""> Location</option>
                                    <?PHP for ($i=0; $i < count($location); $i++) {  ?>
                                    <option value="<?PHP echo $location[$i]['location_id'];?>">
                                        <?PHP if($lan =='TH'){ echo $location[$i]['location_name_th']; } else { echo $location[$i]['location_name_en'];}?>
                                    </option>
                                    <?PHP } ?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="text-left">
                            <div class="form-group">
                                <br />
                                <select class="form-control  custom-select" id="product_types_id"
                                    name="product_types_id">
                                    <option value=""> Property type</option>
                                    <?PHP for ($i=0; $i < count($type); $i++) {  ?>
                                    <option value="<?PHP echo $type[$i]['product_types_id'];?>">
                                        <?PHP if($lan =='TH'){ echo $type[$i]['product_types_name_th']; } else { echo $type[$i]['product_types_name_en'];}?>
                                    </option>
                                    <?PHP } ?>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="text-left">
                            <div class="form-group">
                                <br />
                                <div class="form-group">
                                    <input id="keyword" name="keyword" class="form-control" placeholder="KEYWORD" />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <button type="submit" class="btn btn-search">
                            SEARCH
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </form>


</section>

<!-- <div class="container">


      
    </div> -->

<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide").slick({
        arrows: false,
    });
});
</script>