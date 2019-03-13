<div class="container">
    <img src="img_upload/home/2.jpg" alt="Los Angles" class="img-newsdetail">

    <div class="row ">
        <div class="news-topic">
            <?PHP if ($lng == "TH") {
                # code...
                echo $news['news_name_th']; 
            } else{
                echo $news['news_name_en'];
            }
            ?>
        </div>
    </div>
    <div class="news-detail1">
            <?PHP if ($lng == "TH") {
                # code...
                echo $news['news_detail_th']; 
            } else{
                echo $news['news_detail_en'];
            }
            ?>
    </div>
</div>