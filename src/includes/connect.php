<?php
$host = "127.0.0.1:3307";
$username = "root";
$con = mysqli_connect($host, $username, '');

if (empty($con)) {
    echo mysql_error();
} 
$data = mysqli_select_db($con,"hospital");
if (empty($data)) {
    echo mysql_error();
}
?>