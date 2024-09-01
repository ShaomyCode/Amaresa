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
if(isset($_GET['deleteid'])){
    DeleteArchive($conn);
}
/***********************************************
FOR UPDATING[EDITING]: USERS - MANAGEMENTS - PROPERTIES
************************************************/

/***********************************************
FOR ARCHIVING: USERS - MANAGEMENTS - PROPERTIES
************************************************/
if(isset($_GET['archiveID']) && isset($_GET['value'])){
    $value = $_GET['value'];
    if($value == "Admin"){
        ArchiveManagement($conn);
     }elseif($value == "Pending"){
        ArchivePending($conn);
     }elseif($value == "User"){
        ArchiveUser($conn);
     }
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

function AddProperties($conn){
    $Property = $_POST['Property'];
    $Price = $_POST['Price'];
    $Bedroom = $_POST['Bedroom'];
    $Bathroom = $_POST['Bathroom'];
    $Area = $_POST['Area'];
    $Message = $_POST['Message'];

    // ARRAY: LIST OF NAME TO PROCESS
    $inputNames = ['Exterior', 'Bedroom', 'Bathroom','Livingroom', 'Diningroom'];
    // List of input names and corresponding database columns
    $inputNamesToColumns = [
        'Exterior' => 'IExterior',
        'Bedroom' => 'IBedroom',
        'Bathroom' => 'IBathroom'
    ];
    // FOR IMPORTING IMAGE/S
    $Filename = $_FILES[$inputNames]["name"];
    $Tmpname = $_FILES[$inputNames]["tmp_name"];
    $NewFile = uniqid() . "-" .$Filename;
    $Uploadpath = "Images/" .$NewFile;
    move_uploaded_file($Tmpname, $Uploadpath);

    $Query = "
        INSERT INTO Property(Property, Description, Price, Bedrooms, Bathrooms, Area_sqft, IExterior, IBedroom, IBathroom,IAttic, IDining)
        VALUES('$Property','$Message','$Price','$Bedroom','$Bathroom','$Area','')
    "

}
/***********************************************
FUNCTION FOR EDITING 
************************************************/

/***********************************************
FUNCTION FOR DELETING 
************************************************/ 
function DeleteArchive($conn){
    if(isset($_GET['deleteid'])){
        $ID = $_GET['deleteid'];

        $sql = "DELETE FROM Archive WHERE ArchiveId = $ID";
        mysqli_query($conn, $sql);

         echo "<script>
                    alert('Record Successfully Deleted');
                    setTimeout(function(){
                        window.location.href = '../../Archieve.php';
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
function ArchivePending($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description)
            SELECT Lastname, Status
            FROM Pending
            WHERE PendingID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM Pending 
    WHERE PendingID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from Pending: " . $stmtDelete->error);
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
function ArchiveUser($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description)
            SELECT Lastname, Role
            FROM User
            WHERE UserID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM User 
    WHERE UserID = ?
    ";

    $stmtDelete = $conn->prepare($sqlDelete);
    $stmtDelete->bind_param("i", $ID);    

    if (!$stmtDelete->execute()) {
        throw new Exception("Error deleting record from User: " . $stmtDelete->error);
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

