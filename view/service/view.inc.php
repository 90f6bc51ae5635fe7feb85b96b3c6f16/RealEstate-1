<div class="text-center" style="padding-top: 7vw;">
    <h1 class="topic-service">SERVICE </h1>
    <hr class="border-contact" style="border-top: 2px solid  #5a5a5a; width: 5%;">
</div>


<div class="container">
    <div class="row service-row-box">

        <?PHP for ($i = 0; $i < count($services); $i++) { ?>
        <div class="element-item col-lg-4 col-md-6 col-sm-6">
            <div class="shadow-lg mb-5 bg-light service-box">

                <a href="service.php?action=detail&id=<?PHP echo $i; ?>"> <img src="img_upload/services/<?PHP echo $services[$i]['services_img']; ?>" class="size-img-service"></a>
                <div class="row">
                    <div class="col-4">
                        <img class="icon-service" src="img_upload/icon-services/53176142_310652063137173_1974414113991819264_n.png">
                    </div>
                    <div class="col86 all-text-service-detail">
                        <div class="text-sevice-detail1">
                            <?PHP if ($lng == "TH") {
                                echo 'บริการสำหรับ';
                            } else {
                                echo ' SERVICE FOR';
                            } ?>

                        </div>
                        <div class="text-sevice-detail2">
                            <?PHP if ($lng == "TH") {
                                echo $services[$i]['services_name_th'];
                            } else {
                                echo $services[$i]['services_name_en'];
                            } ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <?PHP 
    } ?>



    </div>
</div> 