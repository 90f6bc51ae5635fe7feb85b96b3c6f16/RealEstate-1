<?PHP
if (isset($_COOKIE['language'])) {
    $lng = $_COOKIE['language'];
}



date_default_timezone_set("Asia/Bangkok");


require_once('models/PageModel.php');
$page_model = new PageModel;
$page = $page_model->getPageByID('4');
// print_r($page);



require_once('models/SlideModel.php');
$slide_model = new SlideModel;
$slide = $slide_model->getSlideByID('3');
// print_r($slide);


require_once('models/TypesModel.php');
$type_model = new TypesModel;
$type = $type_model->getTypesBy();
$type_by_id = $type_model->getTypesByID($_GET['type_id']);
// print_r($type_by_id);


require_once('models/ProductModel.php');
$product_model = new ProductModel;
$product_by_type = $product_model->getProductByType($_GET['type_id']);
$product = $product_model->getProductByProduct($_GET['id']);
$product_img = $product_model->getProducImgtById($_GET['id']);
$product_hightlight = $product_model->getProducHightlightById($_GET['id']);
$product_header = $product_model->getProductHeaderBy();
// print_r($product_header);


















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

    <title>REAL ESTATE PROPERTY PAGE </title>

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
    <link href="template/frontend/css/service.css" rel="stylesheet">


    <link href="template/frontend/css/property-types.css" rel="stylesheet">
    <link href="template/frontend/css/property-product.css" rel="stylesheet">
    <link href="template/frontend/css/property-detail.css" rel="stylesheet">
</head>

<body>
    <?PHP require_once('view/menu.inc.php'); ?>
    <?PHP require_once('view/slide.inc.php'); ?>



    <?PHP





    if (!isset($_GET['action'])) {

        require_once('view/property/property_type.inc.php');
    } else if ($_GET['action'] == "detail") {

        require_once('view/property/property_product.inc.php');
    } else if ($_GET['action'] == "product") {

        require_once('view/property/property_detail.inc.php');
     }else {
        # code...
    }
    ?>









    <?PHP require_once('view/footer.inc.php'); ?>
</body>

</htm l>