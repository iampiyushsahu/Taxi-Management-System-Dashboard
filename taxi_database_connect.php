<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$database = "taxi";

$conn = mysqli_connect($server,$username,$password,$database);
if($conn){
   //echo "success";
}
else{
    die(mysqli_connect_error());
}
?>