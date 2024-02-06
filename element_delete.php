<?php
include 'taxi_database_connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM taxi_contact WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
if($result){
    header("location:element.php");
} else{
    echo "not delted";
}
?>