<?php
include_once("../dbConnection.php");

// $user=$_POST['role'];

// $_SESSION['user']=$user;

 if (isset($_POST['stuname']) && isset($_POST['stuemail']) && isset($_POST['stupass'])){
    $stuname=$_POST['stuname'];
    $firstname=$_POST['Firstname'];
    $stuemail=$_POST['stuemail'];
    $stupass=$_POST['stupass'];
    $user_type=$_POST['role'];
    $user_id=$_POST['sid'];
   

    $sql="INSERT INTO user(sid,name,firstname,pass,email,user_type) VALUES('$user_id','$stuname','$firstname','$stupass','$stuemail','$user_type')";

    $conn->query($sql);
    header('location:../LoginForm.php');



 }


?>