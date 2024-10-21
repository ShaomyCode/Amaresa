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
	}else{
        AddProperty($conn);
    } 
}
if(isset($_GET['HouseID'])){
     
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
     }elseif($value == "Property"){
        ArchiveProperty($conn);
     }else{
        echo "Cannot found!";
     }
}
/***********************************************
FOR SORTING
************************************************/

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
      	
        $stmt = "
        INSERT INTO management(Lastname, Firstname, Email, Phone, Address, Password, Role)
        VALUES('$Lastname','$Firstname','$Email', '$Phone', '$Address', '$Hash','$Role')";

         mysqli_query($conn, $stmt); 

         echo "<script>
                    alert('Added Successfully');
                    setTimeout(function(){
                        window.location.href = '../../Management.php';
                    }, 50); 
                </script>";          
}

/***********************************************
   UPLOAD IMAGE  
************************************************/
function uploadImage($inputName, &$newFileName) {
    $file = $_FILES[$inputName]["name"];
    $tempFile = $_FILES[$inputName]["tmp_name"];
    $newFileName = uniqid() . "-" .$file;
    $uploadPath = realpath('../../Images') . DIRECTORY_SEPARATOR . $newFileName;
    move_uploaded_file($tempFile, $uploadPath);
}   
function AddProperty($conn){
    //INPUT NAMES
    $Property = $_POST['Property'];
    $Price = $_POST['Price'];
    $Bedroom = $_POST['Bedroom'];
    $Bathroom = $_POST['Bathroom'];
    $Area = $_POST['Area'];
    $Message = $_POST['Message'];
    $Status = "Sale";
    $Role = "Property";
    
    // Usage
    uploadImage('Exterior', $Newfile_Exterior);
    uploadImage('Bedroom', $Newfile_Bedroom);  
    uploadImage('Livingroom', $Newfile_Livingroom);  
    uploadImage('Diningroom', $Newfile_Diningroom);  
    uploadImage('Bathroom', $Newfile_Bathroom);  

    $stmt = "
    INSERT INTO properties(Property, Description, Price, Bedrooms, Bathrooms, Area_sqft, Status, IExterior,IBedroom,IBathroom,IAttic,IDining,Role) 
    VALUES ('$Property', '$Message', '$Price', '$Bedroom', '$Bathroom', '$Area','$Status','$Newfile_Exterior','$Newfile_Bedroom','$Newfile_Livingroom','$Newfile_Diningroom','$Newfile_Bathroom','$Role')
    ";
    mysqli_query($conn,$stmt);

    echo "
    <script>
        alert('Property Successfully Added');
     setTimeout(function(){
        window.location.href = '../../Properties.php';
        }, 50); 
    </script>"; 
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

function ArchiveProperty($conn){

    $ID = $_GET['archiveID'];

    $InsertArchive = "INSERT INTO archive(Name, Description)
            SELECT Property, Role
            FROM properties
            WHERE PropertyID = ? ";

    $stmtInsert = $conn->prepare($InsertArchive);
    $stmtInsert->bind_param("i", $ID);

    if (!$stmtInsert->execute()) {
            throw new Exception("Error copying record to archive: " . $stmtInsert->error);
    }  

    $sqlDelete = "
    DELETE FROM properties 
    WHERE PropertyID = ?
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
                 window.location.href = '../../Pending.php';
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




