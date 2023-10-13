<?php
include('config.php');

$pro_id = $_GET['id'];
$query = "DELETE FROM `addproduct` where `id` = '$pro_id'";
$result = mysqli_query($connection, $query);
if($result){
    echo '<script>alert("Data Deleted Successfully")</script>';
    header("Location: viewproduct.php");
}

?>