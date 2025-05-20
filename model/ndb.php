<?php
class DB{
    function createCon(){
        $conn = new mysqli("localhost","root", "", "users");
        if($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }return $conn;
    }
    function addValue($tb, $fname, $phone, $nid, $sellerType, $area, $img, $username, $password){
        $conn = $this->createCon();
        $sql = "INSERT INTO $tb (FNAME, PHONE, NID, SELLERTYPE, AREA, LOGO, USERNAME, PASS)
        VALUES ('$fname', '$phone', '$nid', '$sellerType', '$area', '$img', '$username', '$password')";
        if($conn->query($sql) === TRUE){
            return true;
        }else{
            return $conn->error;
        }
    }
    function closeCon($conn){
        $conn->close();
    }
}