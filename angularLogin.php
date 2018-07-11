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
$password = $_POST['password'];


	if(empty($username)){
		array_push($errors, "username is required.");
	}
	if(empty($password)){
		array_push($errors, "password is required.");
	}
		

	if(count($errors) == 0)
		{
			$pwd = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password = '$pwd'";
			$results= mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
			echo json_encode($arr);
		} else {
			echo "Error:  " . $query . "<br>" . mysqli_error($db);
		}
			
	}else {
		header('HTTP/1.1 500 oops!! something went wrong.');
   		foreach($errors as $error){
			echo $error;
		}
	}

mysqli_close($db);
?>