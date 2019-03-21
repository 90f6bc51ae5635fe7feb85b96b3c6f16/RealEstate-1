<?php
date_default_timezone_set("Asia/Bangkok");
require_once('../models/AboutUsModel.php');
require_once('../models/CompanyProfileModel.php');


$path = "modules/about_us/views/";
$img_path = "../img_upload/about_us/";
$target_dir = "../img_upload/about_us/";

$about_us_model = new AboutUsModel;
$about_us = $about_us_model -> getAbout_us();

$company_profile_model = new CompanyProfileModel;
$company_profile = $company_profile_model -> getCompanyProfile();

$id =($_GET['id']);


// foreach ($_POST as $key => $value) {
//     echo "<div>";
//     echo $key;
//     echo " : ";
//     echo $value;
//     echo "</div>";
// }


// echo "<pre>";
// print_r($about_us);
// echo "</pre>";



    //---------------------ฟังก์ชั่นวันที่------------------------------------
    date_default_timezone_set("Asia/Bangkok");
    $d1=date("d");
    $d2=date("m");
    $d3=date("Y");
    $d4=date("H");
    $d5=date("i");
    $d6=date("s");
    $date="$d1$d2$d3$d4$d5$d6";
    //---------------------------------------------------------------------


    //-----------------ฟังก์ชั่นสุ่มตัวเลข----------------
    $numrand = (mt_rand());
    //-----------------------------------------------

$id = 0;

if( !isset($_GET['action']) ) {
    require_once($path.'edit.inc.php');
} else if( $_GET['action'] == "edit") {
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    if(isset($_POST['about_us_id'] ) && isset($_POST['company_profile_id'] )){
        $data = [];
        $data['about_us_id'] = $_POST['about_us_id'];
        $data['about_us_title_en'] = $_POST['about_us_title_en'];
        $data['about_us_sub_title_en'] = $_POST['about_us_sub_title_en'];
        $data['about_us_title_th'] = $_POST['about_us_title_th'];
        $data['about_us_sub_title_th'] = $_POST['about_us_sub_title_th'];

        $result = $about_us_model-> editAbout_us($_POST['about_us_id'],$data);

        $data = [];
        $data['company_profile_sub_title_th'] = $_POST['company_profile_sub_title_th'];
        $data['company_profile_sub_title_en'] = $_POST['company_profile_sub_title_en'];

        $result = $company_profile_model-> editCompanyProfile($_POST['company_profile_id'],$data);
                                    
        if($result){ 
         ?>
            <script>
            window.location = "index.php?content=about_us"
            </script>
        <?php 
        }else{ 
        ?>
            <script>
            window.history.back();
            </script>
        <?php 
        }
    }else{ 
    require_once($path . 'edit.inc.php'); 
    }
} ?>




<script>
    CKEDITOR.replace("about_us_sub_title_th", {
        filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
    CKEDITOR.replace("about_us_sub_title_en", {
        filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
    CKEDITOR.replace("company_profile_sub_title_th", {
        filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
    CKEDITOR.replace("company_profile_sub_title_en", {
        filebrowserBrowseUrl: '../template/backend/ckfinder/ckfinder.html',
        filebrowserImageBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Images',
        filebrowserFlashBrowseUrl: '../template/backend/ckfinder/ckfinder.html?Type=Flash',
        filebrowserUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
        filebrowserImageUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../template/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
        });
</script>