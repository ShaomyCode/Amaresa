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
				
				$ImagePath = './Images/' . $row['IBathroom'];
					echo "
						<img src='$ImagePath' >
					";
		}	

	}

	?>

</body>
</html>