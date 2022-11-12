<?php

include_once('dbConnection.php');
session_start();


if(isset($_POST['submit'])){

  $slot=$_POST['slots'];
  $email=$_SESSION['email'];
  $sql="UPDATE user SET slot='$slot' WHERE email='$email'";
  $conn->query($sql);
  

header('Location:Student.php');
};


?>