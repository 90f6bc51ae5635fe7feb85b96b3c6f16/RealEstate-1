<div class="top">
    <div class="col-12 p-0 m-0">
        <!-- div col-12 -->
        <div class="row m-0">
            <!-- 1 -->
            <div class="col-lg-6 col-md-0 col-sm-0"></div>
            <div class="col-lg-6 col-md-12 col-sm-6">
                <h1 class="property-de-h1">
                    <?PHP if ($lng == 'TH') {
                        echo ($product[0]['product_name_th']);
                    } else {
                        echo ($product[0]['product_name_en']);
                    } ?>
                </h1>
                <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width:100%;">
            </div>
            <!-- 1 -->
        </div>
        <div class="row m-0" style="padding: 0% 0% 5% 0%;">
            <div class="col-lg-6 col-md-12 col-sm-6 p-0 ">
                <section class="property-detail-img">
                    <?php for ($j = 0; $j < count($product_img); ++$j) { ?>
                    <img class="property-de-img"
                        src="img_upload/product_image/<?PHP echo ($product_img[$j]['product_image_img']); ?>">
                    <?php 
                } ?>
                </section>
                <script type="text/javascript">
                $(document).on('ready', function() {
                    $(".property-detail-img").slick({
                        arrows: false,
                        dots: false,
                        infinite: true,
                        autoplay: true,
                        autoplaySpeed: 2500,
                    });
                });
                </script>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-6">
                <div class="row m-0">
                    <div class="col" style="padding: 6% 2% 5% 2%;">
                        <p>
                            <?PHP if ($lng == 'TH') {
                                echo ($product[0]['product_detail_th']);
                            } else {
                                echo ($product[0]['product_detail_en']);
                            } ?>
                        </p>
                    </div>
                </div>
                <div>
                    <div class="row p-2 property-de-font p-0 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            Property Type
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo ($type_by_id['product_types_name_th']);
                            } else {
                                echo ($type_by_id['product_types_name_en']);
                            } ?>
                        </div>
                    </div>
                    <div class="row p-2 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            Project Name
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo ($product[0]['product_name_th']);
                            } else {
                                echo ($product[0]['product_name_en']);
                            } ?>
                        </div>
                    </div>
                    <div class="row p-2 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            Location
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo ($product[0]['location_name_th']);
                            } else {
                                echo ($product[0]['location_name_en']);
                            } ?>
                        </div>
                    </div>
                    <div class="row p-2 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            No. of Bedroom
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo ($product[0]['product_bedroom']);
                            } else {
                                echo ($product[0]['product_bedroom']);
                            } ?>
                        </div>
                    </div>
                    <div class="row p-2 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            No. of Bathroom
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo ($product[0]['product_bathroom']);
                            } else {
                                echo ($product[0]['product_bathroom']);
                            } ?>
                        </div>
                    </div>
                    <div class="row p-2 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            Furniture
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo ($product[0]['furniture_name_th']);
                            } else {
                                echo ($product[0]['furniture_name_en']);
                            } ?>
                        </div>
                    </div>
                    <div class="row p-2 m-0">
                        <div class="col-5 p-0 property-de-font-weight">
                            Price (MB)
                        </div>
                        <div class="col-1">
                            :
                        </div>
                        <div class="col-5 col-sm-4 p-0">
                            <?PHP if ($lng == 'TH') {
                                echo number_format($product[0]['product_price'], 2);
                            } else {
                                echo number_format($product[0]['product_price'], 2);
                            } ?>
                        </div>
                    </div>
                    <div class="row" style="padding: 15% 0% 15% 0%">
                        <div class="col-6 p-0">

                            <a href="contact.php#contact" class="btn property-de-btn property-de-font-weight" tabindex="0">
                                    CONTACT US
                                </a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12" style="padding: 5% 0% 0% 0%">
                <div class="row m-0">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center" style="background-color: #f5f5f5;">
                        <div class="col-12" style="padding: 5% 0% 5% 0%">
                            HIGHLIGHT
                        </div>
                        <div class="row m-0">
                            <?php for ($j = 0; $j < count($product_hightlight); ++$j) { ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                                <div class="col-12 property-bg p-0"
                                    style="background-image: url(img_upload/product_highlight/<?PHP echo ($product_hightlight[$j]['product_highlight_img']); ?>);">
                                </div>
                                <div class="col-12 p-0">
                                    <?PHP if ($lng == 'TH') {
                                                echo ($product_hightlight[$j]['product_highlight_name_th']);
                                            } else {
                                                echo ($product_hightlight[$j]['product_highlight_name_en']);
                                            } ?>
                                </div>
                            </div>
                            <?PHP 
                            } ?>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center p-0">
                        <!-- Google Map -->

                        <fieldset class="gllpLatlonPicker" style="height: auto;">
                            <div class="gllpMap property-de-map" style="">Google Maps</div>
                            <input type="text" class="gllpLatitude form-control" name="product_latitude"
                                value="<?PHP echo $product[0]['product_latitude']; ?>" hidden />
                            <input type="text" class="gllpLongitude form-control" name="product_longitude"
                                value="<?PHP echo $product[0]['product_longitude']; ?>" hidden />
                            <input type="hidden" class="gllpZoom" value="14" />
                        </fieldset>
                        <?PHP if ($lng == "TH") {        ?>
                        <script
                            src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false">
                        </script>
                        <?PHP 
                                } else {        ?>
                        <script
                            src="https://maps-api-ssl.google.com/maps/api/js?key=AIzaSyBPYt_mZGd-2iotzhpiZKw1_GpZ6H9w3vs&sensor=false&language=en&region=en">
                        </script>
                        <?PHP 
                                } ?>
                        <script src="template/map/js/jquery-gmaps-latlon-picker.js"></script>

                        <!-- /Google Map -->
                    </div>
                </div>
            </div>
        </div>
        <!-- div col-12 -->
    </div>
</div>
