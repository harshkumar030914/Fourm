<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
$obj = new dbcon();
$id = $_GET['id'];
$ids = $_GET['hlo'];
$desc  = $_POST['texts'];
$userid = $_POST['userid'];
//echo $id;
//echo $desc;
//echo $ids;
 $obj->insert3($id,$desc,$ids,$userid);
} ?>
