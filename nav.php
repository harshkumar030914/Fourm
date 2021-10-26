<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" href="#">WeDisscuss<img src="logo.png" height="40px;"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="About.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Contact.php">Contact</a>
      </li>
    </ul>
    <form  action="search.php"  method="get" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-success my-2 my-sm-0 ml-2" >Search</button>
    </form>
      <!-- Button trigger modal -->
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Register YourSelf Here</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" action="signin.php">
              <div class="form-group">
                <label for="exampleInputEmail1">Enter Name</label>
                &nbsp;&nbsp;<input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter Name" name="name">

              </div>
              <br>
              <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              &nbsp;&nbsp;<input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">

              </div>
              <br>
              <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              &nbsp;&nbsp;<input type="password" class="form-control" name="pass" placeholder="Password">
              </div>
              <br>
              <div class="form-group">
              <label for="exampleInputPassword1">ConfirmPassword</label>
              &nbsp;&nbsp;<input type="password" class="form-control" name="cpass" placeholder="ConfirmPassword">
              </div>
              <br>

            <div class="g-recaptcha"  data-sitekey="6LfvK7UcAAAAADknTEm5QbHYBVY6NxTkfrEfjFEh"></div>
            <br>
              <input type="submit"  class="bg-success btn btn-success" name="submit">
              </div>
              </form>


            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

            </div>

          </div>
        </div>
      </div>';?>
      <?php
if( !empty($_SESSION['name']) AND isset($_SESSION['name']))
{
  echo '
      <a href="logout.php"><button class="btn btn-danger ml-3">
LogOut
                         </button></a>';

}
else {
  // code...
  echo '                       </button>
      <!-- Button trigger modal -->
      <button class="btn btn-primary ml-3" data-toggle="modal" data-target="#myModal">
Login
                         </button>
                         &nbsp;&nbsp;<button type="button" class="btn btn-primary ml-2 mr-2" data-toggle="modal" data-target="#exampleModal">
                       Sign In
                         </button>';
}?>
<?php  echo '
           <div id="myModal" class="modal fade">
               <div class="modal-dialog modal-sm">
                   <div class="modal-content">
                       <div class="modal-header">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                         </button>
                       </div>
                       <div class="modal-body">
<form method="post" action="login.php">
<label for="name">Enter name</label>
<input type="text"  name="name" class="form-control">
<br>
<label for="pass">Enter Password</label>
<input type="password" name="pass" class="form-control">
<br>
<center><button type="submit" class="btn btn-success" name="submit">Submit</button></center>
</form>
<br>
                           <div class="btn-group btn-group-justified">
                               <div class="btn-group"><button  style="float:right;" type="button" class="btn btn-danger" data-dismiss="modal">Close</button></div>

                           </div>
                       </div>
                   </div>
               </div>
      <!-- Modal -->

  </div>
</nav>';?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script>

</script>
