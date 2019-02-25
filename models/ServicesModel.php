<?php

require_once("BaseModel.php");
class ServicesModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getServicesBy(){
        $sql = "SELECT * 
        FROM tb_services 
        ";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
   
    function getServicesByID($id){
        $sql = " SELECT * 
        FROM tb_services
        WHERE services_id = '$id' 
        ";

        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data;
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data = $row;
            }
            $result->close();
            return $data;
        }
    }
    
    function updateServicesByID($id,$data = []){
        
        $sql = " UPDATE tb_services SET  
        services_img = '".$data['services_img']."',
        services_name='".$data['services_name']."'
        WHERE services_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return true;
        }else {
            return false;
        }
    }

    function insertServices($data=[]){
        $sql = " INSERT INTO tb_services( 
        services_img,
        services_name
        ) 
        VALUES ('". 
        $data['services_img']."','".
        $data['services_name']."'
        )";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
   }else {
        return false;
    }
}


function deleteServicesByID($id){
    $sql = "DELETE FROM tb_services WHERE services_id = '$id' ";
    mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT); 
}




}
?>