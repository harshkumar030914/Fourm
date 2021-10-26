<?php

session_start();
$alert = false;
if(isset($_POST['submit']) AND !empty($_POST['name']) AND !empty($_POST['pass'])){
include 'dbcon.php';
  $obj = new dbcon();
  $con = $obj->connect();
$name = $_POST['name'];
$pass = $_POST['pass'];
    // echo $name;
  //  echo $pass;
  //echo $_SESSION['name'];
$obj = $obj->login($name,$pass);
if( !empty($_SESSION['name']) AND isset($_SESSION['name']))
{
  $sql = "SELECT `id` FROM `register` WHERE `name` = '$name'";
  $result2 = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result2);
  //echo $row['id'];
  $_SESSION['id'] = $row['id'];
  //echo $_SESSION['id'];
    //echo $_SESSION['name'];
  $alert = true;
//echo "success";
//  header("location:main.php");
}
else {
//  echo "error".mysqli_error($con);
//  echo header("location:main.php");
}
//echo  $_SESSION['login'];
}
?>
