<?php require_once('view/menu.inc.php')?>
    <section class="col-lg-12 no-padding" style="position: relative; height: 30vw;">
        <img class="size-img-slide" src="img_upload/product/27022019115301-250220191031432502201910314383105868.jpg">
            <div class="overlay-slide-service">
            </div>
    
    <section class="slide no-padding slide-home ">
        <div class="col-12">
            <div class="container">
                <div class="row">
                    <div class="col-10" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                <h1 style="color: #fff;">PROPERTY</h1>
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
                    <div class="col-10" style="margin-top: 4vw;">

                        <div class="slide-item">
                            <div class="slide-detail-home">
                                <div class="slide-header-home">
                                    <h1 style="color: #fff;">PROPERTY</h1>
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

    <div class="box-search-home">
            <div class="shadow-lg" style="background-color: white;">
                <div class="row m-0 py-4">
                    <div class="col-sm-12 col-md-3 py-md-0 py-sm-3">
                        <div class="text-left">
                            <div class="">
                                <select class="form-control  custom-select" id="location_id" name="location_id">
                                    <option value=""> Location</option>
                                    <?PHP for ($i=0; $i < count($location); $i++) {  ?>
                                    <option value="<?PHP echo $location[$i]['location_id'];?>" <?PHP if($_GET['location_id'] == $location[$i]['location_id']){ echo 'selected' ; } ?>>
                                        <?PHP if($lan =='TH'){ echo $location[$i]['location_name_th']; } else { echo $location[$i]['location_name_en'];}?>
                                    </option>
                                    <?PHP } ?>
                                </select>

                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-3 py-md-0 py-sm-3">
                        <div class="text-left">
                            <div class="">
                                <select class="form-control  custom-select" id="product_types_id"
                                    name="product_types_id">
                                    <option value=""> Property type</option>
                                    <?PHP for ($i=0; $i < count($type); $i++) {  ?>
                                    <option value="<?PHP echo $type[$i]['product_types_id'];?>" <?PHP if($_GET['product_types_id'] == $type[$i]['product_types_id']){ echo 'selected' ; } ?>>
                                        <?PHP if($lan =='TH'){ echo $type[$i]['product_types_name_th']; } else { echo $type[$i]['product_types_name_en'];}?>
                                    </option>
                                    <?PHP } ?>

                                </select>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-3 py-md-0 py-sm-3 ">
                        <div class="text-left">
                            <div class="">
                                <div class="">
                                    <input id="keyword" name="keyword" class="form-control" value="<?PHP echo $_GET['keyword']; ?>"  placeholder="KEYWORD" />
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                    <button onclick="search();" type="submit" class="btn btn-search">
                            SEARCH
                        </button>
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