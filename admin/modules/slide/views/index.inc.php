<?php
require_once('../models/SlideModel.php');

$path = "modules/slide/views/";

$slide_model = new SlideModel;

if(isset($_GET['id'])){
    $slide_id = $_GET['id'];
}
if(!isset($_GET['action'])){
    $slide = $slide_model->getSlideBy();
    require_once($path.'view.inc.php');
}else if ($_GET['action'] == 'update'){
        $slide = $slide_model->getSlideByID($slide_id);
    require_once($path.'update.inc.php');
}else if ($_GET['action'] == 'edit'){
    if(isset($_POST['slide_id'])){
        $check = true;
        $data = [];
        $data['slide_title_th'] = $_POST['slide_title_th'];
        $data['slide_title_en'] = $_POST['slide_title_en'];
        $data['slide_description_th'] = $_POST['slide_description_th'];
        $data['slide_description_en'] = $_POST['slide_description_en'];
        $data['updateby'] = $login_user['user_id'];

        $result = $slide_model->updateSlideByID($_POST['slide_id'],$data);

        if($result){
            ?> <script>window.location="index.php?content=slide"</script> <?php
        }else{
            ?>  <script> window.history.back(); </script> <?php
        }
    }else{
        ?> <script> window.history.back(); </script> <?php
    }
}else{
    $slide = $slide_model->getSlideBy();
    require_once($path.'view.inc.php');
}
?>