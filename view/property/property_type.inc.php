<div class="top" id="property">
    <div class="col-12 p-0">
        <!-- div col-12 -->
            <div class="text-center">
                <h1 style="color: #5a5a5a; font-weight: 600">PROPERTY TYPES</h1>
                <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 5%;">
            </div>            
            <div class="row m-0">
                <?PHP for ($i=0; $i < count($type); $i++) { 
                    # code...
                    // $type[$i][''];
                    ?>
                    <a href="property.php?action=detail&id=<?PHP echo $i; ?>">
                <div class="col-lg-4 col-sm-6 col-md-4 p-1" style="position: relative;">
                    <div class="proerty-bg" style="background-image: url(img_upload/types/<?PHP print_r($type[$i]['product_types_img']); ?>);">
                        <div class="property-img ">
                            <div class="property-content">
                                <div class="property-h3">
                                    <?PHP print_r($type[$i]['product_types_name_th']); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </a>
                <?php } ?>
            </div>
        <!-- div col-12 -->
    </div>
</div>