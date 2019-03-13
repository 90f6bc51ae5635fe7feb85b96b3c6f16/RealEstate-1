

<?php 






require_once('models/TypesModel.php');
$type_model = new TypesModel;
$type = $type_model->getTypesBy();
$type_popular = $type_model->getTypesByPopular();

// echo "<pre>";
// print_r($type) ;
// echo "</pre>";

require_once('models/LocationModel.php');
$location_model = new LocationModel;
$location = $location_model->getLocationBy();
// echo "<pre>";
// print_r($location) ;
// echo "</pre>";



require_once('models/ProductModel.php');
$product_model = new ProductModel;
$product = $product_model->getProducImgtBy();
$product_header = $product_model->getProductHeaderBy();
// echo "<pre>";
// print_r($product) ;
// echo "</pre>";


if ($_GET['search'] == '1') {


    // echo $_GET['location_id'] . ' ' . $_GET['product_types_id'] .' '. $_GET['keyword'];

    $product_by_type = $product_model->getProducSearchBy($_GET['location_id'], $_GET['product_types_id'], $_GET['keyword']);
    // echo "<pre>";
    // print_r($product_by_type);
    // echo "</pre>";
    // echo $product_by_type[0]['location_name_th'];
}



?>


<div class="top">
    <div class="col-12 p-0">
        <!-- div col-12 -->
        <div class="text-center">
            <h1 class="property-pro-h1">
                <?PHP if ($lng == 'TH') {
                    echo ($type_by_id['product_types_name_th'] );
                } else {
                    echo ($type_by_id['product_types_name_en'] );
                } ?>

                <?PHP if ($lng == 'TH') {
                    echo (  $product_by_type[0]['location_name_th']);
                } else {
                    echo (   $product_by_type[0]['location_name_en']);
                } ?>
            </h1>
            <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 5%;">
        </div>
        <div class="row m-0">
            <!-- div row -->
            <?PHP for ($i = 0; $i < count($product_by_type); $i++) {
                # code...
                // $type[$i][''];
                ?>
            <div class="col-lg-4 col-sm-6 col-md-4 p-1 text-center">
                <div style="background-color: #f2f2f2;">
                    <div class="col" style="padding: 0% 0% 5% 0%;">
                        <div class="property-bg" style="background-image: url(img_upload/product_image/<?PHP echo ($product_by_type[$i]['product_image_img']); ?>);">
                        </div>
                    </div>
                    <div class="col p-1">
                        <h4 class="property-pro-cut-h4">
                            <?PHP if ($lng == 'TH') {
                                echo ($product_by_type[$i]['product_name_th']);
                            } else {
                                echo ($product_by_type[$i]['product_name_en']);
                            } ?>
                        </h4>
                    </div>
                    <div class="col-12" style="padding: 0% 1% 5% 1%;">
                        <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 50%;">
                        <p class="property-pro-cut-text">
                            <?PHP if ($lng == 'TH') {
                                echo ($product_by_type[$i]['product_detail_th']);
                            } else {
                                echo ($product_by_type[$i]['product_detail_en']);
                            } ?>
                        </p>
                    </div>
                    <div class="col" style="padding: 5% 0% 10% 0%;">
                        <a href="property.php?action=product&id=<?PHP echo $product_by_type[$i]['product_id']; ?>&type_id=<?PHP echo $product_by_type[$i]['product_types_id']; ?>" class="btn property-pro-btn" tabindex="0">
                            DETAIL >
                        </a>
                    </div>
                </div>
            </div>
            <?php 
        } ?>
            <!-- /div row -->
        </div>
        <!-- /div col-12 -->
    </div>
    <!-- <> -->
</div> 