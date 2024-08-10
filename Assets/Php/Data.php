<?php
include 'Connection.php';

$email = 'david@gmail.com';
$password = 'david123';
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO Management (email, password,name) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ss', $email, $hashed_password);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
?>

<!-- USE THIS FOR SIGNIN -->