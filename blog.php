<?php

include ('process.php');


?>

<?php

if(isset($_POST['checkout'])){

    $conn =  mysqli_connect('localhost', 'root', '', 'albursite');

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO spot(name, email, comment) VALUES ('$firstname','$email','$comment')";
    $query= mysqli_query($conn, $sql);  
}
?>



<html lang = "en" dir= "ltr">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content= "width=device-width, initial-scale=1.0">
	<title>Home Pages</title>
	<link rel="stylesheet" type="text/css" href="css/blog.css" />	
</head>
	<body>
		<div class = "smooth">
		<header>
				<div class = "logo">
					<img src= "images/logo.png">
					<div class="nav-links" id = "navLinks">
				<ul>
					<li><a href = "index.php">Home</a></li>
					<li><a href = "about.html">About</a></li>
					<li><a href = "#blog"> Spots & Products </a></li>
					<li><a href = "info.php">Blog</a></li>
					<li><a href = "contact.php">Contact Us</a></li>	
				</ul>
				</div> 
			</div>
			</header>

	<section id = "blog">
		<section class = "sec1"></section>
</section>

	<section id = "about">
			<section class = "sec1">
				<div class="about-section">
					<div class="inner-width">
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>Albur also has exotic marine sites. There is a Municipal Marine Sanctuary at barangay Sta. Filomena offering a beach and a Mangrove Protected Area.
										Santa Fe beach  is a. Favorite white-sand beach fronting the open sea of Mindanao. It is located about 1.5 km from the poblacion of Albuquerque.
										The sandy white beach is provided with cottages for rent and the cool, crystal clear blue water is a sure respite after a hot and tiring day. The verdant mangrove at the sides, home to various marine species plus shore birds, reptiles and insects, incessantly lures nature lovers to its hidden treasures. Bamboo rafts are provided for the visitors who are interested in marine ecology.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>


		<section class = "secText">
			<div class="wrapper1">

		<h1>Santa Felomina Beach</h1>
		
		</div>
		</section>

		<section id = "about">
			<section class = "sec2">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>Bohol is known all over the country because of its calamay in coconut shell. This calamay is still made traditionally in Albuquerque, Bohol. They prefer to use coconut shell to preserve it's original taste. Local visitors and tourist crave for it's sticky and tasty flavor. Albur calamay making is known as the primary source of income that give financial support to people of Albur. The calamay is the best "Pasalubong" or home coming gift you can give to your family and friend.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class = "sec2"></section>
		<section class = "secText">
			<div class="wrapper2">
		<h1>Calamay</h1>
		</div>
		</section>

		<section id = "about">
			<section class = "sec3">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>The town has only one major river basin, the Tagbuane river, situated on the eastern part of Albur although it has several small rivers and creeks that mostly drain into the Bohol Sea. Trekking thru rolling and steep terrain, verdant grasslands and traversing the Tagbuane River is a wholesome undertaking enjoyed at most by foreigners.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class = "sec3"></section>
		<section class = "secText">
			<div class="wrapper3">
		<h1>Tagbuane River</h1>
		</div>
		</section>

		<section id = "about">
			<section class = "sec4">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>Another attraction in Albur is the Sta. Monica Stone Church and convent. The beginning of a new church was launched in 1842 although it was only 27 years later, in June 18, 1869, when it was made a separate Diocesan parish. Deeply religious, the people of Albur celebrates annually the feast of Sta. Monica every 4th of May. The feast day is usually enlivened by discos, competitions and sports tournaments.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class = "sec4"></section>
		<section class = "secText">
			<div class="wrapper4">
		<h1>Santa Monica Church</h1>
		</div>
		</section>

		<section id = "about">
			<section class = "sec5">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>Asin Tibuok was  Given as rich Bolonano identity. In the course of Bohol’s history, salt was one of the most important trade products since the 16th century.  It was used to barter rice from the uplands. Since then, salt has become one of the island’s products, with each town having different styles of making salt. Out of the four, only Alburqueque continues the salt-making industry because of its long process and low income return.
									Asin Tibuok or “whole salt” has a fine texture because of the very small granules. It has a mild, smoky, fruity taste, and is presented in a clay pot. It is pinkish in color due to intense heat but when washed with water, it turns white. It is described as “the purest and cleanest artisanal sea-salt.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class = "sec5"></section>
		<section class = "secText">
			<div class="wrapper5">
			<h1>Asin Tibook</h1>
		</div>
		</section>

		<section id = "about">
			<section class = "sec6">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>A scenic and enchanting boardwalk traversing through one of the remaining mangrove forests that Bohol has Ben blessed with sounds a good idea that could draw in tourists. It's crystal clear blue water and a white sand beach will surely draw you at this destination.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>
		<section class = "sec6"></section>
		<section class = "secText">
			<div class="wrapper6">
			<h1>Tagbuane Boardwalk</h1>
		</div>
		</section>

		<section id = "about">
			<section class = "sec7">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>Adding to the ease of travel from port to other parts of Bohol, Albur has its own local port situated in barangay Western Poblacion equipped with proper lighting and needed gadgets and very well maintained. The port serves local fishermen as well as other fishing vessels. Cargo vessels often drop by to transport equipments and raw materials from other neighboring provinces.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class = "sec7"></section>
		<section class = "secText">
			<div class="wrapper7">
			<h1>Albur Port</h1>
		</div>
		</section>

		<section id = "about">
			<section class = "sec8">
				<div class="about-section">
					<div class="inner-width"><br><br><br><br><br><br>
						<div class="border"></div>
						<div class="about-section-row">
							<div class="about-section-col">
								<div class="about">
									<p>The town is a favorite tourist destination because of its many natural wonders. It once boast of having one of the longest and heaviest Python in captivity – Prony. Due to political reasons, Prony though was transferred to the Municipality of Baclayon and later died.
									</p>
								<div class="border"></div>
								</div>
							</div>
		
						</div>
					</div>
				</div>
			</section>
		</section>

		<section class = "sec8"></section>
		<section class = "secText">
			<div class="wrapper8">
			<h1>Longest and Heaviest Snake in Captivity</h1>
		</div>
		</section>

		<hr></hr>
<section class = "sec9">
	<div class="col-md-6 col-md-offset-3">
               <b><center><?php echo isset($msg)?$msg:''; ?></center></div>
			<form action="" method= "POST">
			<div class = "contact-section">
				<div class = "outer-width"><br><br><br>
					<h1>Leave Your Comments & Experience</h1>
					<input type="text" name="firstname" class="nem" placeholder="Your Name" required>
					<input type="text" name="email" class="email" placeholder="Your Email" required>
					<textarea  rows="1" name="comment" placeholder="Review" class = "message"></textarea>
					<button type = "submit" name= "checkout" required>Post Comment</button>
				</div>
			</div>
		</form>
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
						<a href = "about.php#team2"><li>Team</li></a>
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
	</div>
	</body>
</html>

