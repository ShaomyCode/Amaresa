<?php
include './Assets/Php/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
			<?php
				$sql = "SELECT * FROM properties";
				$rs = mysqli_query($conn, $sql);

				if ($rs) {
				    while ($row = mysqli_fetch_assoc($rs)) {
				        $imageData = $row['IExterior'];

				        // Convert binary image data to base64
				        $base64Image = base64_encode($imageData);

				        // Display the image using a data URI
				        echo "
				        <img src='data:image/jpeg;base64, $base64Image' />
				        ";
				    }
				}
			?>

</body>
</html>