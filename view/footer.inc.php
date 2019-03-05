<?PHP 
require_once('models/AboutUsModel.php');    
$about_model = new AboutUsModel;   
$about = $about_model-> getAbout_us(); 
$about = $about[0];

require_once('models/TypesModel.php');    
$type_model = new TypesModel;   
$type = $type_model->  getTypesBy(); 
// print_r($type) ;

require_once('models/LocationModel.php');    
$location_model = new LocationModel;   
$location = $location_model->  getLocationBy(); 
// print_r($location) ;



?>

<footer >

    <div class="container">

        <div class="row ">
            <div class="col-md-3 footer-panel">
                <div class="text-header-medium">
                    ABOUT US
                </div>
                <br>
                <div style="font-size: 1rem;">
                    <?PHP if ($lan=="TH") {
                    echo $about['about_us_title_th'];
                } else{
                    echo $about['about_us_title_en'];
                }?>
                </div>
                <br>
                <div style="font-size: 1rem;">
                    <?PHP if ($lan=="TH") {
                    echo $about['about_us_sub_title_th'];
                } else{
                    echo $about['about_us_sub_title_en'];
                }?>
                </div>
            </div>
            <div class="col-md-6 footer-panel">
                <div class="row">
                    <div class="col-md-6">
                        <div class="text-header-medium">
                            PROPERTY TYPE
                        </div>
                        <div style="font-size: 0.95rem;">
                            <?PHP for ($i=0; $i < count($type); $i++) {  ?>
                            <i class="fas fa-angle-right"></i>
                            <?PHP if ($lan=="TH") {
                            echo $type[$i]['product_types_name_th'];
                        } else{
                            echo $type[$i]['product_types_name_en'];
                        }?>
                            <br>
                            <?PHP } ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-header-medium">
                            LOCATIONS
                        </div>
                        <div style="font-size: 0.95rem;">
                            <?PHP for ($i=0; $i < count($location); $i++) {  ?>
                            <i class="fas fa-angle-right"></i>
                            <?PHP if ($lan=="TH") {
                            echo $location[$i]['location_name_th'];
                        } else{
                            echo $location[$i]['location_name_en'];
                        }?>
                            <br>
                            <?PHP } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 footer-panel">
                <div class="text-header-medium">
                    FROM THE BLOG
                </div>
                <div>
                    <?PHP echo $about['about_email'];?>
                </div>
            </div>
        </div>

        <div class="text-center" style="padding-top: 3.5em;">
            2018 @ Revelsoft Co., Ltd. Design in nakhonratchasima, Thailand.
        </div>
    </div>
</footer>
<img class="size-img-footer" src="img_upload/footer/footer.jpg">