<?php

  if(isset($_POST["signupsubmit"])==true){

    require 'database_connection.php';

    $name=$_POST['name'];

    $phoneno=$_POST['phoneno'];

    $email=$_POST['email'];

    $pwd=$_POST['pwd'];

    $location=$_POST['location'];

    $sql="INSERT INTO signup(name,phoneno,email,pwd,location) VALUES('$name','$phoneno','$email','$pwd','$location')";

    $cmd=mysqli_query($conn,$sql);

    header("Location: ../signup_form.php");
    exit();


  }

  
 ?>

