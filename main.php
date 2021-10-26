<!DOCTYPE  html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
<link rel="icon"  href="logo.png">
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

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <title>WeDisscuss!</title>
    <style>

    *{

        padding: 0px;
        margin: 0px;
    }
body{
  padding: 0px;
  margin: 0px;
  background-color:whitesmoke;
}
.card:hover{
  box-shadow: 8px 8px 8px 8px grey;
  cursor: pointer;
}
.card{
  box-shadow: 2px 2px 2px 2px darkgrey;
}

    </style>
  </head>
  <body>
    <?php
    include 'nav.php'; ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img1.jpg" height="400px;" class="d-block w-100 set" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img4.jfif" height="400px;" class="d-block w-100 set" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img3.jpg" height="400px;" class="d-block w-100 set" alt="...">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <br>
        <h1 class="text-center">Our Trending Categories&nbsp;<img src="trend.png" height="50px;" class="img img-responsive"></h1>
    <br>
    <br>
<div class="container-fluid">
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="row row-cols-1 row-cols-md-3">
<?php
include 'dbcon.php';
$obj = new dbcon();
$result = $obj->shows();
while($row = mysqli_fetch_array($result)){?>
    <div class="col mb-4">
      <div class="card">
        <img src="image/<?php echo $row['s.no'];?>.jfif" class="card-img-top" alt="...">
        <div class="card-body">
          <h3 class="card-title"><?php echo $row['title'];  ?></h3>
          <p class="card-text"><?php echo $row['body']; ?></p>
        <a href="rectjs.php?id=<?php echo $row['s.no']; ?>"><button type="button" onclick="" class="btn btn-info text-white">View Threads</button></a>
        </div>
      </div>
    </div>

  <?php
}
 ?>
</div>
<div class="col-md-2"></div>
</div>
</div>
<div class="container" style="position:fixed;top:40%;left:-.8%;">
<a href="https://www.instagram.com"><img src="insta.png" height="30px;" style="border-radius:40%;"></a>
<br>
<a href="https://www.twitter.com"><img src="twitter.png" height="30px;" style="border-radius:50%;"></a>
<br>
<a href="https://www.facebook.com"><img src="facebook.png" height="30px;"></a>
<br>
<a href="https://www.github.com"><img src="github.png" height="30px;"></a>

</div>
<?php include 'footer.php'; ?>
<!--
<script>


function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("demo").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "rectjs.php", true);
  xhttp.send();
}
</script>!-->
</div>
  </body>
</html>
