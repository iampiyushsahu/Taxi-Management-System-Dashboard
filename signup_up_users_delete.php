<?php
include 'taxi_database_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM taxi_login WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if($result){
    header("location:signup_up_users.php");
} else{
    echo "not delted";
}
?>