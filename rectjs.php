<?php
//session_start();
require_once 'dbcon.php';
$obj = new dbcon();
$id = $_GET['id'];
$obj = $obj->shows3($id);
$row = mysqli_fetch_array($obj);?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<link rel="stylesheet" href="fourm.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body style="background-color:whitesmoke;">
<div class="container-fluid" style="background-color:whitesmoke;">
<?php  include 'nav.php'; ?>
<div class="jumbotron">
  <h1 class="display-4">Welcome To <?php echo $row['title'];  ?> Disscussion</h1>
  <p class="lead" style="font-size:14px;">This is a Modern Community Disscussion Thread.No Spam / Advertising / Self-promote in the forums. ...Do not post copyright-infringing material. ...Do not post “offensive” posts, links or images. ...Do not cross post questions. ...Do not PM users asking for help. ...Remain respectful of other members at all times.</p>
  <hr class="my-4">
  <p class="lead">
    <a class="btn btn-primary btn-lg"  role="button">Disscuss Here</a>
  </p>
</div>

<div class="container">
<div class="row">
<div class="col-md-3" >

<?php
//echo $_SESSION['id'];
//echo $_SESSION['name'];
?>
</div>
<?php
if( !empty($_SESSION['name']) AND isset($_SESSION['name'])){
echo '<div class="col-md-6" >
<h1><u>Drop Your Question Here<img src="dropbox.png" height="50px;"></u></h1>
<form method="post" action="ins.php?id='. $id .'" style="background-color:whitesmoke;">

<input type="text" name="title" class="form-control" placeholder="Enter Your Question" style="background-color:#f1f1f1;">
<br>
<input type="text" name="desc" class="form-control"  placeholder="Describe Your Question Here..."  style="height: 90px;background-color:#f1f1f1;" >
<br>
<input type="hidden" value="'.$_SESSION['id'].'" name = "userid">
<br>
<button  name="submit" type="submit"class="btn btn-md btn-success">Submit</button>
</form></div>';
}
else {
echo '<div class="alert alert-danger" role="alert">
You Must Need To Be Login Fot Posting Question
</div>';
}
?>
<div class="col-md-3"></div>
</div>
</div>
</div>

</div>

<h1 class="bg-light"><u>Browse Questions..</u></h1>
<div class="container-fluid bg-light" style=" height:1000px;
  overflow-x:scroll;">
<?php
$obj2 = new dbcon();
$id = $_GET['id'];
//echo  $id;
$result = $obj2->shows4($id);
$num = mysqli_num_rows($result);
//echo $num;
if($num == 0)
{
echo '<center><div class="card" style="width: 18rem;">
  <img src="image/index.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text"><h2>Be The First To Ask Questions!!</h2></p>
  </div>
</div></center>';
}

while($row = mysqli_fetch_array($result)){

  $obj3 = new dbcon();
  $con = $obj3->connect();
  $id = $row['thread_user_id'];
  //echo $id;
  $sql2 = "SELECT `name` FROM `register` WHERE `id` =  '$id'";
  $result2 = mysqli_query($con,$sql2);
  $row2 = mysqli_fetch_array($result2); ?>
<div class="media" style="background-color:#f1f1f1;">
  <img src="image/man.png" class="mr-3" alt="..." height="40px;">
  <div class="media-body">
    <h5 style="float:right;">Posted by&at:<?php echo $row2['name']; ?> &nbsp;<?php echo $row['timestamp']; ?></h5>
    <h5 class="mt-0">Question:&nbsp;<?php echo $row['thread_title']; ?>?</h5>
    <p>Description&nbsp;<?php echo $row['thread_desc']; ?></p>

    <h5><a  href="answers.php?id=<?php echo $row['threadi_d']; ?>">Reply The Answer</a></h5>
  </div>
</div>
<?php }?>
</div>
<?php include 'footer.php'; ?>
</body>
