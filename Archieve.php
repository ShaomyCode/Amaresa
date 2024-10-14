<?php

	include './Assets/Php/Connection.php';

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Archieve</title>
	<!-- CUSTOM CSS  -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Admin.css?v=<?php echo time(); ?>"> 
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">	
</head>
<body>


	<!-- SIDEBAR -->
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
						<a href="./Account.php" >  
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
						<a href="./Users.php" class="dashboard-list-item " >
							<i class="fa-solid fa-users"></i>
							<span class="text nav-text">Users</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Management.php" class="dashboard-list-item ">
							<i class="fa-solid fa-user-tie"></i>
							<span class="text nav-text">Management</span>
						</a>
					</li>					

					<li class="nav-link">
						<a href="./Properties.php" class="dashboard-list-item ">
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
						<a href="./Archieve.php" class="dashboard-list-item active">
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

	<!-- FOR MAIN SECTION -->
		<section class="Table-section" id="Table-Section">
			<div class="container">
				<table class="table" id="table">
					<tr>	
						<th>Name</th>
						<th>Description</th>
						<th>Date</th>
					
						<th class="action-center">Actions</th>
					</tr>	
				
				<?php
						// Check if the sort button is clicked
						if (isset($_POST['Sort-btn'])) {
							$Sortlist = $_POST['Sort-Option'];
							if($Sortlist == "Admin"){
								$sql = "SELECT * FROM archive WHERE Description = 'Admin' ";
								

							}elseif($Sortlist == "User"){
								$sql = "SELECT * FROM archive WHERE Description = 'User' ";
							}elseif($Sortlist == "Pending"){
								$sql = "SELECT * FROM archive WHERE Description = 'Pending' ";
								if(!$sql){
									echo "not found";
								}
							}elseif($Sortlist == "Property"){
								$sql = "SELECT * FROM archive WHERE Description = 'Property' ";
							}else{
								// DEFAULT
								$sql = "SELECT * FROM archive ORDER BY Description ASC";
							}

						} else {
						    // Default query to fetch all rows
						    $sql = "SELECT * FROM archive ";
						}

						$rs = mysqli_query($conn, $sql);

						if ($rs) {
						    while ($row = mysqli_fetch_assoc($rs)) {
						        // Assign variables from fetched rows
						        $ArchiveID = $row['ArchiveID'];
						        $Name = $row['Name'];
						        $Description = $row['Description'];
						        $Date = $row['Date'];

						        // Display rows in table format
						        echo "
						        <tr>
						            <td>".$Name."</td>
						            <td>".$Description."</td>
						            <td>".$Date."</td>
						            <td class='td-action'>
						                <a href='./Assets/Php/Admin.php?deleteid=".$ArchiveID."' onclick='return DeleteConfirmation()'>
						                <i class='fa-solid fa-trash'></i>
						                </a>                                    
						            </td>
						        </tr>
						        ";
						    }
						} else {
						    // Handle query failure
						    echo "<tr><td colspan='4'>No ".$sortOption." found</td></tr>";
						}
				?>
				</table>
			</div>	

		</section>
		<form method="POST"> 		
			<div class="float-diagram">
				<div class="form-items">
					<input type="search" list="Options" name="Sort-Option" placeholder="Find specific results...">
					<datalist id="Options">
					    <option value="Admin">
					    <option value="User">
					    <option value="Pending">
					    <option value="Property">
					    <option value="Default">
					</datalist>						
				</div>
				<button type="submit" name="Sort-btn" ><i class="fa-solid fa-sort"></i> Sort </button>
			</div>
		</form>			
	</main>



	<!-- Custom JS & JQUERY -->
	<script src="./Assets/Js/Admin.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>	
</body>
</html>