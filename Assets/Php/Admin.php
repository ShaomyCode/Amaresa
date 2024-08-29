<?php
	
	include('Connection.php');
/***********************************************
FOR ADDING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
	if(isset($_POST['Submit'])){
		if($_POST['Submit'] == "User"){
			AddUser($conn);
		}elseif($_POST['Submit'] == "Admin"){
			AddManagement($conn);
		}elseif($_POST['Submit' == "Propety"]){
            
        }   
	}
/***********************************************
FOR DELETING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
    if(isset($_GET['deleteid']) && isset($_GET['value'])){
        $value = $_GET['value'];
        if($value == "Admin"){
            DeleteManagement($conn);
        }elseif ($value == "User") { 
            DeleteUser($conn);
        }elseif($value == "Propety"){
            DeleteProperty($conn);
        }
    }
/***********************************************
FOR UPDATING[EDITING]: USERS - MANAGEMENTS - PROPERTIES
************************************************/

/***********************************************
FOR ARCHIVING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
if (isset($_GET['archiveID'])) {
    archiveManagement($conn);
}
/***********************************************
FUNCTION FOR ADDING
************************************************/
	function AddUser($conn){
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

	function AddManagement($conn){
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
/***********************************************
FUNCTION FOR EDITING 
************************************************/

/***********************************************
FUNCTION FOR DELETING 
************************************************/ 
    function DeleteManagement($conn){
        if(isset($_GET['deleteid'])){

            $ID = $_GET['deleteid'];

            $sql = "DELETE FROM management WHERE ManagementID = $ID";
            mysqli_query($conn, $sql);

         echo "<script>

                    alert('Deleted Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Management.php';
                    }, 50); 
                </script>"; 
        }
    }    

    function DeleteUser($conn){
        if(isset($_GET['deleteid'])){

            $ID = $_GET['deleteid'];

            $sql = "DELETE FROM User WHERE UserID = $ID";
            mysqli_query($conn, $sql);

         echo "<script>
                    alert('Deleted Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Users.php';
                    }, 50); 
                </script>"; 
        }
    }
/***********************************************
FUNCTION FOR ARCHIVING 
************************************************/ 
function ArchiveManagement($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description)
            SELECT Lastname, Role
            FROM Management
            WHERE ManagementID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM management 
    WHERE ManagementID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from management: " . $stmtDelete->error);
    }

         echo "<script>
                    alert('Archive Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Archieve.php';
                    }, 50); 
                </script>";     

    $stmtInsert->close(); 
    $stmtDelete->close(); 
}

