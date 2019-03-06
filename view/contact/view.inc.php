<div class="container">
    <div class="text-center contact-head">
        <h1 style="color: #5a5a5a; font-weight: 600">CONTACT REALESTATE </h1>
        <hr class="border-contact" style="border-top: 2px solid  #5a5a5a">
        <div class="p-3 mb-2 bg-light contact-box">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box-bg"
                        style=" background-image: url(img_upload/product/28022019141054-architecture-1867187_1920.jpg);">
                        <div class="img-box-bg-cl">
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-left">
                    <form id="form_target" role="form" method="post" action="contact_us.php?&action=add">
                        <div class="row">
                            <div class="col-lg-6">
                                <label class="text"><?php if ($lng == TH) {echo "ชื่อเรื่อง";} else { echo "Title";} ?>
                                    <font color="#F00"><b>*</b></font></label>
                                <select class="form-control  custom-select" id="contact_title_id"
                                    name="contact_title_id">
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 ">
                                <label class="text"> <?php if ($lng == TH) {echo "ชื่อ";} else { echo "Firstname";} ?>
                                    <font color="#F00"><b>*</b></font></label>
                                <input id="contact_firstname" name="contact_firstname" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label class="text"><?php if ($lng == TH) {echo "นามสกุล";} else { echo "Lastname";} ?>
                                    <font color="#F00"><b>*</b></font></label>
                                <input id="contact_lastname" name="contact_lastname" class="form-control"
                                    autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label class="text">Email <font color="#F00"><b>*</b></font></label>
                                <input id="contact_email" name="contact_email" class="form-control" autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label class="text">
                                    <?php if ($lng == TH) {echo "หมายลขโทรศัพท์";} else { echo "Tel";} ?> <font
                                        color="#F00"><b>*</b></font></label>
                                <input id="contact_tel" name="contact_tel" class="form-control" autocomplete="off">
                            </div>
                            <div class="col-lg-6">
                                <label class="text"> <?php if ($lng == TH) {echo "ประเทศ";} else { echo "Country";} ?>
                                    <font color="#F00"><b>*</b></font></label>
                                <select class="form-control  custom-select" id="contact_country" name="contact_country">
                                </select>
                            </div>
                            <div class="col-lg-6">
                                <label class="text"> <?php if ($lng == TH) {echo "ประเภทของคำถาม";}else{ echo "Type";}?>
                                    <font color="#F00"><b>*</b></font></label>
                                <select class="form-control  custom-select" id="contact_type_id" name="contact_type_id">
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

                                <button type="submit" name="" id="" class="btn btn-orage btn-md" btn-block
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
        <div class="col-lg-4 col-md-6">
            <div class="shadow-lg p-3 mb-5 bg-light service-box">
                <div class="row">
                    <div class="col-6">
                        <img class="size-icon-contact"
                            src="img_upload/icon-services/53176142_310652063137173_1974414113991819264_n.png">
                    </div>
                    <div class="col-6">
                        <div class="text-sevice" style="color: #70b247">
                            SERVICE FOR
                        </div>
                        <div class="text-sevice" style="color: #3379a5">
                            SELLER / LESSOR
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="shadow-lg p-3 mb-5 bg-light service-box">
                <div class="row">
                    <div class="col-6">
                        <img class="size-icon-contact"
                            src="img_upload/icon-services/53574180_338964410080072_6205132100857757696_n.png">
                    </div>
                    <div class="col-6">
                        <div class="text-sevice" style="color: #70b247">
                            SERVICE FOR
                        </div>
                        <div class="text-sevice" style="color: #3379a5">
                            SELLER / LESSOR
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6">
            <div class="shadow-lg p-3 mb-5 bg-light service-box">
                <div class="row">
                    <div class="col-6">
                        <img class="size-icon-contact"
                            src="img_upload/icon-services/53599082_583643432118145_3564111742239768576_n.png">
                    </div>
                    <div class="col-6">
                        <div class="text-sevice" style="color: #70b247">
                            SERVICE FOR
                        </div>
                        <div class="text-sevice" style="color: #3379a5">
                            SELLER / LESSOR
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>