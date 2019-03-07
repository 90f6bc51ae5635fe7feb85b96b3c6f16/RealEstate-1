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


require_once('models/NewsModel.php');    
$news_model = new NewsModel;   
$news = $news_model->  getNewsByDESC(); 
// print_r($news) ;



?>
<div class="container">
    <footer>



        <div class="row ">
            <div class="col-md-3 footer-panel">
                <div class="text-header-medium" style="color: #0175A4;">
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
            <div class="col-md-4 footer-panel">
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
            <div class="col-md-5 footer-panel">
                <div class="text-header-medium">
                    FROM THE BLOG
                </div>
                <div>

                    <div class="col-12 ">
                        <?PHP for ($i=0; $i < 2 ; $i++) { 
                    # code...
                // print_r(count ($news));?>
                        <div class="row">
                            <div class="col-4 col-img-footer">
                                <img src="img_upload/news/<?PHP echo $news[$i]['news_img']; ?>"
                                    class="rounded float-left img-fluid" alt="...">
                            </div>
                            <div class="col-8">
                                <?PHP if ($lan == 'TH') {
                                # code...
                                echo $news[$i]['news_name_th'];
                            } else {
                               echo $news[$i]['news_name_en']; 
                            }  ?>
                            <br>
                                <p class="light "><i class="far fa-clock light"></i> <?PHP echo  date("M d, Y ",strtotime($news[$i]['news_date']));?> </p> 
                                

                            </div>
                        </div>
                            <br>
                        <?PHP } ?>
                    </div>

                </div>
            </div>
        </div>

        <div class="text-center" style="padding-top: 3.5em;">
            2018 @ Revelsoft Co., Ltd. Design in nakhonratchasima, Thailand.
        </div>

    </footer>
</div>
<img class="size-img-footer" src="img_upload/footer/footer.jpg">


<style>
.col-img-footer {
    padding-right: 5;
    padding-left: 0;
}

.img-fluid {
    max-width: 100%;
    height: 60;
}
.light{
    color: #0009;
}
</style>