<?php
include 'nav.php'; ?>
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
<h1 class="text-center">&nbsp;<img src="image/search.png" height="35px;">Search Results For &nbsp;<emp>"<?php  echo $_GET['search']; ?>"</emp></h1>
<?php
//$alert = false;
include 'dbcon.php';
$search = $_GET['search'];
$obj = new dbcon();
$con = $obj->connect();
$sql = "SELECT * FROM `thread` WHERE MATCH(thread_title, thread_desc) AGAINST ('$search ')";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

while ($row = mysqli_fetch_array($result)) {
?>



     <div class="container my-5 m-auto">
  <a href="rectjs.php?id=<?php echo $row['thread_cat_id']; ?>"><h1><?php echo $row['thread_title']; ?></h1></a>
  <h3><?php echo $row['thread_desc'];?></h3>
</div>
<?php
}
?>
<?php
if($num == 0)
{
  echo '<div class="jumbotron">
  <h1 class="display-4">No Result Available For " '.$_GET['search'].'  " &nbsp;<img src="https://img.icons8.com/ios/50/000000/lost-and-found.png"/></h1>
  <p class="lead">Try Something Another Text.</p>
  <hr class="my-4">
</div>';
}
 ?>


<?php include 'footer.php'; ?>
