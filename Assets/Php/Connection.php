<?php
	
	// Database connection settings
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'amaresadb';

	$conn = new mysqli($servername,$username,$password,$dbname);

	if($conn){
		echo "string";
		header('Location: ../../index.html');
		sleep(15);
		exit();
	}else{
		die(mysqli_error($conn));
	}
?>

