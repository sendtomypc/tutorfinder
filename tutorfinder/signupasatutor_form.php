<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SignUp As a Tutor</title>
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
      <a  href="login_form.php"><button type="button" name="login" class="btn btn-outline-success btn-md"><b>Login</b></button></a>
    </ul>

  </div>
</nav>
<!--end Navbar section-->


<!--start form section-->
<div class="jumbostron jumbotron-fluid" style="width:100%; background-color:black;">


  <br><br><br><h1 class="text-center" style="color:white;"><b>Sign Up(For Tutors)<b></h1>
  <h3 class="text-center" style="color:white;"><b>-<b></h3>

  <center>
    <div class="container shadow-lg" style="border:2px solid white; width:800px; border-radius:25px;">
      <form action="backend/signupasatutor.php" method="post">

      

        <div class="form-group">
          <br>
          <label style="color:#00FF00;">Name:</label>
          <input type="text" name="name" class="form-control shadow-lg" placeholder="Enter Your Name" style="width:50%;" required>
        </div>

        <div class="form-group">
          <label style="color:#00FF00;">E-Mail:</label>
          <input type="email" name="email" class="form-control shadow-lg" placeholder="Enter Your E-Mail" style="width:50%;"required>
        </div>

        <div class="form-group">
          <label style="color:#00FF00;">Phone No:</label>
          <input type="text" name="phoneno" class="form-control shadow-lg" placeholder="Enter Your Phone No" maxlength="10" style="width:50%;"required>
        </div>

        <div class="form-group">
          <label style="color:#00FF00;">Password:</label>
          <input type="password" name="pwd" class="form-control shadow-lg" placeholder="Enter Your Password" style="width:50%;">
        </div>

        <div style="color:white;"><!--locaton Section -->
            <label style="color:#00FF00;">Choose Location</label><br>

            <input class="radio-inline" type="radio" name="location" value="select" checked>select
            <input class="radio-inline" type="radio" name="location" value="Ambavadi" >Ambavadi
            <input class="radio-inline" type="radio" name="location" value="Bapunagar" >Bapunagar
            <input class="radio-inline" type="radio" name="location" value="Bopal" >Bopal<br>
            <input class="radio-inline" type="radio" name="location" value="Chandkheda" >Chandkheda
            <input class="radio-inline" type="radio" name="location" value="Juna Wadaj" >Juna Wadaj
            <input class="radio-inline" type="radio" name="location" value="Odhav" >Odhav<br>
            <input class="radio-inline" type="radio" name="location" value="Sola" >Sola
            <input class="radio-inline" type="radio" name="location" value="Thaltej" >Thaltej
            <input class="radio-inline" type="radio" name="location" value="Vaastrapur" >Vastrapur<br>
            <input class="radio-inline"  type="radio" name="location" value="Science City" >Science City
        </div><br>

        <div style="color:white;">

          <label style="color:#00FF00;">Choose Your Subjects</label><br>

          <label class="checkbox-inline"><input type="checkbox" name="subject" value="Maths3">Maths 3</label><br>
          <label class="checkbox-inline"><input type="checkbox" name="subject" value="TOC">TOC</label><br>
          <label class="checkbox-inline"><input type="checkbox" name="subject" value="JAVA">JAVA</label><br>
          <label class="checkbox-inline"><input type="checkbox" name="subject" value="Web Technology">Web Technology</label><br>
          <label class="checkbox-inline"><input type="checkbox" name="subject" value="AJ">Advanced JAVA</label><br>
          <label class="checkbox-inline"><input type="checkbox" name="subject" value="PHP">PHP</label><br>

        </div><br>

        <div style="color:white;">
            <label style="color:#00FF00;">Experience</label><br>

            <input class="radio" type="radio" name="experience"  value="No Experience" checked>No Experience<br>
            <input class="radio" type="radio" name="experience"  value="1-5 Years" >1-5 Years<br>
            <input class="radio" type="radio" name="experience"  value="5-10 Years" >5-10 Years<br>
            <input class="radio" type="radio" name="experience"  value="More than 10 Years" >More than 10 Years<br>
            </div><br>


        <button type="submit" name="signupasatutorsubmit" class="btn btn-outline-warning" onclick="successt()">Sign Up</button><br><br>

        <script>

        function successt(){
          alert("Successfully Done!");
        }

        </script>


      </form>


    </div>
  </center>

</div>
<!--end form section-->

  </body>
</html>
