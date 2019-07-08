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
        background-color: #F5DA81;
        font-family: 'Open Sans',sans-serif;
        position: relative;
      }

    </style>

    <title>Tutor Finder</title>
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
      <a  href="index.php"><button type="button" name="logout" class="btn btn-outline-danger btn-md"><b>Log Out</b></button></a>
    </ul>

  </div>
</nav>
<!--end Navbar section-->


<!--start main page section-->
<br><br><br>


<center>
<div>

  <h1 class="text-center"><b>Available Tutors</b></h1>
<h1 class="text-center">-</h1>

<div >
  <?php require 'backend/database_connection.php';

  $sql="SELECT name,subject,location,experience,phoneno,email FROM signupasatutor";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
  ?>
<div class="container shadow-lg " style="border:2px solid black; border-radius:10px; background-color:white; width:650px;">
  <div align="center">
    <br>Name    :- <?php echo $row["name"]; ?><br>
  Subject     :-<?php echo $row["subject"]; ?><br>
 Location    :-<?php echo $row["location"]; ?><br>
Experience    :- <?php echo $row["experience"]; ?><br>
  Phone No   :- <?php echo $row["phoneno"]; ?><br>
  E-Mail    :- <?php echo $row["email"]; ?><br><br></div>
</div><br>
<?php }
}?>

</div>



</div>
</div></center>
<!--end main page section-->

</body>
</html>
