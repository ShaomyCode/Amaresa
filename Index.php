<?php
include './Assets/Php/Connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AMARESA - Find your dream house</title>
	<!-- Link: Custom -->
	<link rel="stylesheet" type="text/css" href="./Assets/Css/Index.css?v=<?php echo time(); ?>">
	<!-- Link: Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic\.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<!-- Link: Web Icon -->
	<link rel="website icon" type="png" href="./Assets/Images/Icon.png">
	<!-- Script: JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>		
</head>
<body>
	<!-- Section: Header -->
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
	<!-- Section: Main Contents -->
	<main>
		<article>
			<!-- Section: Hero -->
			<section class="hero" id="home">
				<div class="container">
					<div class="hero-logo">
						<img src="./Assets/Images/Amaresa-Logo.png" alt="Amaresa Logo" >
					</div>
					<h2 class="h1 hero-title">Find Your Dream House By Us!</h2>
					<p class="hero-text">
						Discover your perfect home with our expert guidance and curated property listings. From cozy apartments to spacious estates, we’ll help you find a place that truly feels like yours. Start your journey today!
					</p>						
				
				<button class="btn" onclick="ShowInquiry()">Make an Inquiry</button>
				<figure class="hero-banner">
					<img src="./Assets/Images/Amaresa Marilao.png" alt="Amaresa Marilao" class="w-100">
				</figure>
				</div>
			</section>
			<!-- Section: About -->
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
			<!-- Section: Locale -->
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
			<!-- Section: Service -->
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
			<!-- Section: Property -->
			<section class="property" id ="property">
				<div class="container"> 
					<p class="section-subtitle"> Properties </p>
					<h2 class="h2 section-title"> Featured Listing </h2>
					<p class="locale-text"> Step into the finest homes available right now. Our featured listings offer a blend of exceptional design, prime locations, and unparalleled value. Don’t miss out on these standout properties </p>
				<!--Section: Featured Card -->
				<section class="featuredcard" id = "card">
					<div class="card-container">

	    				<div class="card wallet">
		       				<div class="overlay"></div>
		           			<div class="first-content">
		           			<div class="circle">
								<img src="./Assets/Images/Arya Prime/Arya Exterior.png" alt="Interior features" /> 
		       			 	</div>
		            		</div>
		            		<h1>Arya Prime</h1>
		            		<div class="second-content">
		                		<p><i class="fa-solid fa-house"></i> Two Storey</p>
		                		<p><i class="fa-solid fa-bed"></i>Three Bedroom</p>
		                		<p><i class="fa-solid fa-signs-post"></i>Two Bathroom</p>
		            		</div>
		            		<div class="third-content">
		            			<button onclick="ShowHouse()">
		            				<i class="fa-solid fa-expand"></i>
		            				<span>See more</span>
		            			</button>
		            		</div>
	    				</div>    				

	    						<div class="card wallet">
		       				<div class="overlay"></div>
		           			<div class="first-content">
		           			<div class="circle">
								<img src="./Assets/Images/Arya Prime/Arya Exterior.png" alt="Interior features" /> 
		       			 	</div>
		            		</div>
		            		<h1>Arya Prime</h1>
		            		<div class="second-content">
		                		<p><i class="fa-solid fa-house"></i> Two Storey</p>
		                		<p><i class="fa-solid fa-bed"></i>Three Bedroom</p>
		                		<p><i class="fa-solid fa-signs-post"></i>Two Bathroom</p>
		            		</div>
		            		<div class="third-content">
		            			<button onclick="ShowHouse()">
		            				<i class="fa-solid fa-expand"></i>
		            				<span>See more</span>
		            			</button>
		            		</div>
	    				</div>

	    			</div>
				</section>
				</div>
			</section>
			<section class="display">


			</section>
		</article>
	</main>
	<!-- Section: Dialogs -->
	<section class="Dialogs">
		<!-- Dialog: Sign up -->
		<dialog id="Signup-Modal" class="dialog">
			<button onclick="CloseSignup()" class="closebtn"><i class="fa-solid fa-x"></i></button>	
			<div class="container">
				<form  method="POST" class="form signup" enctype="multipart/form-data" action="./Assets/Php/Index.php"  autocomplete="on">
					<div class="form-items">
						<input type="text" name="Firstname" placeholder="First Name" required>
						<input type="text" name="Lastname" placeholder="Last Name" required> 						
					</div>
					<input type="email" name="Email" placeholder="Email Address" required>
					<div class="form-items">

						<input type="tel" maxlength="11" name="Phone" class="PhoneInput" id="phoneInput" placeholder="Contact Number" required autocomplete="off">	
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
		<!-- Dialog: Login  -->
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
		<!-- Dialog: Inquiry -->
		<dialog id="Inquiry-Modal" class="dialog">
			<button onclick="CloseInquiry()" class="closebtn">X</button>	

			<div class="container">

				<form class="form Inquiry" method="POST" enctype="multipart/form-data" action="./Assets/Php/Index.php" autocomplete="on">
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
					
					<input type="tel" maxlength="11" name="Phone"  class="PhoneInput" id="PhoneInput" placeholder="Contact Number" required autocomplete="off">		
						<div class="form-items">
							<input type="text" name="Address" placeholder="Address" required>
							<input list="options" id="Role" name="Property" placeholder="Select Property" required>
							<datalist id="options">
								<option value="Kalya House">
								<option value="Aria House">
							</datalist>	
						</div>	
							<input type="email" name="Email" placeholder="Email Address" required>
							<div class="textarea-container">
								<textarea id="message" rows="5" name="Message" placeholder="I'd like to inquire about this property..."></textarea>
							</div>


							<div class="form-items">

							</div>
							<div>
								<input type="checkbox" id="cbx2" onclick="ShowReservation()" style="display: none;"> 
								<label for="cbx2" class="check">
									<svg width="18px" height="18px" viewBox="0 0 18 18">
										<path d="M 1 9 L 1 9 c 0 -5 3 -8 8 -8 L 9 1 C 14 1 17 5 17 9 L 17 9 c 0 4 -4 8 -8 8 L 9 17 C 5 17 1 14 1 9 L 1 9 Z"></path>
										<polyline points="1 9 7 14 15 4"></polyline>
									</svg>
									Reservation Fee (optional)
								</label>


								<div class="payments" id="payments">
									<h3 class="h3 payment-title"> Gcash </h3>
									<img id="paymentImg" src="./Assets/Images/payment.png" >

									<div class="payment-upload" >
										<label for="file-upload" class="custom-file-upload btn">
											Upload Here
										</label>
										<input id="file-upload" type="file" name="file" accept="image/*">
									</div>

								</div>


								<script>
									const checkbox = document.getElementById('cbx2');
									const div = document.getElementById('payments');

									checkbox.addEventListener('change', function() {
										if (this.checked) {
											div.style.display = 'block'; 
										} else {
											div.style.display = 'none';
										}
									});
								</script>
							</div>
						</div>

						<div class="inquiry-buttons">
							<div id="panel">
								<span>requirements shows here</span>
							</div>
							<span id="requirements" class="btn">Requirements</span>
							<button type="submit" name="SentInquiry" class="btn">Send Inquiry</button>
						</div>
					</form>

				</div>
			</dialog>
			<!-- RESERVATION MODAL -->
			<dialog id="Reservation-Modal" class="dialog">
				<button onclick="CloseReservation()" class="closebtn">X</button>	
				<form>
					<div class="container">
						<button type="submit" name="SentInquiry">Send Inquiry</button>
					</div>
				</form>
			</dialog>
		</section>
		<!-- Dialog: House-Details -->
		<dialog  id="House-Modal" class="House-Modal">	
			<button onclick="CloseHouse()" class="closebtn"><i class="fa-solid fa-x"></i></button>		
			<!-- Section: Images -->
			<section class="Image-Container">
				<div class="Image-interior">
					<img src="./Assets/Images/Amara Expanded/Amara Exterior.png" class="items">
				</div>
				<div class="Image-highlights">
					<img src="./Assets/Images/Amara Expanded/Bedroom.jpeg" class="items">
					<img src="./Assets/Images/Amara Expanded/Dining and Kitchen Area.jpeg" class="items">
					<img src="./Assets/Images/Amara Expanded/Living Room.jpeg" class="items">
					<img src="./Assets/Images/Amara Expanded/Masters Bedroom.jpeg" class="items">
				</div>
			</section>	
			<!-- Section: Informations -->
			<section class="Informations-container">
				<!-- Div: Description -->
				<div class="Description-container">
					<h3 class="h3 description-title"> Description </h3>
					<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				</div>

				<!-- Div: Details -->
				<div class="Details-container">

					<h3 class="house-name">Amaresa House</h3>

					<div class="detail-items-container">
						<div class="detail-items">
							<i class="fa-solid fa-bed"></i>
							<hr/>
							<span>2</span>
						</div>				

						<div class="detail-items">
							<i class="fa-solid fa-bath"></i>
							<hr/>
							<span>2</span>
						</div>				

						<div class="detail-items">
							<i class="fa-solid fa-cube"></i>
							<hr/>
							<span>25sqft</span>
						</div>				

						<div class="detail-items">
							<i class="fa-solid fa-money-check-dollar"></i>
							<hr/>
							<span>2,244,255</span>
						</div>
					</div>

				</div>
			</section>
			<!-- Section: Highlights -->
			<section class="Highlights-container">
				<!-- Figure: Virtual -->
				<figure class="Virtual-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.5369070803104!2d121.01621617574362!3d14.795094872284029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b38da5906293%3A0x8b01e358c47a7685!2sAmaresa%20Marilao!5e0!3m2!1sen!2sph!4v1720251535908!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</figure>
				<!-- Figure: Map -->
				<figure class="Map-container">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3857.5369070803104!2d121.01621617574362!3d14.795094872284029!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b38da5906293%3A0x8b01e358c47a7685!2sAmaresa%20Marilao!5e0!3m2!1sen!2sph!4v1720251535908!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</figure>
				<div class="Float-button-container">
					<button onclick="ShowInquiry()" class="btn">
						<i class="fa-regular fa-handshake"></i> Make an Inquiry

					</button>
				</div>				
			</section>
		
		</dialog>
	<!-- Section: Footer -->
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
				<li><a href="#"> Inquire Process </a></li>
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
	<!-- Script: Custom -->
	<script src="./Assets/Js/script.js?v=<?php echo time(); ?>"></script>
	<script src="./Assets/Js/PhoneValidation.js?v=<?php echo time(); ?>"></script>
	<!-- Script: Fontawesome -->
	<script src="https://kit.fontawesome.com/83786b8894.js" crossorigin="anonymous"></script>
	
</body>
</html>