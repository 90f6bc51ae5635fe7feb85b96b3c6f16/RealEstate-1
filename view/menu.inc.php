<script>
function setLanguage(lng) {
    $.post("controls/setLanguage.php", {
            lng: lng
        })
        .done(function(data) {
            window.location.reload();
        });
}
</script>

<?php 
    require_once('models/ContactUsModel.php');
    $img_path = "../img_upload/contact_us/";
    $contact_us_model = new ContactUsModel;
    $contact_us = $contact_us_model -> getContact_us();
?>
<div class="header-menu">
    <div class="col-12">
        <div class="row">
            <div class="col">
                <div class="text-left">
                    <div class="contact_list pb-0">
                        <span style="color: #ffffffdb;"><span><i class="fas fa-mobile-alt"
                                    aria-hidden="true"></i>&nbsp;</span><?php echo $contact_us[0]['contact_us_tel']; ?></span>
                        <span style="color: #ffffffdb;"><span>&nbsp;<i
                                    class='fas fa-map-marker-alt'></i>&nbsp;</span><?php if ($lng == TH) {  echo $contact_us[0]['contact_us_address_3_th'];}else { echo $contact_us[0]['contact_us_address_3_en'];  }  ?></span>
                        <a onclick="setLanguage('EN')"
                            class="right btn p-1 ml-5 <?php if($lng != "TH"){ echo "active-lng"; } ?>"
                            style="color: #ffffffdb;">
                            EN</a>
                        <a class="right" style="#ffffffdb;">
                            |
                        </a>
                        <a onclick="setLanguage('TH')"
                            class="right btn p-1 <?php if($lng == "TH"){ echo "active-lng"; } ?>"
                            style="color: #ffffff;">
                            TH
                        </a>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="float-right" style="color: #ffffffdb;">
                    <div class="contact_list pb-0">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i>
                        &nbsp;&nbsp;<i class="fab fa-twitter"></i>
                        &nbsp;&nbsp;<i class="fab fa-linkedin-in"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">

        <a href="index.php" class=""><img src="img_upload/logo.png" width="130px" class="img-icon float-right"></a>

        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
            data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarResponsive">

<style>

    .nav-color{

        color: white;
    }
</style>
            <ul class="navbar-nav text-center ml-auto" >
                <li class="nav-item ">

                    <a class="nav-color nav-link <?php if($menu == 'index'){ echo 'active'; }?>" href="index.php" style="#ffffff">

                    <i class="fas fa-home"></i>


                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($menu == 'room'){ echo 'active'; }?>" href="room.php#room" >


                        <?php
                        if ($lng == TH) {
                            echo "เกี่ยวกับเรา";
                        }else {
                            echo "ABOUT US";
                        }
                        ?>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($menu == 'facilities'){ echo 'active'; }?>"
                        href="facilities.php#facilities">


                        <?php
                        if ($lng == TH) {
                            echo "บริการ";
                        }else {
                            echo "SERVICE";
                        }
                        ?>


                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($menu == 'gallery'){ echo 'active'; }?>" href="gallery.php#gallery">

                        <?php
                        if ($lng == TH) {
                            echo "อสังหาทรัพย์";
                        }else {
                            echo "PROPERTY";
                        }
                        ?>

                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link <?php if($menu == 'about_us'){ echo 'active'; }?>" href="about_us.php#about_us">


                        <?php
                        if ($lng == TH) {
                            echo "ข่าวและกิจกรรม";
                        }else {
                            echo "NEWS&EVENT";
                        }
                        ?>

                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if($menu == 'contact_us'){ echo 'active'; }?>"
                        href="contact_us.php#contact_us">

                        <?php
                        if ($lng == TH) {
                            echo "ติดต่อเรา";
                        }else {
                            echo "CONTACT US";
                        }
                        ?>

                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- Custom scripts for this template -->