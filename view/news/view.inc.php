<div class="container">
    <div class="row topic-lastnews">
        <div class="col-8">
            <div class="text-left" style="padding-top: 7vw;">
                <h1 class="font-news">LATEST NEWS </h1>
                <hr align="left" class="border-news" style="border-top: 2px solid  #5a5a5a; width: 7vw;">
            </div>
        </div>
    </div>
    <div class="row row-news1">
        <div class="col-lg-12 ">
            <div class="row">
                <?PHP for ($i = 0; $i < count($news); $i++) { ?>
                <div class="col-lg-4 col-md-6 col-sm-6">
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
                    <div style="padding-top:20px; margin-bottom: 2vw; ">
                        <a href="news.php?action=read&news_read=<?PHP echo ($news[$i]['news_read']) ?>&id=<?PHP echo ($news[$i]['news_id']) ?>"
                            class="btn btn-readmore">
                            <?PHP
                    if($lng == "TH"){
                        echo 'เพิ่มเติม';
                    }else{
                        echo 'READ MORE';
                    } 
                    ?>
                            
                        </a>
                    </div>
                </div>
                <?php 
            } ?>
            </div>
            <?php if($_GET['keyword'] == "") { ?>
            <div class="row">
                <div class="tex-center">
                    <?php $num_page = ceil(count($news_page) / $perpage); ?>
                    <?php for ($i = 1; $i <= $num_page; $i++) {
                        ?>
                    <a class=" btn btn-readmore <?php if ($page == $i) {
                                                    echo 'active';
                                                } ?>" href="news.php?page=<?php echo $i;  ?>"> <?php echo $i;  ?>
                    </a>&nbsp;
                    <?
                }
                ?>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</div>

<script>
function searchkeyword() {
    var keywordsearchkeyword = $("#keywordsearchkeyword").val();
    console.log(keywordsearchkeyword);

    window.location = "news.php?action=search&keyword=" + keywordsearchkeyword;
}
</script>