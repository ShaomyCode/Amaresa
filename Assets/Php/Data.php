<?php
include 'Connection.php';

	$email = 'admin@gmail.com';
	$password = 'admin123';
	$hashed_password = password_hash($password, PASSWORD_DEFAULT);


	$stmt = $conn->prepare("INSERT INTO Management(Email, Password) VALUES(?,?)");

	$stmt->bind_param("ss",$email, $hashed_password);

	if($stmt->execute()){
		echo "<script>alert('Successfully added!') </script>";
		header("location:..//")
	}else {
	    echo "Error: ".$stmt->error;
	}

	//Close the statement and connection
	$stmt->close();
	$conn->close();


?>

<!-- USE THIS FOR SIGNIN -->
