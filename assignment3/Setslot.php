<?php

include_once('dbConnection.php');
session_start();
$email=$_SESSION['email'];
$oldsql="SELECT slot FROM user WHERE email='$email'";
$result=$conn->query($oldsql);
$row=mysqli_fetch_assoc($result);
$previous_slot=$row['slot'];


if(isset($_POST['submit'])){

  $slot=$_POST['slots'];
  $email=$_SESSION['email'];
  $sql="UPDATE user SET slot='$slot' WHERE email='$email'";
  $conn->query($sql);
  $sql1="SELECT seats_remaining FROM bookslot WHERE time='$slot'";
  $result=$conn->query($sql1);
  $row=mysqli_fetch_assoc($result);
  $seat1=$row['seats_remaining'];
  $seat1=$seat1-1;
  $newsql="UPDATE bookslot SET seats_remaining='$seat1' WHERE time='$slot'";
  $conn->query($newsql);

    $sql3="SELECT seats_remaining FROM bookslot WHERE time='$previous_slot'";
  $result=$conn->query($sql3);
  $row=mysqli_fetch_assoc($result);
  $seat=$row['seats_remaining'];
  if($seat==8){
    $seat=8;
  }else{
    $seat=$seat+1;
  };
  $newsql1="UPDATE bookslot SET seats_remaining='$seat' WHERE time='$previous_slot'";
  $conn->query($newsql1);

header('Location:Student.php');
};


?>