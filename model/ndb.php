<?php
class Model {
    function createCon() {
        $conn = new mysqli("localhost", "root", "", "users");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }return $conn;
    }
function addValue($conn,$tb, $fname, $phone, $nid, $sellerType, $area, $img, $username, $password) {
        $conn = $this->createCon();

        $sql = "INSERT INTO $tb (FNAME, PHONE, NID, SELLERTYPE, AREA, LOGO, USERNAME, PASS)
                VALUES ('$fname', '$phone', '$nid', '$sellerType', '$area', '$img', '$username', '$password')";

        if($conn->query($sql) === TRUE){
            $conn->close();
            return true;
        }else{
            $error = $conn->error;
            $conn->close();
            return $error;
        }
    }
    function fetchUser($conn, $tb, $username) {
        $sql = "SELECT * FROM $tb WHERE USERNAME = '$username'";
        return $conn->query($sql);
    }
    function checkLogin($conn, $username, $password) {
        $sql = "SELECT * FROM seller_registration WHERE USERNAME = '$username' AND PASS = '$password'";
        $result = $conn->query($sql);
        return $result;
    }
    function CloseCon($conn) {
        $conn->close();
    }
}
?>