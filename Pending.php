<?php

	include './Assets/Php/Connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Pendings</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
</head>
<body>

	<main>
	<!-- SIDEBAR -->
	<aside class="sidebar" id="sidebar"> 
		<figure>
			<img src="./Assets/Images/Amaresa-logo.png">
		</figure>

		<div class="dashboard">
			<h3 class="h2 dashboard-title">DASHBOARD</h3>

			<ul class="dashboard-list">

				<li>
					<a href="./Account.php" class="dashboard-list-item">
						<i class="fa-solid fa-id-card-clip"></i>
						<span>Account</span>
					</a>
				</li>				

				<li>
					<a href="./Pending.php" class="dashboard-list-item active">
						<i class="fa-solid fa-chalkboard-user"></i>
						<span>Pendings</span>
					</a>
				</li>				

				<li>
					<a href="./Users.php" class="dashboard-list-item">
						<i class="fa-solid fa-users"></i>
						<span>Users</span>
					</a>
				</li>	

				<li>
					<a href="./Management.php" class="dashboard-list-item">
						<i class="fa-solid fa-users"></i>
						<span>Management</span>
					</a>
				</li>	
				
				<li>
					<a href="./Properties.php" class="dashboard-list-item">
						<i class="fa-solid fa-bars-progress"></i>
						<span>Properties</span>
					</a>
				</li>				

				<li>
					<a href="Message.php" class="dashboard-list-item">
						<i class="fa-solid fa-envelope"></i>
						<span>Messages</span>
					</a>
				</li>
				<li>
					<a href="Archieve.php" class="dashboard-list-item">
						<i class="fa-solid fa-box-archive"></i>
						<span>Archieve</span>
					</a>
				</li>				

				<li>
					<a href="SoldProperties.php" class="dashboard-list-item">
						<i class="fa-solid fa-rectangle-list"></i>
						<span>Sales Log</span>
					</a>
				</li>				

				<li>
					<a href="Logout.html" class="dashboard-list-item">
						<i class="fa-solid fa-right-from-bracket"></i>
						<span>Logout</span>
					</a>
				</li>

			</ul>
		</div>
	</aside>

	<!-- TOP SECTION -->
	<section class="displaylist" id="displaylist">
		<div class="container">

			<div class="container-item">

				<div class="container-title">
					<span>Users</span>
					<i class="fa-solid fa-users"></i>
				</div>
			<?php
				$sql = "SELECT COUNT(*) AS total_users FROM user";

				// Execute the query
				$result = $conn->query($sql);

				// Fetch the result
				$total_users = 0;
				if ($result->num_rows > 0) {
				    $row = $result->fetch_assoc();
				    $total_users = $row['total_users'];
				}

				echo "<span> ".$total_users." </span>";
						
			 ?>
			</div>			

			<div class="container-item">

				<div class="container-title">
					<span>Properties</span>
					<i class="fa-solid fa-house"></i>
				</div>
			<?php
				$sql = "SELECT COUNT(*) AS TProperties FROM Properties";

				// Execute the query
				$result = $conn->query($sql);

				// Fetch the result
				$total_users = 0;
				if ($result->num_rows > 0) {
				    $row = $result->fetch_assoc();
				    $TProperties = $row['TProperties'];
				}

				echo "<span> ".$TProperties." </span>";		
			 ?>
			</div>			

			<div class="container-item">

				<div class="container-title">
					<span>Pendings</span>
					<i class="fa-solid fa-chalkboard-user"></i>
				</div>
			<?php
				$sql = "SELECT COUNT(*) AS TPendings FROM Pending";

				// Execute the query
				$result = $conn->query($sql);

				// Fetch the result
				$TPendings = 0;
				if ($result->num_rows > 0) {
				    $row = $result->fetch_assoc();
				    $TPendings = $row['TPendings'];
				}
				echo "<span> ".$TPendings." </span>";		
			 ?>

			</div>

			<div class="container-item">

				<div class="container-title">
					<span>Archieve</span>
					<i class="fa-solid fa-box-archive"></i>
				</div>
			<?php
				$sql = "SELECT COUNT(*) AS TArchives FROM Archive";

				// Execute the query
				$result = $conn->query($sql);

				// Fetch the result
				$TArchives = 0;
				if ($result->num_rows > 0) {
				    $row = $result->fetch_assoc();
				    $TArchives = $row['TArchives'];
				}
				echo "<span> ".$TArchives." </span>";		
			 ?>
			</div>

		</div>
	</section>
	<!-- Main Section -->
		<section class="Table-section" id="Table-Section">
			<div class="container">
				
				<table class="table" id="table">
					<tr>	
						<th>Pending ID</th>
						<th>Lastname</th>
						<th>Firstname</th>
						<th>Email</th>
						<th>Phone</th>
						<th>Address</th>
						<th>Property</th>
						<th>Notes</th>
						<th>Date</th>
						<th class="action-center">Actions</th>
					</tr>	
				<!-- GETTING THE DATAS FROM PENDING TO DISPLAY -->	
				<?php

						$sql = "SELECT * FROM pending";
						$rs = mysqli_query($conn, $sql);

						if($rs){
							while ($row = mysqli_fetch_assoc($rs)) {
								// code...
								$PendingID = $row['PendingID'];
								$Lastname = $row['Lastname'];
								$Firstname = $row['Firstname'];
								$Address = $row['Address'];
								$Email = $row['Email'];
								$Phone = $row['Phone'];
								$Selected_Property = $row['Selected_Property'];
								$Message = $row['Message'];
								$Status = $row['Status'];
								$Date = $row['Date'];
								
								echo "

								<tr>
									<td>".$PendingID."</td>
									<td>".$Lastname."</td>
									<td>".$Firstname."</td>
									<td>".$Email."</td>
									<td>".$Phone."</td>
									<td>".$Address."</td>
									<td>".$Selected_Property."</td>
									<td class='note'>".$Message."</td>
									<td>".$Date."</td>
									

								<td class='td-action'>
									<a href='#'><i class='fa-solid fa-user-check'></i> </a>
									<a href='./Assets/Php/Admin.php?archiveID=".$PendingID."&value=Pending' onclick='return archiveConfirmation()' '>
									<i class='fa-solid fa-box-archive' ></i>
									</a>
								</td>
								</tr>

								";
							}
						}
					?>


				</table>
			</div>	
		</section>

	</main>

	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
</body>
</html>