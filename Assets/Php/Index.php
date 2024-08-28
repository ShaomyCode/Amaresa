<?php
    
    include('Connection.php');

    if(isset($_POST['SentInquiry'])){
        inquiry($conn);
    }

    function inquiry($conn){
        $Lastname = $_POST['Lastname'];
        $Firstname = $_POST['Firstname'];
        $Email = $_POST['Email'];
        $Phone = $_POST['Phone'];
        $Address = $_POST['Address'];
        $Message = $_POST['Message'];
        $SelectedProperty = $_POST['Property'];
        $Address = $_POST['Address'];
        $Status = 'Pending';
        
        $stmt = "INSERT INTO Pending(Lastname, Firstname, Email, Phone, Message, Address, Selected_Property, Status) 
        VALUES('$Lastname','$Firstname', '$Email', '$Phone', '$Message','$Address', '$SelectedProperty', '$Status') ";
        mysqli_query($conn, $stmt); 

         echo "<script>
                    alert('Your inquiry has been successfully submitted.');
                    setTimeout(function(){
                        window.location.href = '../../index.php';
                    }, 1500); 
                </script>";   
    }

?>
<!-- 

 -->
