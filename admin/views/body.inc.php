<?PHP
 
 if($content=="types" || $content=="" ){

    require_once("modules/types/views/index.inc.php");
   
   }else if($content=="product"){
   
      require_once("modules/product/views/index.inc.php");
   
   }else if($content=="news"){
   
      require_once("modules/news/views/index.inc.php");
   
   }else if($content=="contact"){
   
      require_once("modules/contact/views/index.inc.php");
   
   }else if($content=="contact_us"){
   
      require_once("modules/contact_us/views/index.inc.php");
   
   }else if($content=="services"){
   
      require_once("modules/services/views/index.inc.php");
   
   }

?>