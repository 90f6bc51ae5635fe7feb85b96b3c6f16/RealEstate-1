<?php require_once('view/menu.inc.php')?>
    <section class="col-lg-12 no-padding" style="position: relative;">
        <img class="size-img-slide" src="img_upload/home/2.jpg">
            <div class="overlay-slide">
            </div>

    <section class="slide no-padding slide-home ">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-7" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                <h1 style="color: #fff;">SERVICE</h1>
                                </div>
                                <div class="slide-text-detail">
                                    Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb
                                    Muirhead – which came in at number two with 49.7% price growth – and rapidly growing
                                    new Melbourne area, Clyde North, are examples of suburbs with high development,
                                    expansion potential and subsequent shifts in supply and demand.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="container">

                <div class="row">
                    <div class="col-7" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                    <h1 style="color: #fff;">SERVICE</h1>
                                </div>
                                <div class="slide-text-detail">
                                    Penthouse apartment for sale located on Iancu Nicolae Road. Wit New Darwin suburb
                                    Muirhead – which came in at number two with 49.7% price growth – and rapidly growing
                                    new Melbourne area, Clyde North, are examples of suburbs with high development,
                                    expansion potential and subsequent shifts in supply and demand.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
        </div>

    </section>

    <div class=""
        style="width: 100%; bottom: -8%; position: absolute; z-index: 9999; text-align: center; padding-left: 20%; padding-right: 20%;">
        <div class="shadow-lg" style="background-color: white;">


            <div class="row" style="padding: 1vw;">
            <div class="element-item col-lg-3 col-md-6 col-sm-6">
                    <div class="text-left">
                        <div class="form-group">
                          <br />
                            <select class="form-control  custom-select" id="room_type_id" name="room_type_id">
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> Location</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                            
                            </select>
                          
                        </div>
                    </div>
                </div>

                <div class="element-item col-lg-3 col-md-6 col-sm-6">
                    <div class="text-left">
                        <div class="form-group">
                            <br />
                            <select class="form-control  custom-select" id="room_type_id" name="room_type_id">
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> Property type</option>
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                                
                            </select>
                         
                        </div>
                    </div>
                </div>
                <div class="element-item col-lg-3 col-md-6 col-sm-6">
                    <div class="text-left">
                        <div class="form-group">
                             <br />
                            <select class="form-control  custom-select" id="room_type_id" name="room_type_id">
                                <option value="<?PHP echo $room_type[$i]['room_type_id'];?>"> 5</option>
                            </select>
                           
                        </div>
                    </div>
                </div>
                <div class="element-item col-lg-3 col-md-6 col-sm-6">
                <div class="btn btn-search">
                    SEARCH
                </div>
                </div>
            </div>
        </div>

    </div>
</section>

<script type="text/javascript">
$(document).on('ready', function() {
    $(".slide").slick({
        arrows: false,
    });
});
</script>