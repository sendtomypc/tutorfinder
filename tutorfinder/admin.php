<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <style>
      body{
        background-color: black;
        font-family: 'Open Sans',sans-serif;
        position: relative;
      }

    </style>

    <title>Login</title>
  </head>

  <body data-spy="scroll" data-target=".navbar">

<!--start Navbar section-->
<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top justify-content-end">
  <a href="index.php" class="navbar-brand" ><i class="material-icons" style="font-size:35px;">home</i></a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><!-- toggler button which will displays on small screens-->
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="collapsibleNavbar">

    <ul class="navbar-nav ml-auto">
      <a href="signupasatutor_form.php"><button type="button" name="signupasatutor" class="btn btn-outline-light btn-md mr-sm-3"><b>Sign Up As a Tutor</b></button></a>
      <a  href="signup_form.php"><button type="button" name="login" class="btn btn-outline-success btn-md"><b>Sign Up</b></button></a>
    </ul>

  </div>
</nav>
<!--end Navbar section-->


<!--start login section-->
<div class="jumbostron jumbotron-fluid" style="width:100%; background-color:black;">


  <br><br><br><h1 class="text-center" style="color:white;"><b>Admin pannel<b></h1>
  <h3 class="text-center" style="color:white;"><b>-<b></h3>

  <center>
    <div class="container shadow-lg" style="border:2px solid white; width:800px; border-radius:25px;">
      <form action="backend/admin.php" method="post">
        <div class="form-group">
          <br>
          <label style="color:white;">Username</label>
          <input type="Name" name="uname" class="form-control shadow-lg" placeholder="Enter Your Username" style="width:50%;" required>
        </div>

        <div class="form-group">
          <label style="color:white;">Password:</label>
          <input type="password" name="pwd" class="form-control shadow-lg" placeholder="Enter Your Password" style="width:50%;"required>
        </div><br>

        <button type="submit" name="adminsubmit" class="btn btn-outline-warning">Login</button><br><br>


      </form>


    </div>
  </center>

</div>
<!--end login section-->

</body>
</html>
