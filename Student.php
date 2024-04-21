<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student dashboard</title>
     <style>
      select{
        padding: 10px;
        margin: 10px;
      }
     </style>
</head>
<body>
    
<?php
session_start();

    include_once("dbConnection.php");
    echo "<h2>Student Name: " .$_SESSION['name']."</h2>";
    echo "<br>";

?>
<form action="Setslot.php" method="post">
    <label>Choose a slot:</label>

<select name="slots" id="slots">

<?php 
include_once('dbConnection.php');
$sql = "SELECT * FROM bookslot";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $time=$row['time'];
    echo "<option value='$time'>".$row['time']. " ".$row['seats_remaining']." seats remaining"."</option>";
  }
}

?>

</select>

<button class="btn btn-success" type="submit" name="submit">Submit</button>

</form>


<?php 
    include_once('dbConnection.php');
    $email=$_SESSION['email'];
    $sql="SELECT slot FROM user where email='$email'";
    $result=$conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    $Stuslot=$row['slot'];
    echo"<h3>BOOKED SLOT: ".$Stuslot."</h3>";
    
?>

<a href='Signout.php' class="btn btn-danger">Signout</a>

</body>
</html>