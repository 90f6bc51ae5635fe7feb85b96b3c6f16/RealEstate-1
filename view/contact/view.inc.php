<div class="container">
    <div class="text-center contact-head">
        <h1 style="color: #5a5a5a; font-weight: 600">






            <?PHP if($lng == "TH"){ echo  $contact_us[0]['contact_us_title_th']; }else{ echo  $contact_us[0]['contact_us_title_en'];} ?>









        </h1>
        <hr class="border-contact" style="border-top: 2px solid  #5a5a5a">
        <div class="p-3 mb-2 bg-light contact-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box-bg"
                        style=" background-image: url(img_upload/product/28022019141054-architecture-1867187_1920.jpg);">
                        <div class="img-box-bg-cl">
                            <div class="row">
                                <div class="col-4">
                                    <img class="size-icon-contact"
                                        src="img_upload/icon-services/53848771_2049174922048058_7419565942394322944_n.png">
                                </div>
                                <div class="col-8 text-address">
                                    <p style=" font-weight: 600; padding-top: 3%">











                                        <?PHP if($lng == "TH"){ echo  'ที่อยู่'; }else{ echo  'ADDRESS';} ?>










                                    </p>






                                    <?PHP if($lng == "TH"){ echo  $contact_us[0]['contact_us_address_th']; }else{ echo  $contact_us[0]['contact_us_address_en'];} ?>
                                    <?PHP if($lng == "TH"){ echo  $contact_us[0]['contact_us_address_1_th']; }else{ echo  $contact_us[0]['contact_us_address_1_en'];} ?>
                                    <?PHP if($lng == "TH"){ echo  $contact_us[0]['contact_us_address_2_th']; }else{ echo  $contact_us[0]['contact_us_address_2_en'];} ?>
                                    <?PHP if($lng == "TH"){ echo  $contact_us[0]['contact_us_address_3_th']; }else{ echo  $contact_us[0]['contact_us_address_3_en'];} ?>
                                    <?PHP if($lng == "TH"){ echo  $contact_us[0]['contact_us_address_4']; }else{ echo  $contact_us[0]['contact_us_address_4'];} ?>









                                </div>
                            </div>
                            <div class="row" style="padding-top: 5%">
                                <div class="col-4">
                                    <img class="size-icon-contact"
                                        src="img_upload/icon-services/53160337_2284323801808189_6278116261075353600_n.png">
                                </div>
                                <div class="col-8 text-address">
                                    <p style=" font-weight: 600; padding-top: 3%">



                                        <?PHP if($lng == "TH"){ echo  'เบอร์โทรศัพท์'; }else{ echo  'PHONE';} ?>






                                    </p>




                                    <?PHP echo  $contact_us[0]['contact_us_fax']; ?>






                                </div>
                            </div>
                            <div class="row" style="padding-top: 5%">
                                <div class="col-4">
                                    <img class="size-icon-contact"
                                        src="img_upload/icon-services/53160337_2284323801808189_6278116261075353600_n.png">
                                </div>
                                <div class="col-8 text-address">
                                    <p style=" font-weight: 600; padding-top: 3%">



                                        <?PHP if($lng == "TH"){ echo  'มือถือ'; }else{ echo  'MOBILE';} ?>





                                    </p>



                                    <?PHP echo  $contact_us[0]['contact_us_tel']; ?>






                                </div>
                            </div>
                            <div class="row" style="padding-top: 5%">
                                <div class="col-4">
                                    <img class="size-icon-contact"
                                        src="img_upload/icon-services/53270645_2159312354381793_2320096657049387008_n.png">
                                </div>
                                <div class="col-8 text-address">
                                    <p style=" font-weight: 600; padding-top: 3%">



                                        <?PHP if($lng == "TH"){ echo  'EMAIL'; }else{ echo  'EMAIL';} ?>



                                    </p>



                                    <?PHP echo  $contact_us[0]['contact_us_email']; ?>





                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                    <div class="col-md-6 text-left text-contact">
                        <form id="form_target" role="form" method="post"  action="contact.php?&action=add">
                            <div class="row">
                                <div class="col-lg-6">
                                    <label
                                        class="text"><?php if ($lng == TH) {echo "ชื่อเรื่อง";} else { echo "Title";} ?>
                                        <font color="#F00"><b>*</b></font></label>
                                    <select class="form-control  custom-select" id="contact_title_id"
                                        name="contact_title_id">
                                        <?PHP for ($i=0; $i < count($contact_title); $i++) { ?>
                                        <option selected value="<?PHP echo $contact_title[$i]['contact_title_id'];  ?>">
                                            <?PHP if ($lng == TH) { echo $contact_title[$i]['contact_title_name_th'];   }else{ echo $contact_title[$i]['contact_title_name_en'];  }?>
                                        </option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 ">
                                    <label class="text">
                                        <?php if ($lng == TH) {echo "ชื่อ";} else { echo "Firstname";} ?>
                                        <font color="#F00"><b>*</b></font></label>
                                    <input id="contact_firstname" name="contact_firstname" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label
                                        class="text"><?php if ($lng == TH) {echo "นามสกุล";} else { echo "Lastname";} ?>
                                        <font color="#F00"><b>*</b></font></label>
                                    <input id="contact_lastname" name="contact_lastname" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label class="text">Email <font color="#F00"><b>*</b></font></label>
                                    <input id="contact_email" name="contact_email" class="form-control"
                                        autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label class="text">
                                        <?php if ($lng == TH) {echo "หมายลขโทรศัพท์";} else { echo "Tel";} ?> <font
                                            color="#F00"><b>*</b></font></label>
                                    <input id="contact_tel" name="contact_tel" class="form-control" autocomplete="off">
                                </div>
                                <div class="col-lg-6">
                                    <label class="text">
                                        <?php if ($lng == TH) {echo "ประเทศ";} else { echo "Country";} ?>
                                        <font color="#F00"><b>*</b></font></label>
                                    <select class="form-control  custom-select" id="contact_country"
                                        name="contact_country">
                                        <?PHP for ($i=0; $i < count($country); $i++) { ?>
                                        <option value="<?PHP echo $country[$i]['ct_code'];?>" <?PHP
                                            if( 'THA'==$country[$i]['ct_code']) { echo "selected" ;} ?>>
                                            <?PHP if ($lng == TH) {echo $country[$i]['ct_nameTHA']; }else{ echo $country[$i]['ct_nameENG']; } ?>
                                        </option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label class="text">
                                        <?php if ($lng == TH) {echo "ประเภทของคำถาม";}else{ echo "Type";}?>
                                        <font color="#F00"><b>*</b></font></label>
                                    <select class="form-control  custom-select" id="contact_type_id"
                                        name="contact_type_id">
                                        <?PHP for ($i=0; $i < count($contact_type); $i++) { 
                                # code...
                            ?>
                                        <option value="<?PHP echo $contact_type[$i]['contact_type_id'];?>">
                                            <?PHP if ($lng == TH) {  echo $contact_type[$i]['contact_type_name_th'];}else{  echo $contact_type[$i]['contact_type_name_en']; }?>
                                        </option>
                                        <?PHP } ?>
                                    </select>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="text">
                                            <?php if ($lng == TH) {echo "ข้อความ";} else { echo "Massenger";} ?><font
                                                color="#F00"><b>*</b></font></label>
                                        <textarea class="form-control " id="contact_text" name="contact_text"
                                            rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12" align="center">

                                    <button type="submit" name="" id="" class="btn btn-orage btn-md" btn-block onclick="return confirm('ส่งข้อมูลเรียบร้อย')"
                                        style="width: 150px; text-align: center; margin:0 auto;">

                                        <?php if ($lng == TH) { echo "ส่ง"; }else{ echo "send"; }   ?>
                                    </button>
                                </div>
                            </div>  
                        </form>
                    </div>


            </div>
        </div>
    </div>
    <div class="row service-row-box">





    <?PHP for ($i=0; $i < count($services) ; $i++) { ?>

        <div class="col-lg-4 col-md-6">
            <div class="shadow-lg p-3 mb-5 bg-light service-box">
                <div class="row">
                    <div class="col-6">
                        <img class="size-icon-contact"
                            src="img_upload/icon-services/53176142_310652063137173_1974414113991819264_n.png">
                    </div>
                    <div class="col-6">
                        <div class="text-sevice" style="color: #70b247">
                           
                                
                                
                        <?PHP if($lng == "TH"){ echo 'บริการสำหรับ'; }else{ echo ' SERVICE FOR'; } ?>
                               
                                
                                
                                
                        </div>
                        <div class="text-sevice" style="color: #3379a5">
                          
                                


                                
                        <?PHP if($lng == "TH"){ echo $services[$i]['services_name_th']; }else{ echo $services[$i]['services_name_en']; } ?>
                                



                        </div>

                    </div>
                </div>
            </div>
        </div>


    <?PHP } ?>
        
    </div>
</div>