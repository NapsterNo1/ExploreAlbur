<?php
session_start();
include ('process4.php');

?>
<html>
	<head>
		<meta name= "viewport" content="width=device-width, initial-scale=1.0">
		<title>Municipality Website Design</title>
		<link rel= "stylesheet" href= "style.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	</head>
	<body>
		<div class = "smooth" >
		<section class="header" id = "Home">
			<nav>
				<header>
				<div class = "logo">
					<img src= "images/logo.png">
					<div class="nav-links" id = "navLinks">
				<ul>
					<li><a href = "#Home">Home</a></li>
					<li><a href = "about.html">About</a></li>
					<li><a href = "blog.php">Spots & Products</a></li>
					<li><a href = "info.php">Blog</a></li>
					<li><a href = "contact.php">Contact Us</a></li>				
				</ul> 
				</div>
			</div>
			</header>

				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>

			<div class = "text-box">
				<h1> Let's Explore Alburquerque</h1>
				<p>We pride ourselves on our high quality work and attention to detail.</p>
			</div>
		</section>

		<section class= "course">
			<h1>An Abundance We Offer</h1>
			<p>Experience the Abundance of Alburquerque</p>

			<div class="row">
				<div class="course-col">
					<h3>Unique Products</h3>
					<p>Largely visited by tourists are native industries of calamay making, pottery making
						weaving of rafia using locally made loom, weaving of bure placemats, fan weaving, 
						basket and broom making, salt making,and other micro loca industries, Albur then is considered as one of the progressive coastal towns in the province of Bohol.</p>
				</div>

				<div class="course-col">
					<h3>Tourists Spots</h3>
					<p>The Municipality of Alburquerque has natural wonders and micro local industries like Marine Sanctuary, 
						which is abundant of fish and stocks and coral reefs, Mangrove protected areas and white sand beaches,
						newly discovered cave, and a one and only river of the town.</p>
				</div>

				<div class="course-col">
					<h3>Historical Heritage</h3>
					<p>Albur's Historical Heritage is very rich. It was once a part of Baclayon. It is
					named after Alfonso Alburquerque, the famous Portuguese seafearer and conqueror of
					Malaca, Sumatra. The town was estabished on June 9, 1968.</p>
				</div>

			</div>
		</section>

		<section class= "campus">
			<h1>Our Public Sectors</h1>
			<p>Alburquerque's Trademark Buildings</p>

			<div class="row">
				<div class="campus-col">
					<img src="images/london.png">
					<div class="layer">
						<h3>Municipal Hall</h3>
					</div>
				</div>
		
	
				<div class="campus-col">
					<img src="images/newyork.png">
					<div class="layer">
						<h3>Public Market</h3>
					</div>
				</div>
			

				<div class="campus-col">
					<img src="images/washington.png">
					<div class="layer">
						<h3>Public High School</h3>
					</div>
				</div>
		
	</div>
		</section>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<section class= "facilities">
			<h1>Our Public Officials</h1>
			<p>Alburquerque's Municipal Leaders</p>
			<div class="row">
				<div class="facilities-col">
					<img src="images/officials1.jpg">
					<h3>Don Ritchie P. Buates</h3>
					<p>A Mayor and harworking person who is passionate on his work.</p>
				</div>

				<div class="facilities-col">
					<img src="images/officials2.jpg">
					<h3>Alexis Fernan Simeon</h3>
					<p>A Vice-Mayor and enthusiastic pro-active person to his service he is very approachable.</p>
				</div>

				<div class="facilities-col">
					<img src="images/officials3.jpg">
					<h3>Kien Alphe Garsuta</h3>
					<p>An SK Federated lovely and passionate person who is very active, accurate 
						to his service and he believes in saying that "We rise by lifting others!".</p>
				</div>
			</div>

		</section>
<br><br><br><br><br><br><br>
		<section class= "testimonials">
			<h1>What Our Visitors Says</h1>
				<p>Our Lovely Visitor's Comments and Experience</p>

			<div class="row">
				<div class="testimonial-col">
					<img src="images/user1.jpg">
					<div>
						<p>Wow! What a Great Experience, Loving the Beautiful White Sand Beaches and affordable cottages,
						hospitable people and loving the foods. Greetings From US!.</p>
					<h3>Gerica Mae Salupan</h3>
					</div>
				</div>

				<div class="testimonial-col">
					<img src="images/user2.jpg">
					<div>
						<p>It's first time in my life, trying the delicacy of Albur's Calamay, very sweet and unique, also
						 purchase the native Asin Tibook for Souvenir. Greetings From Canada!.</p>
					<h3>David Byer</h3>
					</div>
				</div>
			</div>

		</section>

		<section class= "cta"><br><br><br><br><br>
			<h1>Visit our Historical Heritage<br> Located only at the Town</h1>
			<a href = "info.php" class= "hero-btn">Visit Us To Know More</a>	
		</section>

		
			<div class = "footer">
			<div class = "footer-content">
				<div class = "footer-section about">
					<h1 class = "logo-text"><span>It's More Fun</span>@Alburquerque</h1>
					<p>Our goal is to provide a world-class Fun and Thrill Experience,
					 for both our guests and tourists; a place where beauty, comfort,
					knowledge, and personalized attention, combine to create a totally
					memorable and rejuvenating experience.</p>
					
				</div>
				<div class = "footer-section links">
						 <h2>Quick Links</h2>
					<ul>
						<a href = "#register"><li>Events</li></a>
						<a href = ""><li>Team</li></a>
						<a href = "#team"><li>Officials</li></a>
						<a href = "blog.php"><li>Blog</li></a>
					</ul> &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp 
				</div>
				<div class = "footer-section contact-form">
					<h2>Have a Questions?</h2>
				<div class = "contact">
						<span><i class="fas fa-phone"></i> Location: 6302 Alburquerque, Bohol, Philippines</span><br>
						<span><i class="fas fa-phone"></i> Contact Us @ 09086946604 <br> Email Us @ teamalbur@gmail.com</span><br>
						<span><i class="fas fa-envelope"></i> Check Us @ itsmorefuninalbur.com</span>
					</div>
				</div>
			</div>
			<div class = "footer-bottom">
				&copy; itsmorefuninalbur.com | Designed by Team Albur
			</div>
		</div>
		
		
		<div class = "animation-area">
				<div class = "box-area">
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</div>
			</div>
			</div>

<!-------JavaScript for Toggle Menu------->

		<script>

			var navLinks = document.getElementById("navLinks"); 

			function showMenu(){
				navLinks.style.right = "0";
			}
			function hideMenu(){
				navLinks.style.right = "-200px";
			}

		</script>

	</body>
</html>