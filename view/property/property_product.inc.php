<div class="top">
    <div class="col-12 p-0">
        <!-- div col-12 -->
        <div class="text-center">
                <h1 class="property-pro-h1">
                    <?PHP if($lng == 'TH') { print_r($type_by_id['product_types_name_th']); } else {  print_r($type_by_id['product_types_name_en']);  } ?>
                </h1>
                <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 5%;">
            </div>            
        <div class="row m-0">
            <!-- div row -->
            

            
            <?PHP for ($i=0; $i < count($product_by_type); $i++) { 
                    # code...
                    // $type[$i][''];
                    ?>

                    
            <div class="col-lg-4 col-sm-6 col-md-4 p-1 text-center" >
                <div style="background-color: #f2f2f2;">
                    <div class="col" style="padding: 0% 0% 5% 0%;">
                        <div class="property-bg" style="background-image: url(img_upload/product_image/<?PHP print_r($product_by_type[$i]['product_image_img']); ?>);">
                        </div>
                    </div>
                    <div class="col">
                        <h6>

                            <?PHP if($lng == 'TH') { print_r($product_by_type[$i]['product_name_th']); } else {  print_r($product_by_type[$i]['product_name_en']);  } ?>


                        </h6>

                    </div>

                    <div class="col-12" style="padding: 0% 0% 5% 0%;";>
                    <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 50%;">
                        <p class="cut-text-multi"> 
                        
                        <?PHP if($lng == 'TH') { print_r($product_by_type[$i]['product_detail_th']); } else {  print_r($product_by_type[$i]['product_detail_en']);  } ?>


                        </p>
                    </div>
                    <div class="col" style="padding: 5% 0% 10% 0%;">
                        <a type="button" href="property.php?action=product&id=<?PHP echo $product_by_type[$i]['product_id']; ?>&type_id=<?PHP echo $product_by_type[$i]['product_types_id']; ?>" class="btn btn-default" role="button">
                            DETAIL >
                        </a>
                    </div>
                </div>
            </div>

            <!-- /div row -->

            
            <?php } ?>
        </div>


        <!-- /div col-12 -->
    </div>
    <!-- <> -->
</div>