<?php
	
	include('Connection.php');

	if(isset($_POST['Submit'])){
		if($_POST['Submit'] == "Admin"){
			addmanagement($conn);
		}
	}
    function addmanagement($conn){
        $Lastname = $_POST['Lastname'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        $Hash = password_hash($Password, PASSWORD_DEFAULT);
        $Role = $_POST['Role'];

        $stmt = "INSERT INTO management(Lastname, Firstname)VALUES('$Lastname','$Firstname')";

         mysqli_query($conn, $stmt); 

         echo "<script>
                    alert('Added Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Management.php';
                    }, 50); 
                </script>";          
	}	
?>