<?php

	include './Assets/Php/Connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Solds</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
</head>
<body>

	<main>
	<!-- SIDEBAR -->
	<aside class="sidebar" id="sidebar"> 
		<figure>
			<img src="./Assets/Images/Amaresa-Logo.png">
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
					<a href="./Pending.php" class="dashboard-list-item ">
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
					<a href="Properties.php" class="dashboard-list-item ">
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
					<a href="SoldProperties.php" class="dashboard-list-item active">
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

				<span>Total of users</span>
			</div>			

			<div class="container-item">

				<div class="container-title">
					<span>Properties</span>
					<i class="fa-solid fa-house"></i>
				</div>

				<span>Total of properties</span>
			</div>			

			<div class="container-item">

				<div class="container-title">
					<span>Pendings</span>
					<i class="fa-solid fa-chalkboard-user"></i>
				</div>

				<span>Total Pendings</span>
			</div>

			<div class="container-item">

				<div class="container-title">
					<span>Archieve</span>
					<i class="fa-solid fa-box-archive"></i>
				</div>

				<span>Total Archieves</span>
			</div>

		</div>
	</section>
	<!-- PROPERTIES Section -->
		<section class="Table-section" id="Table-Section">
			<div class="container">

				<table class="table" id="table">
					<tr>	
						<th>Sales ID</th>
						<th>Property</th>
						<th>Owner</th>
						<th>Date Purchased</th>

						<th class="action-center">Actions</th>
					</tr>	

					<tr>
						<td>1</td>
						<td>Arya Prime</td>
						<td>Jamandron</td>
						<td>20/08/2024</td>

						<td class="td-action"><a href="#"><i class="fa-solid fa-eye"></i></a></td>
					</tr>


				</table>
			</div>	
		</section>

		<!-- FOR POP UP ADD AND EDIT -->
		<section class="Building">
			<div class="wrapper">
				<a href="#"> <i class="fa-solid fa-plus"></i> </a>
			</div>

		</section>
	</main>



	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
</body>
</html>