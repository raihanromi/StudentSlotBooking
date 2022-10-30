<?php  
session_start();
include_once("../dbConnection.php");

if (isset($_POST['Logemail']) && isset($_POST['Logpass'])) {

	$email =($_POST['Logemail']);
	$pass =($_POST['Logpass']);
	$user=($_POST['role']);

	if (empty($email)) {
		header("Location: ../index.php?error=User Name is Required");
	}else if (empty($pass)) {
		header("Location: ../index.php?error=Password is Required");
	}else {
        
        $sql = "SELECT * FROM user WHERE email='$email' AND pass='$pass'";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) === 1) {
        	// the email must be unique
        	$row = mysqli_fetch_assoc($result);
        	if ($row['pass'] === $pass && $row['email'] == $email) {
				$_SESSION['is_login']=true;
				$_SESSION['name'] = $row['name'];
        		$_SESSION['user_id'] = $row['user_id'];
        		$_SESSION['email'] = $row['email'];
				$_SESSION['user_type'] = $row['user_type'];
				if($row['user_type']=='student'){
					header('location:../Student.php');
				}else{
					header('location:../Lecture.php');
				}
                
        	}else {
        		header("Location: ../index.php?error=Incorect User name or password");

        	}
        }else {
        	header("Location: ../index.php?error=Incorect User name or password");
           
        }

	}
	
}else {
	header("Location: ../index.php");

 }