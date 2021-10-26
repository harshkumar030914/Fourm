<?php
if(isset($_POST["submit"])){
  include_once 'dbcon.php';

  $obj = new dbcon();
//  $obj2 = new dbcon();
  $conn = $obj->connect();
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$pass =$conn->real_escape_string( $_POST['pass']);
$cpass = $conn->real_escape_string( $_POST['cpass']);
echo $cpass;
if($pass = $cpass){
   $tb = "register";
   $obj->insert($name,$email,$pass);
   echo  '<script>alert("Welcome to WeDisscuss")</script>';
}
else {
  echo '<script>alert("Password Not Match")</script>';
}

}else {
  //echo  "error";
}
 ?>
