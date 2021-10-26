<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
$obj = new dbcon();
$id = $_GET['id'];
$title = $_POST['title'];
$desc  = $_POST['desc'];
$userid = $_POST['userid'];
echo $id;
echo "<br>";
//echo $userid;
echo "<br>";
//echo $title;
echo "<br>";
//echo $desc;
$obj = $obj->insert2($id,$title,$desc,$userid);
}?>
