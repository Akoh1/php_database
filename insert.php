<?php 
require_once 'database.php';

$connect = new DB();
$get_connect = $connect->connect();

if ($get_connect === false) {
	# code...
	die("ERROR: could not connect. ". $get_connect->connect_error);
}

	// Escape user inputs for security
$first_name = $get_connect->real_escape_string($_REQUEST['first_name']);
$last_name = $get_connect->real_escape_string($_REQUEST['last_name']);
$email = $get_connect->real_escape_string($_REQUEST['email']);
 
// Attempt insert query execution
$sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
if($get_connect->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $$get_connect->error;
}
 
// Close connection
$get_connect->close();
 ?>