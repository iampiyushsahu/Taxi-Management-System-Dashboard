<?php
include 'taxi_database_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM taxi_book_ride1 WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if($result){
    header("location:booking_users.php");
} else{
    echo "not delted";
}
?>