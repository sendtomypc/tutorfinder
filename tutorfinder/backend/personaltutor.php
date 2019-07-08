<?php

  if(isset($_POST["personaltutor"])==true){

    require 'database_connection.php';

    $name=$_POST['name'];

    $email=$_POST['email'];


    $sql="INSERT INTO personaltutor(name,email) VALUES('$name','$email')";

    $cmd=mysqli_query($conn,$sql);

    header("Location: ../index.php");
    exit();


  }

 ?>
