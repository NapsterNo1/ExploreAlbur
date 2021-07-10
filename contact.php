<?php

include ('process.php');

?>

<?php

if(isset($_POST['checkout'])){

    $conn =  mysqli_connect('localhost', 'root', '', 'albursite');

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $sql = "INSERT INTO contact(name, email, message) VALUES ('$firstname','$email','$message')";
    $query= mysqli_query($conn, $sql);  
}
?>


<html lang = "en" dir= "ltr">
	<head>
		<meta charset = "UTF-8">
		<meta name= "viewport" content="width=device-width, initial-scale=1.0">
		<title>Municipality Website Design</title>
		<link rel= "stylesheet" href= "css/contact.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	</head>
	<body>
		<div class = "smooth" >
		<section class="sub-header" id = "contact">
			<nav>
				<header>
				<div class = "logo">
					<img src= "images/logo.png">
					<div class="nav-links" id = "navLinks">
				<ul>
					<li><a href = "index.php">Home</a></li>
					<li><a href = "about.html">About</a></li>
					<li><a href = "blog.php">Spots & Products</a></li>
					<li><a href = "info.php">Blog</a></li>
					<li><a href = "#contact">Contact Us</a></li>				
				</ul> 
				</div>
			</div>
			</header>

				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>

			<div class = "text-box">
				<h1>Contact Us</h1>
			</div>
		</section>

		<section class= "blog-content">
			<div class= "row ">
				<div class="blog-left">
					<div class="location">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53840.98469016965!2d123.92730121719822!3d9.63070390779442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33aa4f9b179a4547%3A0xaa61d23dc84890e3!2sAlburquerque%2C%20Bohol!5e1!3m2!1sen!2sph!4v1623986717763!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
					</div>

					
			</div>
				<div class="blog-right">
				<h3> Municipality Stats</h3>
				<div>
					<span>Barangays</span>
					<span>11</span>
				</div>
				<div>
					<span>Elementary School Buildings</span>
					<span>11</span>
				</div>
				<div>
					<span>High School Building</span>
					<span>1</span>
				</div>
				<div>
					<span>Population</span>
					<span>10k+</span>
				</div>
				<div>
					<span>Households</span>
					<span>2k+</span>
				</div>
				</div>
		</section>

		<section class = "sec2">
			<form action=""  method= "POST">
			<div class = "contact-section">
				<div class = "outer-width"><br><br><br>
					<h1>Get in touch with us</h1>
					<input type="text" name = "firstname" class="nem" placeholder="Your Name">
					<input type="email" name = "email" class="email" placeholder="Your Email">
					<textarea  rows="1" name = "message" placeholder="Message" class = "message"></textarea>
					<button type = "submit" name= "checkout" >Get in touch</button>
				</div>
			</div>
		</form>
		</section>

			<div class = "footer"><br><br>
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
						<a href = "about.php#team2"><li>Team</li></a>
						<a href = "#team"><li>Officials</li></a>
						<a href = "services.php"><li>Blog</li></a>
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