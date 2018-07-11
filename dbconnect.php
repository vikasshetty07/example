<?php
$username= "root";
$password= "";
$db= "testdb";

$db = new mysqli('localhost',$username, $password, $db) or die('db not connected');
echo "great work!!!";

?>