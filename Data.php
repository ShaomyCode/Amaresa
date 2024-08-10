<?php
include './Assets/Php/Connection.php';

$email = 'samuel@gmail.com';
$password = 'admin'; // Plain text password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

$query = "INSERT INTO Management (email, password) VALUES (?, ?)";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 'ss', $email, $hashed_password);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
?>