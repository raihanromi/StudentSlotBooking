<!DOCTYPE html>

<html lang="en">

<head>

<title> </title>

</head>

<body>
	
<center>
	<h1></h1> 
	

<form method = "POST" action="register.php">
	
	<label for="firstname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="firstname" required> <br> <br>
    <br>

    <label for="lastname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lastname" required> <br> <br>
    <br>


	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required> <br> <br>
    <br>
 
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required> <br><br><br>

    <label for="confirmPassword"><b>Confirm Password</b></label>
    <input type="text" placeholder="Confirm Password" name="confirmPassword" required> 
    <br> <br>
    <br>
 

    <button type="submit" name="submit" value="submit">Submit</button>
</form>

</center>


</body>

</html>

<?php


if(ISSET($_POST['submit'])){

	//The PHP code for submitting the data from the form to the database should be here.

	//I recommend creating a new connection here.

    
    include_once("dbConnection.php");


    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $pass=$_POST['psw'];
    $confrimpassword=$_POST['confirmPassword'];

    

$sql="INSERT INTO user(Firstname,Lastname,Email,Password) VALUES('$firstname','$lastname','$email','$pass')";


$conn->query($sql);


}


?>


