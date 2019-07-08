<?php

if(isset($_POST["loginsubmit"])==true){

require_once('database_connection.php');

$email=$pwd='';

$email=$_POST['email'];

$pwd=$_POST['pwd'];

$sql="SELECT * FROM signup WHERE email='$email' AND pwd='$pwd'";

$result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {

  while($row=mysqli_fetch_assoc($result)){
    $name=$row["name"];
    $mail=$row["mail"];

    session_start();
    $_SESSION['name']=$name;
    $_SESSION['$email']=$email;
  }
  header("Location:../main.php");
}

else{
  ?>

  <script>alert('invalid E-Mail or Password!');</script>
  <?php


}
}
 ?>
