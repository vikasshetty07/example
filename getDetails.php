<?php
session_start();
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: X-Requested-With');
$errors = array();
$arr = array();
// Create connection
$db = mysqli_connect('localhost', 'root', '', 'register');
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
} 

$data=array();

    $select=mysqli_query($db,"SELECT username, email FROM users")or mysqli_error();
    $sql=mysqli_num_rows($select);
    if($sql == 0)
    {
		echo "NO rows";
	}else{
        while($row=mysqli_fetch_assoc($select))
		
        {
		 
		 array_push($data,$row);
		 
			//array_push($data,"username:{$row['username']}".','."email:{$row['email']}");
			
        }
    }

	echo json_encode($data);
   
mysqli_close($db);
?>