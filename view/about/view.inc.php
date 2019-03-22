
<?PHP #endregion




require_once('models/CompanyProfileModel.php');    
$company_model = new CompanyProfileModel;   
$company = $company_model->  getCompanyProfile(); 

// echo "<pre>";
// print_r($company) ;
// echo "</pre>";





?>

<div class="container about-container">
    <div class="text-left about-head">
        <p style="font-weight: 600; color: #0175a4; font-size: 2.0em;">
        <?PHP
            if($lng == "TH"){
                echo 'บริษัท';
            }else{
                echo 'COMPANY';
            } 
            ?>
        <span>
        <?PHP
            if($lng == "TH"){
                echo 'ข้อมูลส่วนตัว';
            }else{
                echo 'PROFILE';
            } 
            ?>
        </span></p>
        <p style="color: #959595">
        <?PHP if($lng == "TH"){ echo  $company[0]['company_profile_sub_title_th']; }else{ echo  $company[0]['company_profile_sub_title_en'];} ?>
           

        </p>
    </div>
    <div class="mb-2 bg-light about-box">
        <div class="row">
            <div class="col-md-6">
                <img class="size-img-about" src="img_upload/company_profile/<?PHP echo  $company[0]['company_profile_img'];?>">
            </div>
            <div class="col-md-6">
                <div class="text-center about-head-box">
                    <h1 style="font-weight: 600">

        <?PHP if($lng == "TH"){ echo  $company[0]['company_profile_vision_th']; }else{ echo  $company[0]['company_profile_vision_en'];} ?>

           </h1>
                    <p class="about-box-text">

<?PHP if($lng == "TH"){ echo  $company[0]['company_profile_vision_detail_th']; }else{ echo  $company[0]['company_profile_vision_detail_en'];} ?>



</p>
                    <h1 style="font-weight: 600"><span>

<?PHP if($lng == "TH"){ echo  $company[0]['company_profile_mission_th']; }else{ echo  $company[0]['company_profile_mission_en'];} ?>


</span></h1>
                    <p class="about-box-text2">

<?PHP if($lng == "TH"){ echo  $company[0]['company_profile_mission_detail_th']; }else{ echo  $company[0]['company_profile_mission_detail_en'];} ?>

</p>
                </div>
            </div>
        </div>
    </div>
</div>