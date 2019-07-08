<?php

  if(isset($_POST["contactsubmit"])==true){

    require 'database_connection.php';

    $name=$_POST['name'];

    $email=$_POST['email'];

    $msg=$_POST['msg'];

    $sql="INSERT INTO contact(name,email,msg) VALUES('$name','$email','$msg')";

    $cmd=mysqli_query($conn,$sql);

    header("Location: ../index.php");
    exit();


  }

 ?>
