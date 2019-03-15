<?PHP
if (isset($_COOKIE['language'])) {
    $lng = $_COOKIE['language'];
}


date_default_timezone_set("Asia/Bangkok");



require_once('models/PageModel.php');
$page_model = new PageModel;
$page = $page_model->getPageByID('5');
// print_r($page);



require_once('models/SlideModel.php');
$slide_model = new SlideModel;
$slide = $slide_model->getSlideByID('4');
// print_r($slide);



require_once('models/NewsModel.php');
$news_model = new NewsModel;


$perpage = 4;
if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}
$start = ($page - 1) * $perpage;

$news_page = $news_model->getNewsBy();
$news = $news_model->getNewsByLimit($start, $perpage, $keyword);
$news_most = $news_model->getNewsReadMost();
// print_r($news);
?>


<html>

<head>


    <meta property="og:type" content="website">
    <meta property="og:title" content="<?PHP if ($lng == " TH") {
                                            echo $page['page_title_th'];
                                        } else {
                                            echo $page['page_title_en'];
                                        } ?>">
    <meta property="og:description" content="<?PHP if ($lng == " TH") {
                                                    echo $page['page_description_th'];
                                                } else {
                                                    echo $page['page_description_en'];
                                                } ?>">





    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> REAL ESTATE NEW&EVENT PAGE </title>

    <script src="template/js/jquery-2.2.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="template/bootstrap/css/bootstrap.min.css" />
    <script src="template/bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- slide -->
    <link rel="stylesheet" type="text/css" href="template/slick/slick.css">
    <script src="template/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>

    <!-- Custom Fonts & CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="template/css/style.css" />

    <link href="template/frontend/css/menu.css" rel="stylesheet">
    <link href="template/frontend/css/footer.css" rel="stylesheet">
    <link href="template/frontend/css/home-style.css" rel="stylesheet">
    <link href="template/frontend/css/news-style.css" rel="stylesheet">
    <link href="template/frontend/css/service.css" rel="stylesheet">
</head>

<body>
    <?PHP require_once('view/menu.inc.php'); ?>
    <?PHP require_once('view/slide.inc.php');



    if (!isset($_GET['action'])) {




        require_once('view/news/view.inc.php');
    } else if ($_GET['action'] == "read") {

        $news_read = ($_GET['news_read'] + 1);
        // print_r($news_read);

        $check_result = $news_model->updateNewsByRead($_GET['id'], $news_read);
        // print_r($check_result);

        ?>
    <script>
        window.location = "news.php?action=detail&id=<?PHP echo $_GET['id'];  ?>"
    </script>
    <?PHP

    print_r($_GET['id']);
    $news = $news_model->getNewsByID($_GET['id']);
    // print_r($news);
} else if ($_GET['action'] == "detail") {

    $news = $news_model->getNewsByID($_GET['id']);
    // print_r($news);
    require_once('view/news/newsdetail.inc.php');
} else if ($_GET['action'] == "search") {

    $perpage = 4;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $start = ($page - 1) * $perpage;
    $news = $news_model->getNewsByLimit($start, $perpage, $_GET['keyword']);
    // print_r($news);
    
    // print_r($news);
    require_once('view/news/view.inc.php');
}



?>


    <?PHP require_once('view/footer.inc.php'); ?>
</body>

</html> 