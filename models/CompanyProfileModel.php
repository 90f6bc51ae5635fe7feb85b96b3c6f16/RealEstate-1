<?php
require_once("BaseModel.php");

class CompanyProfileModel extends BaseModel{
    
    function __construct(){
        if(!static::$db){
            static::$db = mysqli_connect($this->host, $this->username, $this->password, $this->db_name);
            mysqli_set_charset(static::$db,"utf8");
        }
    }

    function getCompanyProfile() {
        $sql = " SELECT *
        FROM `tb_company_profile`
        ";
        // echo "<pre>";
        // print_r();
        // echo "</pre>";
        if ($result = mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            $data = [];
            while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $data[] = $row;
            }
            $result->close();
            return $data;
        }
    }
    

    function editRoom($company_profile_id,$data = []) {
        $data['company_profile_img']=mysqli_real_escape_string(static::$db,$data['company_profile_img']);
        $data['company_profile_id']=mysqli_real_escape_string(static::$db,$data['company_profile_id']);
        $data['company_profile_title_en']=mysqli_real_escape_string(static::$db,$data['company_profile_title_en']);
        $data['company_profile_sub_title_en']=mysqli_real_escape_string(static::$db,$data['company_profile_sub_title_en']);
        $data['company_profile_title_th']=mysqli_real_escape_string(static::$db,$data['company_profile_title_th']);
        $data['company_profile_sub_title_th']=mysqli_real_escape_string(static::$db,$data['company_profile_sub_title_th']);

        $sql = "UPDATE `tb_company_profile` 
        SET `company_profile_title_en` = '".$data['company_profile_title_en']."', 
        `company_profile_sub_title_en` = '".$data['company_profile_sub_title_en']."',
        `company_profile_title_th` = '".$data['company_profile_title_th']."', 
        `company_profile_sub_title_th` = '".$data['company_profile_sub_title_th']."'
        WHERE `tb_company_profile`.`company_profile_id` = '$company_profile_id'
        ";
        // echo "<pre>";
        // print_r( $sql);
        // echo "</pre>";

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

    function editRoomImg($company_profile_id,$data = []) {
        $data['company_profile_img']=mysqli_real_escape_string(static::$db,$data['company_profile_img']);
        $data['company_profile_id']=mysqli_real_escape_string(static::$db,$data['company_profile_id']);
        $data['company_profile_title_en']=mysqli_real_escape_string(static::$db,$data['company_profile_title_en']);
        $data['company_profile_sub_title_en']=mysqli_real_escape_string(static::$db,$data['company_profile_sub_title_en']);
        $data['company_profile_title_th']=mysqli_real_escape_string(static::$db,$data['company_profile_title_th']);
        $data['company_profile_sub_title_th']=mysqli_real_escape_string(static::$db,$data['company_profile_sub_title_th']);

        $sql = "UPDATE `tb_company_profile` 
        SET `company_profile_img` = '".$data['company_profile_img']."', 
        `company_profile_title_en` = '".$data['company_profile_title_en']."', 
        `company_profile_sub_title_en` = '".$data['company_profile_sub_title_en']."',
        `company_profile_title_th` = '".$data['company_profile_title_th']."', 
        `company_profile_sub_title_th` = '".$data['company_profile_sub_title_th']."'
        WHERE `tb_company_profile`.`company_profile_id` = '$company_profile_id'
        ";
        // echo "<pre>";
        // print_r( $sql);
        // echo "</pre>";

        if (mysqli_query(static::$db,$sql, MYSQLI_USE_RESULT)) {
            return 1;
        }else {
            return 0;
        }
    }

}
?>