<?PHP
 
 if($content=="Types" || $content=="" ){

    require_once("modules/Types/views/index.inc.php");
   
   }else if($content=="Product"){
   
      require_once("modules/Product/views/index.inc.php");
   
   }else if($content=="News"){
   
      require_once("modules/News/views/index.inc.php");
   
   }else if($content=="contact"){
   
      require_once("modules/contact/views/index.inc.php");
   
   }else if($content=="contact_us"){
   
      require_once("modules/contact_us/views/index.inc.php");
   
   }else if($content=="about_us"){
   
      require_once("modules/about_us/views/index.inc.php");
   
   }else if($content=="company_profile"){
   
      require_once("modules/company_profile/views/index.inc.php");
   
   }else if($content=="agent"){
   
      require_once("modules/agent/views/index.inc.php");
   
   }else if($content=="Services"){
   
      require_once("modules/Services/views/index.inc.php");
   
   }

?>