<?php
session_start();
include './Assets/Php/Connection.php';

if (isset($_GET['HouseID'])) {
    $HouseID = $_GET['HouseID'];

    $stmt = $conn->prepare("SELECT * FROM Properties WHERE PropertyID = ?");
    $stmt->bind_param("i", $HouseID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $ImageExterior = './Images/' . $row['IExterior'];
        $ImageBedrooms = './Images/' . $row['IBedroom'];
        $IBathroom = './Images/' . $row['IBathroom'];
        $IDining = './Images/' . $row['IDining'];

        echo "
            <div class='Image-interior'><img src='$ImageExterior' class='items'></div>
            <div class='Image-highlights'>
                <img src='$ImageBedrooms' class='items'>
                <img src='$IBathroom' class='items'>
                <img src='$IDining' class='items'>
            </div>
        ";
    } else {
        echo "Error fetching property details.";
    }

    $stmt->close();
    $conn->close();
}
?>
