<div class="container">
    <div class="row topic-lastnews">
        <div class="col-8">
            <div class="text-left" style="padding-top: 7vw;">
                <h1 class="font-news">LATEST NEWS </h1>
                <hr align="left" class="border-news" style="border-top: 2px solid  #5a5a5a; width: 7vw;">
            </div>
        </div>
        <div class="col-4">
            <div class="row">
                <input type="text" class="box-search-news" id="name" name="name" type="text" placeholder="Search News">
                <div class="btn btn-search-news">
                    SEARCH
                </div>
            </div>
        </div>
    </div>
    <div class="row row-news1">
        <div class="col-lg-8 col-md-8 col-sm-8 col-8">
            <div class="row">






                <?PHP for ($i = 0; $i < count($news); $i++) { ?>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="">
                        <img src="img_upload/news/<?PHP echo $news[$i]['news_img']; ?>" class="img-news">
                    </div>
                    <div class="topic-news cut-text-multi2">



                        <?PHP if ($lng == 'TH') {
                            echo ($news[$i]['news_name_th']);
                        } else {
                            echo ($news[$i]['news_name_en']);
                        } ?>




                    </div>
                    <div class="date-news">




                        <?PHP echo  date("M d, Y ", strtotime($news[$i]['news_date'])); ?>





                    </div>
                    <div class="detail-news cut-text-multi">



                        <?PHP if ($lng == 'TH') {
                            echo ($news[$i]['news_detail_th']);
                        } else {
                            echo ($news[$i]['news_detail_en']);
                        } ?>




                    </div>
                    <div class="row">
                        <div class="text-center element-item col-lg-6 col-md-6 col-sm-12">
                            <div style=" padding-top:20px; margin-bottom: 2vw; ">
                                <a href="news.php?action=read&news_read=<?PHP echo ($news[$i]['news_read']) ?>&id=<?PHP echo ($news[$i]['news_id']) ?>" class="btn btn-readmore">
                                    READ MORE
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <?php 
            } ?>



            </div>
            <div class="row">

                <?php $num_page = ceil(count($news_page) / $perpage); ?>
                <?php for ($i = 1; $i <= $num_page; $i++) {
                    ?>

                <a class="btn btn-readmore <?php if($page == $i) { echo 'active'; } ?>" href="news.php?page=<?php echo $i;  ?>"> <?php echo $i;  ?> </a>&nbsp;
                <?
            }
            ?>
            </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-4 col-4">
            <div class="row">

                <div class=" col-lg-12 col-md-12 col-sm-12 most-read-news ">
                    <div class="most-read">
                        Most Read This Month
                    </div>


                    <div style="border-top: 2px solid  #5a5a5a;"></div>



                    <?PHP for ($i = 0; $i < 6; $i++) {
                        # code...
                        // $type[$i][''];
                        ?>


                    <div class="topic-news2">
                        <a href="news.php?action=read&news_read=<?PHP echo ($news[$i]['news_read']) ?>&id=<?PHP echo ($news[$i]['news_id']) ?>">


                            <?PHP if ($lng == 'TH') {
                                echo ($news_most[$i]['news_name_th']);
                            } else {
                                echo ($news_most[$i]['news_name_en']);
                            } ?>

                        </a>

                    </div>
                    <div class="date-news2">




                        <?PHP echo  date("M d, Y ", strtotime($news_most[$i]['news_date'])); ?>




                    </div>


                    <div style="border-top: 2px solid  #5a5a5a;"></div>

                    <?php 
                } ?>



                </div>
            </div>
        </div>



    </div>


</div>
<style>
    .active{
        background-color: #6c757d;
    }
    .cut-text-multi {
        display: -webkit-box;
        -webkit-line-clamp: 5;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }

    .cut-text-multi2 {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style> 