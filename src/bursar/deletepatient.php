<?php 
session_start();
if (empty($_SESSION['bursar']) OR empty($_SESSION['type'])) {
    header("Location: ../index.php");
}
else{
    $id = $_GET['id'];

    require_once "../includes/connect.php";
    global $con;
    $sql = "DELETE FROM `patient` WHERE `id`='$id'";
    $query = mysqli_query($con,$sql);
    if (!empty($query)) {
        header("Location: patients.php");
    }
}
?>