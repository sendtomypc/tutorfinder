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
        background-color: white;
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


<!--start personaltutor section-->
<br><br><br>
<div id="reviews" class="jumbostron jumbostron-fluid">
  <h1 class="text-center" style="color:red;">They applied for personal tutor</h1>
  <h1 class="text-center">-</h1>
  <div class="table-responsive-sm shadow-lg, p-4 mb-4 bg-white">

    <table class="table table-hover ">
      <th class="th-dark"><strong>No</strong></th>
      <th class="th-dark"><strong>Name</strong></th>
      <th class="th-dark "><strong>E-mail</strong></th>

      <?php require 'backend/database_connection.php';

      $sql="SELECT id,name,email FROM personaltutor";
      $result=mysqli_query($conn,$sql);

      if (mysqli_num_rows($result)>0) {
        while($row=mysqli_fetch_assoc($result)){
          ?>

          <tr>
            <td> <?php echo $row["id"]; ?> </td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
          </tr>



          <?php
        }
      }

      ?>



    </table>


  </div><!--container-->
</div>
<!--end  personaltutor section-->

<!--start contact section-->
<br><br><br>
<div id="reviews" class="jumbostron jumbostron-fluid">
  <h1 class="text-center" style="color:red;">They Want to Contact You</h1>
  <h1 class="text-center">-</h1>
  <div class="table-responsive-sm shadow-lg, p-4 mb-4 bg-white">

    <table class="table table-hover ">
      <th class="th-dark"><strong>No</strong></th>
      <th class="th-dark"><strong>Name</strong></th>
      <th class="th-dark "><strong>E-mail</strong></th>
      <th class="th-dark "><strong>Message</strong></th>

      <?php require 'backend/database_connection.php';

      $sql="SELECT id,name,email,msg FROM contact";
      $resultx=mysqli_query($conn,$sql);

      if (mysqli_num_rows($resultx)>0) {
        while($rowy=mysqli_fetch_assoc($resultx)){
          ?>

          <tr>
            <td> <?php echo $rowy["id"]; ?> </td>
            <td><?php echo $rowy["name"]; ?></td>
            <td><?php echo $rowy["email"]; ?></td>
            <td><?php echo $rowy["msg"]; ?></td>
          </tr>



          <?php
        }
      }

      ?>



    </table>


  </div><!--container-->
</div>
<!--end  contact section-->




</body>
</html>
