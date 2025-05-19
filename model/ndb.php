<?php
class DB{
    function createCon(){
        $conn = new mysqli("localhost","root", "", "users");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }return $conn;
    }
    function addValue($tb, $fname, $phone, $nid, $sellerType, $cat, $area, $logo, $username, $password){
        $conn = $this->createCon();
        $sql = "INSERT INTO $tb (fname, phone, nid, seller_type, seller_area, image, username, password) VALUES ('$fname', '$phone', '$nid', '$sellerType', '$area', '$img', '$username', '$password')";
        if($conn->query($sql) === TRUE){
            return true;
        }else{
            return false;
        }
    }
}