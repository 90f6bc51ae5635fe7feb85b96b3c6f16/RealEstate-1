<?php

require_once("BaseModel.php");
class TypesModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getTypesBy(){
        $sql = "SELECT * 
        FROM tb_types 
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
   
    function getTypesByID($id){
        $sql = " SELECT * 
        FROM tb_types
        WHERE types_id = '$id' 
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
    
    function updateTypesByID($id,$data = []){
        
        $sql = " UPDATE tb_types SET  
        types_img = '".$data['types_img']."',
        types_name='".$data['types_name']."'
        WHERE types_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return true;
        }else {
            return false;
        }
    }

    function insertTypes($data=[]){
        $sql = " INSERT INTO tb_types( 
        types_img,
        types_name
        ) 
        VALUES ('". 
        $data['types_img']."','".
        $data['types_name']."'
        )";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
   }else {
        return false;
    }
}


function deleteTypesByID($id){
    $sql = "DELETE FROM tb_types WHERE types_id = '$id' ";
    mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT); 
}




}
?>