<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tutor Finder</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"  rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'><!--icons-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--social media icons-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <style>
  body {
    font-family: 'Open Sans', sans-serif;
      position: relative;
  }

  .carousel-inner img{
    width:100%;
    height:100%;

  }

  .material-icons.md-48 {
     font-size: 48px;
     padding-left: 40%;
    }

   .checked{
     color:orange;
   }

   .fa{
     margin:5px 5px;
   }

   .socialicons{
     color:white;
     font-size:32px;
     padding: 50px;
   }

  </style>
</head>

<body data-spy="scroll" data-target=".navbar" >

  <!--start navbar section-->
  <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top justify-content-end"><!-- navigation tag-->

          <a class="navbar-brand" href="#home">Tutor Finder</a><!-- anchor tag which display home section contents-->

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"><!-- toggler button which will displays on small screens-->
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse " id="collapsibleNavbar">

          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a class="nav-link" href="#home"> Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#features"> Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#reviews"> Reviews</a></li>
            <li class="nav-item"><a class="nav-link" href="#applynow">Personal Tutor</a></li>
            <li class="nav-item"><a class="nav-link  mr-sm-4" href="#contact"> Contact Us</a></li>
            <a href="login_form.php"><li class="nav-item"><button type="button" name="login" class="btn btn-outline-success  mr-sm-2"><strong>Login</strong></button></li>
            <a href="signup_form.php"><li class="nav-item"><button type="button" name="signup" class="btn btn-outline-success"><strong>SignUp</strong></button></li><a>

          </ul>
        </div><!--collapsible-nav-->
      </nav><!-- navigation tag-->
  <!--end navbar section-->


  <!--start home section-->
  <div id="home" class="carousel slide" data-ride="carousel"><!--background-image-->

    <!-- The slideshow -->
      <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-fluid" src="img/nnnx.jpg" alt="tutorfinder" width="1920" width="900">
            </div>

      </div>

  </div><!--image of background-->
  <!--end Home section-->


  <!--start features section-->
  <div id="features" class="jumbotron jumbotron-fluid" >
      <h1 class="text-center"><strong>Features</strong></h1>
      <h1 class="text-center">-</h1>
      <div class="container">
        <div class="row">
            <div class="col-sm-3 bg-light shadow p-4 mb-4 bg-white ">
              <i class="material-icons md-48" style="color:red;">place</i>
                <h4 class="text-center"><u><b>Location-Info</b></u></h4>
                <h6 class="text-center">This feature will help our users to know exact location of any tutors</h6>
            </div>

            <div class="col-sm-1">

            </div>


            <div class="col-sm-4 bg-light shadow p-4 mb-4 bg-white">
              <i class="fas fa-pencil-alt " style="font-size:30px; color:blue;  padding-left: 45%; margin-top:10px"></i><br>
              <h4 class="text-center" style="margin-top:7px"><u><b>Suggestion</b></u></h4>
              <h6 class="text-center">Our suggestion feature will give suggestions to our users for best tutors available in their area</h6>
            </div>

            <div class="col-sm-1">

            </div>


            <div class="col-sm-3 bg-light shadow p-4 mb-4 bg-white">
              <i class="material-icons md-48" style="color:black;">access_time</i>
              <h4 class="text-center"> <u> <b>Personal-Tutor</b> </u> </h4>
              <h6 class="text-center">By using this feature user can easily apply for a personal tutor by submitting a normal form</h6>
            </div>
        </div>
      </div>
    </div>
  <!--end features section-->


  <!--start review section-->
  <div id="reviews" class="jumbostron jumbostron-fluid">
    <h1 class="text-center">Reviews</h1>
    <h1 class="text-center">-</h1>
    <div class="table-responsive-sm shadow-lg, p-4 mb-4 bg-white">
      <p class="text-danger text-center"><b>This Table Shows Our Users Reviews & Ratings On Different Social Plateforms</b> </p><br>

      <table class="table table-hover ">
        <th class="th-dark"><strong>No</strong></th>
        <th class="th-dark"><strong>Name</strong></th>
        <th class="th-dark "><strong>Plateform</strong></th>
        <th class="th-dark"><strong>Rating</strong></th>
        <th class="th-dark"><strong>Review</strong></th>

        <tr>
          <td>1</td><!--No-->
          <td>Shinde Saurabh</td><!--name-->
          <td><i class="fa fa-google"></i></td><!--Plateform-->
          <td><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </td><!--Rating-->
          <td>Thank you for helping me to find tutor within my area.</td><!--Review-->
        </tr>

        <tr>
          <td>2</td><!--No-->
          <td>Rohit Mishra</td><!--name-->
          <td><i class="fa fa-twitter"></i></td><!--Plateform-->
          <td><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </td><!--Rating-->
          <td>Thanks for making this site.It's very useful for all students who wants to find tutor or want personal tutor.</td><!--Review-->
        </tr>

        <tr>
          <td>3</td><!--No-->
          <td>Vatsal Suthar</td><!--name-->
          <td><i class="fa fa-facebook"></i></td><!--Plateform-->
          <td><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
          </td><!--Rating-->
          <td>Responsive UI but it can be improved.</td><!--Review-->
        </tr>

        <tr>
          <td>4</td><!--No-->
          <td>Dev Vaishnav</td><!--name-->
          <td><i class="fa fa-twitter"></i></td><!--Plateform-->
          <td><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
          </td><!--Rating-->
          <td>Easy to get location of tutors.</td><!--Review-->
        </tr>

        <tr>
          <td>5</td><!--No-->
          <td>Pathan Uwaish</td><!--name-->
          <td><i class="fa fa-google"></i></td><!--Plateform-->
          <td><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
          </td><!--Rating-->
          <td>Sorting of tutors is amazing. It's easy to find tutors by area and ratings.</td><!--Review-->
        </tr>

        <tr>
          <td>6</td><!--No-->
          <td>Soni Nirav</td><!--name-->
          <td><i class="fa fa-twitter"></i></td><!--Plateform-->
          <td><span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
          </td><!--Rating-->
          <td>Apply for personal tutor is good feature.</td><!--Review-->
        </tr>

      </table>


    </div><!--container-->
  </div>
  <!--end review section-->


  <!--start applynow section-->
  <div id="applynow"  style="width:100%; background-color:#CECEF6;">
    <br><br><br><br><br><br>
    <center><button type="button" class="btn btn-primary btn-lg active shadow-lg" data-toggle="collapse" data-target="#apn" name="personaltutor">Apply For Personal Tutor</button></center>
      <div id="apn" class="collapse">
      <br>
      <center>
      <form action="backend/personaltutor.php" method="post">

        <div class="form-group col-sm-4">
          <label><strong>Name:</strong></label>
          <input class="form-control" type="text" name="name" placeholder="Enter Name" >
        </div>

        <div class="form-group col-sm-4">
          <label><strong>E-Mail:</strong></label>
          <input class="form-control" type="email" name="email" placeholder="Enter E-Mail">
        </div>

        <button type="submit" class="btn btn-primary" name="personaltutor"><b>Submit</b></button>

      </form>
    </center>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
  </div>
  <!--end applynow section-->


  <!--start contact section-->
  <div id="contact" style="width:100%; background-color:#08088A;">
    <br><h1 class="text-center" style="color:white;"><b>Contact Us</b></h1>
    <h1 class="text-center" style="color:white;"> <b>-</b> </h1>

    <center><div class="container shadow-lg " style="border:2px solid white; width:700px; border-radius:25px;">
      <form  action="backend/contact.php" method="post">
        <div class="form-group">
          <br>
        <label for="name" style="color:white;">Name:</label>
        <input class="form-control shadow-lg" type="text" name="name" placeholder="Enter Your Name" style="width:50%; border:3px solid white; "><br>
        </div>

        <div class="form-group">
        <label for="email" style="color:white;">E-mail:</label>
        <input class="form-control shadow-lg" type="email" name="email" placeholder="Enter Your E-Mail" style="width:50%; border:3px solid white;"><br>
        </div>

        <div class="form-group">
        <label for="Message" style="color:white;">Message:</label>
        <textarea class="form-control shadow-lg" type="textarea" name="msg" placeholder="Enter Your Message" style="height:250px; width:50%; border:3px solid white;"></textarea><br>
        </div>

        <button class="btn btn-success shadow-lg" type="submit" name="contactsubmit">Submit</button><br><br><br>

      </form>
    </div></center>

    <center><div class="socialicons">
      <a href="" class="fa fa-facebook" style="text-decoration:none; color:white;"></a>
      <a href="" class="fa fa-twitter" style="text-decoration:none; color:white;"></a>
      <a href="" class="fa fa-google" style="text-decoration:none; color:white;"></a>
      <a href="" class="fa fa-instagram" style="text-decoration:none; color:white;"></a>
      <a href="" class="fa fa-linkedin" style="text-decoration:none; color:white;"></a>
    </div></center>

  </div>
  <!--end contact section-->

</body>
</html>
