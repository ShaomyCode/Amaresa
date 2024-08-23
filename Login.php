	<?php
	include './Assets/Php/Connection.php';

	        if(isset($_POST['Login-btn'])){
	            $Email = $_POST['Email'];
	            $Password = $_POST['Password'];

	            $sql = "SELECT * FROM management WHERE Email ='$Email' AND Password ='$Password'";
	            $rs = mysqli_query($conn,$sql);

	            if($rs){

	                while ($row =mysqli_fetch_assoc($rs)) {
	                        
	                        if($row['Password'] == $Password && $row['Email'] == $Email ){

	                        	header('location: ../../Account.html');
	                           
	                        }else{
				                echo "<script>alert('login failed: username or password')</script>";
				                sleep(4);
				                header('index.php');	                        	
	                        }

	                }

	            }
	        }
	    ?>
<h1>Hi</h1>
	    <!-- 
	                        	if($row['Role'] == "Admin"){
	                        		echo "<script>alert('Welcome ".$row['name']."')</script>";
	                        		sleep(4);
	                        		header('location: ../../Account.html');
	                        	}else{
	                        		echo "<script>alert('Welcome ".$row['name']."')</script>";
	                        		sleep(4);
	                        		header('Location: ../../index.html');
	                        	}
	     -->