<?php
session_start();
$username = "";
$email = "";
$errors = array();
$password = "";
$confirm_password = "";

$db = mysqli_connect('localhost','root','','registration');

if(isset($_POST['register'])){
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$password = mysqli_real_escape_string($db, $_POST['password']);
	$confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
	
	if(empty($username)){
		array_push($errors, "username is required.");}
	if(empty($email)){
		array_push($errors, "email is required.")
		;}
	if(empty($password)){
		array_push($errors, "password is required.")
		;}
	if($password != $confirm_password ){
		array_push($errors, "password mismatch..")
		;}
		if(count($errors) == 0)
		{
			$pwd = md5($password);
			$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$pwd')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged In.";
			header('location:index.php');
			}
			
			}
			
			//login
			if(isset($_POST['login'])){
				$username = mysqli_real_escape_string($db, $_POST['username']);
				$password = mysqli_real_escape_string($db, $_POST['password']);
				
				if(empty($username)){
					array_push($errors, "username is required.");
				}
				if(empty($password)){
					array_push($errors, "password is required.");
				}
				if(count($errors) == 0) {
					$password = md5($password);
					$query = "SELECT * FROM users WHERE username='$username' AND password = '$password'";
					$results = mysqli_query($db, $query);
					if(mysqli_num_rows($results) == 1){
						$_SESSION['username'] = $username;
						$_SESSION['success'] = "You are now logged In.";
						header('location:index.php');
					}else{
						array_push($errors,"username/password does not correct.");
					}
				}
				
			}
			
			//logout
			if(isset ($_GET['logout'])){
				session_destroy();
				unset($_SESSION['username']);
				header('location:login.php');				
			}
?>