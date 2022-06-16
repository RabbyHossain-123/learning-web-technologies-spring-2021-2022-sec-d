<?php 
session_start();
$name = $_POST['username'];
$email = $_POST['mail'];
$gender = $_POST['gender']
$date_of_birth = $_POST['birthday']
$Blood_Group = $_POST['blood group']
$degree = $_POST['degree'];
$photo = $_POST['photo'];
if($name == null){
	echo "null name";
}else{
	
	if($username == $password){
		$_SESSION['status'] = true;
		header('location: task1.html?username='.$username);
	}else{
		echo "invalid name";
	}
}
if($email == null){
	echo "null email";
}else{
	
	if($email == $email){
		$_SESSION['status'] = true;
		header('location: task1.html?email='.$email);
	}else{
		echo "invalid email";
	}
}



?>