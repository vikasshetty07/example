<?php
session_start();
header('Access-Control-Allow-Origin: *');
$errors = array();
$arr = array('status' => 'success');

// Create connection
$db = mysqli_connect('localhost', 'root', '', 'register');
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
} 


$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

	if(empty($username)){
		array_push($errors, "username is required.");
	}
	if(empty($email)){
		array_push($errors, "email is required.");
	}
	if(empty($password)){
		array_push($errors, "password is required.");
	}
	if($password != $confirm_password ){
		array_push($errors, "password mismatch..");
	}
		

	if(count($errors) == 0)
		{	$pwd = md5($password);
			$sql = "INSERT INTO users (username, email, password)
			VALUES ('$username', '$email','$pwd')";
			$_SESSION['username'] = $username;

		if (mysqli_query($db, $sql)) {
			echo json_encode($arr);
		} else {
			echo "Error:  " . $sql . "<br>" . mysqli_error($db);
		}
			
	}else {
		header('HTTP/1.1 500 oops!! something went wrong.');
   		foreach($errors as $error){
			echo $error;
		}
	}

mysqli_close($db);
?>