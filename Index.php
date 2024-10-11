<?php
	include './Assets/Php/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Find your dream house</title>

	<!-- Custom Css Link -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	<!-- Google font link -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- WEBSITE ICON -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">
	<!-- JQUERY -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>	
	<!-- Swiper CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

</head>
<body>

	<!-- HEADERS -->
	<header class="header">
			<div class="header-top"> 
				<div class="container">
					<ul class="header-top-list">

						<li>
							<a href="https://www.amaresa.ph/" class="header-top-link">
								<i class="fa-solid fa-paper-plane"></i>
								<span>amaresa.ph</span>
							</a>
						</li>						

						<li> 
							<a href="https://www.google.com/maps/dir//Amaresa+Marilao,+3019+M.+Villarica+Rd,+Marilao,+3019+Bulacan/@14.7950949,121.0162162,17z/data=!4m17!1m7!3m6!1s0x3397b38da5906293:0x8b01e358c47a7685!2sAmaresa+Marilao!8m2!3d14.7950897!4d121.0187911!16s%2Fg%2F11gpnfmdlb!4m8!1m0!1m5!1m1!1s0x3397b38da5906293:0x8b01e358c47a7685!2m2!1d121.0188034!2d14.7951434!3e2?entry=ttu"  class="header-top-link">
								<i class="fa-solid fa-map-location-dot"></i>
								<span>3019 M. Villarica Rd, Marilao, 3019 Bulacan</span>
							</a>
						</li>
					</ul>
					<div class="wrapper">

						<ul class="header-top-social-list">
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-x-twitter"></i>
								</a>
							</li>
							<li>
								<a href="#" class="header-top-social-link">
									<i class="fa-brands fa-linkedin"></i>
								</a>
							</li>																							
						</ul>

						<button class="header-top-btn" onclick="ShowSignup()" > <i class="fa-solid fa-user-tie"></i> <span> Sign in </span></button>
					</div>
				</div>

			</div>
	</header>
	<!-- MAIN CONTENT -->
	<main>
		<article>
			<!-- HERO SECTION -->
			<section class="hero" id="home">
				<div class="container">
					<div class="hero-logo">
						<img src="./Assets/Images/Amaresa-Logo.png" alt="Amaresa Logo" >
					</div>
						<h2 class="h1 hero-title">Find Your Dream House By Us!</h2>
						<p class="hero-text">
							Discover your perfect home with our expert guidance and curated property listings. From cozy apartments to spacious estates, we’ll help you find a place that truly feels like yours. Start your journey today!
						</p>						
					</div>
					<button class="btn" onclick="ShowInquiry()">Make an Inquiry</button>
					<figure class="hero-banner">
						<img src="./Assets/Images/Amaresa Marilao.png" alt="Amaresa Marilao" class="w-100">
					</figure>
				</div>
			</section>
			<!-- ABOUT SECTION -->
			<section class="about" id="about">
			        <figure class="about-banner">
		            	<img src="./assets/images/Amaresa about us .png" alt="House interior">
		        	</figure>
				<div class="container"> 
					<div class="about-content"> 

						<p class="section-subtitle"> About Us! </p>
						<h2 class="h2 section-title"> The Faces Behind Your Dream Home</h2>
						<p class="about-text">
							We’re more than real estate experts; we’re your partners in finding and crafting the place you’ll love to call home.
						</p>
						<ul class="about-list"> 

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-house"></i>
								</div>

								<p class="about-item-text"> Smart Home Design </p>
							</li>							
					

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-leaf"></i>
								</div>

								<p class="about-item-text"> Beautiful Scene Around </p>
							</li>							

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-wine-bottle"></i>
								</div>

								<p class="about-item-text"> Exceptional Lifestyle </p>
							</li>

							<li class="about-item">
								<div class="about-item-icon">
									<i class="fa-solid fa-shield-halved"></i>
								</div>

								<p class="about-item-text"> Complete 24/7 Security </p>
							</li>
							
						</ul>
						<p class="callout">
							Discover the passion and expertise that make your home search special.
						</p>

						<a href="#service" class="btn"> Our service </a>
					</div>
				</div>
			</section>
			<!-- LOCATION SECTION -->
			<section class="location" id="location">
		
				<div class="container">
					<p class="section-subtitle"> Location </p>
					<h2 class="h2 section-title"> Family-Friendly Neighborhood </h2>
					<p class="locale-text"> Set in the welcoming community of Marilao Bulacan, our homes are ideal for families. Benefit from nearby parks, excellent schools, and a variety of family-friendly amenities. It’s a safe and nurturing environment where you can watch your family grow and thrive. </p>
				</div>
					<figure class="location-banner">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.5369070803104!2d121.01621617574362!3d14.795094872284029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b38da5906293%3A0x8b01e358c47a7685!2sAmaresa%20Marilao!5e0!3m2!1sen!2sph!4v1720251535908!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>						
					</figure>		
			</section>
			<!-- SERVICE SECTION -->
			<section class="service" id="service">
				<div class="container"> 

					<p class="section-subtitle"> Our Services </p>
					<h2 class="h2 section-title"> Our Main Focus </h2>

					<ul class="service-list">
						<li>
							<div class="service-card"> 
								<div class="card-icon">
									<img src="./Assets/Images/Drop-shot-buy.jpg" alt="service icon">
								</div>

								<h3 class="h3 card-title">
									<!-- MAKE IT BUTTON TO INQUIRY -->
									<button onclick="ShowInquiry()"> Buy a Home </button> 
								</h3>
								<p class="card-text">
									Your dream home awaits! Whether you’re looking for a cozy starter home or your forever dream house, our expert team is here to turn your vision into reality. We offer a diverse selection of homes and personalized assistance to help you find a perfect fit. Let’s embark on this exciting journey together!
								</p>

								<a href="#property" class="card-link"> 
									<span>Find a home</span>
									<i class="fa-solid fa-arrow-right-long"></i>
								</a>								
							</div>
				
						</li>						

					</ul>


				</div>
			</section>
			<!-- PROPERTY SECTION -->
			<section class="property" id ="property">
				<div class="container"> 
					<p class="section-subtitle"> Properties </p>
					<h2 class="h2 section-title"> Featured Listing </h2>

			
					<ul class="property-features">

						<li class="property-features-card">
							<figure>
								<img src="./Assets/Images/Alexandria/Alexandria Exterior.png" alt="Interior features" /> 
									
							</figure>
						
						</li>

					</ul>
			

				<!-- PHP GOES HERE IMAGES & DETAILS CAME FROM DATABASE -->
				<div class="property-card-wrapper">
					<div class="property-card-container">

						<figure class="property-image">
							<span class="property-featured"> featured </span>
							<img src="./Assets/Images/Alexandria/Alexandria Exterior.png" alt="Interior Image">
						</figure>

						<div class="property-card-content">
							<h3 class="h3 card-title"> Alexandria </h3>
							<div class="property-card-items-wrapper">
								<div class="property-card-items">
									<i class="fa-regular fa-credit-card"></i>
									<hr/>
									<p class="card-item-display"> 24214124</p>	
								</div>								

								<div class="property-card-items">
									<i class="fa-solid fa-bed"></i>
									<hr/>
									<p class="card-item-display"> 1</p>	
								</div>								

								<div class="property-card-items">
									<i class="fa-solid fa-bath"></i>
									<hr/>
									<p class="card-item-display"> 2</p>	
								</div>								

								<div class="property-card-items">
									<i class="fa-solid fa-chart-area"></i>
									<hr/>
									<p class="card-item-display">123sqm</p>	
								</div>
							</div>
							<div class="property-card-button">
								<button class="btn" onclick="ShowDetails()">View More</button>
								<button class="btn" onclick="ShowInquiry()">Make an Inquiry</button>
							</div>
						</div>						
					</div>
				</div> 
				</div>
			</section>
		</article>
	</main>




	<!-- DIALOG SECTIONS -->
	<section class="Dialogs">
		<!-- DIALOGS GOES HERE -->
		<!-- FOR SIGN UP -->
		<dialog id="Signup-Modal" class="dialog">
			<button onclick="CloseSignup()" class="closebtn"><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form signup" enctype="multipart/form-data" action="./Assets/Php/Index.php">
					<div class="form-items">
						<input type="text" name="Firstname" placeholder="First Name" required>
						<input type="text" name="Lastname" placeholder="Last Name" required> 						
					</div>
					<input type="email" name="Email" placeholder="Email Address" required>
					<div class="form-items">
						
						<input type="phone" name="Phone" placeholder="Phone number" required>
						<input type="text" name="Address" placeholder="Address" required>
					</div>
					<div class="form-items">
						<input type="password" name="Password" placeholder="Password" required>
						<input type="password" name="Confirmpass" placeholder="Confirm Password" required> 	
					</div>	
					<input type="submit" name="Signin-btn" value="Sign up">		
				</form>
				<button onclick="ShowLogin()" class="lowerbuttons">Already have an account</button>
			</div>
		</dialog>		

		<!-- FOR LOGIN UP -->
		<dialog id="Login-Modal" class="dialog">
			<button onclick="CloseLogin()" class="closebtn"><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form login" enctype="multipart/form-data" action="./Assets/Php/Index.php">

					<input type="email" name="email" placeholder="Email Address" required>
					<input type="password" name="password" placeholder="Password" required>	
					<input type="submit" name="login-btn" value="Login">
				</form>
				<button onclick="ShowSignup()" class="lowerbuttons">Dont have account</button>				
			</div>
		</dialog>
		<!-- FOR INQUIRY -->
		<dialog id="Inquiry-Modal" class="dialog">
			<button onclick="CloseInquiry()" class="closebtn">X</button>	

			<div class="container">

				<form class="form Inquiry" method="POST" enctype="multipart/form-data" action="./Assets/Php/Index.php">
					<?php 

						$query = "SELECT *
						FROM USER;
						";
						$result = $conn->query($query);
						$row = $result->fetch_assoc();


						echo "
						<div class='form-items'>
							<input type='text' name='Firstname' placeholder='First Name' required>
							<input type='text' name='Lastname' placeholder='Last Name'  required>		
						</div>
						";
					
					?>
					<input type="number"  name="Phone" placeholder="Contact Number" required>
					<div class="form-items">
						<input type="text" name="Address" placeholder="Address" required>
						<input list="options" id="Role" name="Property" placeholder="Select Property" required>
					    <datalist id="options">
					        <option value="Kalya House">
					        <option value="Aria House">
					    </datalist>	
		 	
					</div>	
					<input type="email" name="Email" placeholder="Email Address" required>
					<input type="text" name="Payment" placeholder="Payment">

				    <div class="textarea-container">
				        <textarea id="message" rows="5" name="Message" placeholder="I'd like to inquire about this property..."></textarea>
				    </div>
						
					<div class="inquiry-buttons">
						<div id="panel">
							<span>requirements shows here</span>
						</div>
						<div id="requirements">Requirements</div>
						<button onclick="ShowSignup()">Send Inquiry</button>
						
					</div>
				</form>

			</div>
		</dialog>
	</section>
	<!-- FOOTERS -->
	<footer class="footer">
		<div class="footer-top">
			<ul class="footer-list">
				<li>
					<figure class="footer-top-list-logo">
						<img src="./Assets/Images/Amaresa-Logo.png">
					</figure>
				</li>


			</ul>				

			<ul class="footer-list help">
				<h3 class="h3 list-title"> Get Help </h3>
				<li><a href="#"> Payment Process </a></li>
				<li><a href="#"> Pending Process </a></li>

			</ul>					

			<ul class="footer-list company">
				<h3 class="h3 list-title">	Company </h3>
				<li><a href="#"> About us </a></li>
				<li><a href="#"> Service </a></li>
				<li><a href="#"> Privacy Policy </a></li>
			

			</ul>					

			<ul class="footer-list social">
				<h3 class="h3 list-title"> Follow us </h3>
				<li>
					<a href="#" class="list-item"> 
						<i class="fa-brands fa-facebook"></i>
						<span>Facebook </span>
					 </a>
				</li>				

				<li>
					<a href="#" class="list-item"> 
						<i class="fa-brands fa-instagram"></i>
						<span>Instagram </span>
					 </a>
				</li>				

				<li>
					<a href="#" class="list-item"> 
						<i class="fa-brands fa-x-twitter"></i>
						<span>Twitter </span>
					 </a>
				</li>				

				<li>
					<a href="#" class="list-item"> 
						<i class="fa-brands fa-linkedin"></i>
						<span>LinkIn </span>
					 </a>
				</li>


			</ul>			

			<ul class="footer-list Developer">
				<h3 class="h3 list-title"> Developer </h3>
				<li><a href="#"> FAQ </a></li>
				<li><a href="#"> Payment Process </a></li>
				<li><a href="#"> Pending Process </a></li>

			</ul>		
		</div>		

		<div class="footer-bottom">
			<div class="footer-bottom-card">
				<figure class="card-logo">
					<img src="./Assets/Images/RedOak.png" alt="Partnership">
				</figure>

				<div class="card-description">
					<h3 class="h3 card-title">RED OAK PROPERTIES, INC. </h3>
					<p class="card-subtitle"> 
						We are a real estate development company established in 2010 with a vision to become a significant player in the mid-end Philippine housing industry. We aim to develop quality and value-added communities that exceed our clients’ expectations and enhance the quality of their lives.
					</p>
				</div>
			</div>			

			<div class="footer-bottom-card">
				<figure class="card-logo">
					<img src="./Assets/Images/RedOak.png" alt="Partnership">
				</figure>

				<div class="card-description">
					<h3 class="h3 card-title">RED OAK PROPERTIES, INC. </h3>
					<p class="card-subtitle"> 
						We are a real estate development company established in 2010 with a vision to become a significant player in the mid-end Philippine housing industry. We aim to develop quality and value-added communities that exceed our clients’ expectations and enhance the quality of their lives.
					</p>
				</div>
			</div>			

			<div class="footer-bottom-card">
				<figure class="card-logo">
					<img src="./Assets/Images/RedOak.png" alt="Partnership">
				</figure>

				<div class="card-description">
					<h3 class="h3 card-title">RED OAK PROPERTIES, INC. </h3>
					<p class="card-subtitle"> 
						We are a real estate development company established in 2010 with a vision to become a significant player in the mid-end Philippine housing industry. We aim to develop quality and value-added communities that exceed our clients’ expectations and enhance the quality of their lives.
					</p>
				</div>
			</div>
		</div>

		<div class="terms">
			<button > <span>Terms of Service</span></button>
			<button >Privacy Polocy</button>
		</div>
	</footer>


	<!-- Custom Js Link -->
	<script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
	<!-- Fontawesome Link -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
	<!-- Swiper JS -->
	<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
</body>
</html>