<?php
	
	include('Connection.php');

	if(isset($_POST['Submit'])){
		if($_POST['Submit'] == "User"){
			adduser($conn);
		}else if($_POST['Submit'] == "Admin"){
			addmanagement($conn);
		}else{
            
        }   
	}

	function adduser($conn){
        $Lastname = $_POST['Lastname'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        $Role = "User";

        $stmt = "INSERT INTO user(Firstname, Lastname, Email, Phone, Address, Password, Role)VALUES('$Firstname','$Lastname','$Email','$Phone','$Address', '$Password','$Role')";

         mysqli_query($conn, $stmt); 

         echo "<script>
                    alert('Added Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Users.php';
                    }, 50); 
                </script>";          
	}	

	function addmanagement($conn){
        $Lastname = $_POST['Lastname'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Password = $_POST['Password'];
        $ConfirmPassword = $_POST['ConfirmPassword'];
        $Role = $_POST['Role'];
        $Hash = password_hash($Password, PASSWORD_DEFAULT);
      	


        $stmt = "INSERT INTO management(Lastname, Firstname, Email, Phone, Address, Password, Role)VALUES('$Lastname','$Firstname','$Email', '$Phone', '$Address', '$Hash','$Role')";

         mysqli_query($conn, $stmt); 

         echo "<script>
                    alert('Added Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Management.php';
                    }, 50); 
                </script>";          
	}

    function addProperties($conn){

    }
?>

<!-- 
Lastname, Firstname, Email, Phone, Address, Password
'$Lastname','$Firstname','$Email', '$Phone', '$Address', '$Hash'
 -->