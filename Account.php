<?php
	include './Assets/Php/Connection.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Account</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
	<!-- Swiper CSS -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />	 -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>
<body>

	<nav class="sidebar close" id="sidebar">
		<header>
			<figure class="image-container">
				<img src="./Assets/Images/Amaresa-logo.png" alt="Amaresa Logo">
			</figure>
			<button class="toggle">
				<i class="fa-solid fa-angles-right"></i>
			</button>
		</header>

		<div class="menu-bar">
			
			<div class="menu">

				<ul class="menu-links">
					<li class="nav-link">
						<a href="./Account.php" class="active">  
							<i class="fa-solid fa-id-card-clip"></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Pending.php">
							<i class="fa-solid fa-chalkboard-user"></i>
							<span class="text nav-text">Pendings</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Users.php" class="dashboard-list-item">
							<i class="fa-solid fa-users"></i>
							<span class="text nav-text">Users</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Management.php" class="dashboard-list-item">
							<i class="fa-solid fa-user-tie"></i>
							<span class="text nav-text">Management</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Properties.php" class="dashboard-list-item">
							<i class="fa-solid fa-bars-progress"></i>
							<span class="text nav-text">Properties</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="Message.php" class="dashboard-list-item">
							<i class="fa-solid fa-envelope"></i>
							<span class="text nav-text">Messages</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Archieve.php" class="dashboard-list-item">
							<i class="fa-solid fa-box-archive"></i>
							<span class="text nav-text">Archieve</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="SoldProperties.php" class="dashboard-list-item">
							<i class="fa-solid fa-rectangle-list"></i>
							<span class="text nav-text">Sales Log</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Assets/Php/Logout.php" class="dashboard-list-item">
							<i class="fa-solid fa-right-from-bracket"></i>
							<span class="text nav-text">Logout</span>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<main class="main">

		<section class="profile" id="profile">

			<div class="container">

				<div class="profile-wrapper">

					<div class="admin-display-status">
						<figure class="admin-profile-img">
							<img src="./Assets/Images/User.gif" alt="Admin profile picture">
						</figure>
						<div class="admin-texts">
							<span class="admin-name">Admin name here</span>
							<span class="admin-role">Admin</span>
							<span class="admin-subtitle">Manage properties and users.</span>
						</div>
					</div>

					<div class="admin-view-profile">
						<button class="btn">View Profile</button>
					</div>
				</div>

			</div>
			
		</section>

		<section class="activity" id="activity">
			<div class="container">
				<h3 class="h3 activity-title">Recent Activity</h3>
				<div class="activity-wrapper">

					<div class="activity-items">
						<figure>
							<img src="./Assets/Images/User.gif">
						</figure>
						<h3 class="activity-card-title"> New User Registration</h3>
						<span class="activity-subtitle">Manage and Track All Users</span>
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

							echo "<span class='total-display'> ".$total_users." </span>";
									
						 ?>
					</div>

					<div class="activity-items">
						<figure>
							<img src="./Assets/Images/house.gif">
						</figure>
						<h3 class="activity-card-title"> New Property Listing</h3>
						<span class="activity-subtitle">Tracking Your Real Estate Assets</span>
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

							echo "<span class='total-display'> ".$TProperties." </span>";		
						 ?>						
					</div>
					
					<div class="activity-items">
						<figure>
							<img src="./Assets/Images/message.gif">
						</figure>
						<h3 class="activity-card-title"> Messages</h3>
						<span class="activity-subtitle">Essential Alerts and Conversations</span>
						<?php
							$sql = "SELECT COUNT(*) AS TPMessages FROM Message";

							// Execute the query
							$result = $conn->query($sql);

							// Fetch the result
							$Total_Message = 0;
							if ($result->num_rows > 0) {
							    $row = $result->fetch_assoc();
							    $Total_Message = $row['TPMessages'];
							}
							echo "<span class='total-display'> ".$Total_Message." </span>";		
						 ?>
					</div>					

					<div class="activity-items">
						<figure>
							<img src="./Assets/Images/Archive.gif">
						</figure>
						<h3 class="activity-card-title"> Archive</h3>
						<span class="activity-subtitle">Past Records</span>
						<?php
							$sql = "SELECT COUNT(*) AS GroupArchive FROM Archive";

							// Execute the query
							$result = $conn->query($sql);

							// Fetch the result
							$TArchives = 0;
							if ($result->num_rows > 0) {
							    $row = $result->fetch_assoc();
							    $TArchives = $row['GroupArchive'];
							}
							echo "<span class='total-display'> ".$TArchives." </span>";		
						 ?>
					</div>
				</div>
			</div>
		</section>

<!-- Swiper -->
	<div class="Main-Container">
	  <div class="swiper mySwiper">
	    <div class="swiper-wrapper">
	      <div class="swiper-slide">Slide 1</div>
	      <div class="swiper-slide">Slide 2</div>
	      <div class="swiper-slide">Slide 3</div>
	      <div class="swiper-slide">Slide 4</div>
	      <div class="swiper-slide">Slide 5</div>
	      <div class="swiper-slide">Slide 6</div>
	      <div class="swiper-slide">Slide 7</div>
	      <div class="swiper-slide">Slide 8</div>
	      <div class="swiper-slide">Slide 9</div>
	    </div>
	    <div class="swiper-button-next"></div>
	    <div class="swiper-button-prev"></div>
	    <div class="swiper-pagination"></div>
	  </div>		
	</div>		

		
	</main>
	
	<footer>
		
	</footer>
		


	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/admin.js?v=<?php echo time(); ?>"></script>
<script type="text/javascript" src="swiper.js"></script>
	<!-- SWIPER HERE -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>	
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
	<!-- NO TURNING BACk -->
	<script language="javascript" type="text/javascript">	
            // window.history.forward();
	</script>
	



</body>
</html>