<?php

require_once("BaseModel.php");
class NewsModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getNewsBy(){
        $sql = "SELECT * 
        FROM tb_news 
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
   
    function getNewsByID($id){
        $sql = " SELECT * 
        FROM tb_news
        WHERE news_id = '$id' 
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
    
    function updateNewsByID($id,$data = []){
        
        $sql = " UPDATE tb_news SET  
        news_img = '".$data['news_img']."',
        news_name='".$data['news_name']."',
        news_detail='".$data['news_detail']."'

        WHERE news_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return true;
        }else {
            return false;
        }
    }

    function insertNews($data=[]){
        $sql = " INSERT INTO tb_news( 
        news_img,
        news_name,
        news_detail
        ) 
        VALUES ('". 
        $data['news_img']."','".
        $data['news_detail']."','".
        $data['news_name']."'
        )";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
   }else {
        return false;
    }
}


function deleteNewsByID($id){
    $sql = "DELETE FROM tb_news WHERE news_id = '$id' ";
    mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT); 
}




}
?>