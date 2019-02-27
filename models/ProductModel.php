<?php

require_once("BaseModel.php");
class ProductModel extends BaseModel{

    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
        }
    }

    function getProductBy(){
        $sql = "SELECT * FROM `tb_product` 
        LEFT JOIN tb_product_types 
        ON tb_product.product_types_id = tb_product_types.product_types_id 
        WHERE 1
        ORDER BY tb_product.product_id
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
   
    function getProductByID($id){
        $sql = " SELECT * FROM `tb_product` 
        LEFT JOIN tb_product_types 
        ON tb_product.product_types_id = tb_product_types.product_types_id 
        WHERE 1
        ORDER BY tb_product.product_id
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
    
    function updateProductByID($id,$data = []){
        
        $sql = " UPDATE tb_product SET  
        product_img = '".$data['product_img']."',
        product_name='".$data['product_name']."', 
        product_price='".$data['product_price']."', 
        product_detail='".$data['product_detail']."',
        product_types_id='".$data['product_types_id']."' 
        WHERE product_id = $id "; 

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return true;
        }else {
            return false;
        }
    }

    function insertProduct($data=[]){
        $sql = " INSERT INTO tb_product( 
        product_img,
        product_name, 
        product_price, 
        product_detail,
        product_types_id 
        ) 
        VALUES ('". 
        $data['product_img']."','".
        $data['product_name']."','". 
        $data['product_price']."','". 
        $data['product_detail']."' ,'".
        $data['product_types_id']."'
        )";
    if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
        return mysqli_insert_id(static::$db);
   }else {
        return false;
    }
}


function deleteProductByID($id){
    $sql = "DELETE FROM tb_product WHERE product_id = '$id' ";
    mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT); 
}




}
?>