	<?php
	include './Assets/Php/Connection.php';

	        if(isset($_POST['Login-btn'])){
	            $Email = $_POST['Email'];
	            $Password = $_POST['Password'];

	            $sql = "SELECT * FROM management WHERE Email = '$Email' AND Password ='$Password'";
	            $rs = mysqli_query($conn,$sql);

	            if($rs){

	                while ($row =mysqli_fetch_assoc($rs)) {
	                        
	                        if($row['Password'] == $Password && $row['Email'] == $Email ){
	                        echo "<script>alert('login sucess: username or password')</script>";
	                               header('location: Account.php');
	                        }else{
				                echo "<script>alert('login failed: username or password')</script>";
				                header('index.php');	                        	
	                        }

	                }

	            }
	        }
	    ?>