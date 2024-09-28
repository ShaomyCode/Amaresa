<?php
	include './Assets/Php/Connection.php';
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Working</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Sidebar.css?v=<?php echo time(); ?>">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	

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
						<a href="#"> 
							<i class="fa-solid fa-id-card-clip"></i>
							<span class="text nav-text">Dashboard</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="#">
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

		<section class="profile">

			<div class="container">

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
						<button> Pending Approval </button>
					</div><div class="activity-items">
						<figure>
							<img src="./Assets/Images/house.gif">
						</figure>
						<h3 class="activity-card-title"> New Property Listing</h3>
						<button> Pending Reviews </button>
					</div><div class="activity-items">
						<figure>
							<img src="./Assets/Images/message.gif">
						</figure>
						<h3 class="activity-card-title"> Messages</h3>
						<button> 3 Unread Messages</button>
					</div>
				</div>
			</div>
		</section>

		<section class="matrics" id="matrics">
			<div class="container">

			</div>
		</section>

		<section class="testimonial">
			<div class="container">
				
			</div>
		</section>
	</main>
	
	<footer>
		
	</footer>
		


	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Sidebar.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
	<!-- NO TURNING BACk -->
	<script language="javascript" type="text/javascript">	
            // window.history.forward();
	</script>
</body>
</html>