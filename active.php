<?php
include 'dbcon.php';
$obj = new dbcon();
$con = $obj->connect();
$id = $_GET['id'];
$sql = "UPDATE `register` SET `status` = 'active' WHERE `token` = '$id'";
$result = mysqli_query($con,$sql);
if($result)
{
  header("location:main.php");
}
 ?>
