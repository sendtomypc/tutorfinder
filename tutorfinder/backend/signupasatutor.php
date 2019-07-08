<?php

  if(isset($_POST["signupasatutorsubmit"])==true){

    require 'database_connection.php';

    $name=$_POST['name'];

    $email=$_POST['email'];

    $phoneno=$_POST['phoneno'];

    $pwd=$_POST['pwd'];

    $location=$_POST['location'];

    $subject=$_POST['subject'];

    $experience=$_POST['experience'];

    $sql="INSERT INTO signupasatutor(name,email,phoneno,pwd,location,subject,experience) VALUES('$name','$email','$phoneno','$pwd','$location','$subject','$experience')";

    $cmd=mysqli_query($conn,$sql);

    header("Location: ../signupasatutor_form.php");
    exit();


  }


 ?>
