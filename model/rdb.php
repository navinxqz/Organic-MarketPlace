<?php
function createCon(){
  return mysqli_connect("localhost", "root", "","sectioni");
}
function insertData($conn,$name,$email,$password,$dob,$gender,$file){

    $sql = "INSERT INTO buyer_registration (fname, email, pass, dob, gender, file) VALUES ('$name', '$email', '$password', '$dob', '$gender', '$file')";
    return mysqli_query($conn, $sql);
}
function checkLogin($conn,$name,$password){
    $sql = "SELECT * FROM buyer_registration WHERE fname ='$name' AND pass='$password'";
    return mysqli_query($conn, $sql);
    //return mysqli_num_rows($result) > 0;
}
function fetchUser($conn, $name) {
        $sql = "SELECT * FROM buyer_registration WHERE fname = '$name'";
        return mysqli_query($conn, $sql);
}

function closeCon($conn){
    return mysqli_close($conn);
}
?>