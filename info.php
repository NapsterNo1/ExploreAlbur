<?php

include ('process.php');

?>

<?php

if(isset($_POST['checkout'])){

    $conn =  mysqli_connect('localhost', 'root', '', 'albursite');

    $firstname = $_POST['firstname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];


    $sql = "INSERT INTO blog(name, email, comment) VALUES ('$firstname','$email','$comment')";
    $query= mysqli_query($conn, $sql);  
}
?>


<html>
	<head>
		<meta name= "viewport" content="width=device-width, initial-scale=1.0">
		<title>Municipality Website Design</title>
		<link rel= "stylesheet" href= "info.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href= "https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
	</head>
	<body>
		<div class = "smooth" >
		<section class="sub-header" id = "info">
			<nav>
				<header>
				<div class = "logo">
					<img src= "images/logo.png">
					<div class="nav-links" id = "navLinks">
				<ul>
					<li><a href = "index.php">Home</a></li>
					<li><a href = "about.html">About</a></li>
					<li><a href = "blog.php">Spots & Products</a></li>
					<li><a href = "#info">Blog</a></li>
					<li><a href = "contact.php">Contact Us</a></li>				
				</ul> 
				</div>
			</div>
			</header>

				<i class="fa fa-bars" onclick="showMenu()"></i>
			</nav>

			<div class = "text-box">
				<h1> Blog </h1>
			</div>
		</section>

		<section class= "blog-content">
			<div class= "row">
				<div class="blog-left">
					<iframe width="1200" height="450" src="https://www.youtube.com/embed/UahC5PvLHy8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					<br>
					<h2> History </h2>
					<br>
					<j><h5>Alburquerque is located in the southwestern part of Bohol, about 12 kilometers from Tagbilaran. It was formerly a barangay named Looc, under the municipality of Baclayon. During the Spanish Regime, Looc was a progressive settlement since it was situated near the coast and it had a sheltered cove suitable for berthing sea crafts. At that time, travel around Bohol was done by the sea and not inland. The place was also “in demand” for it was the breeding place of anchovies or what the locals call “bolinaw”</h5>
					<br>
					<h5>Being far from the Poblacion of Baclayon, the people found it difficult to attend Holy Masses during Sundays as well as other religious activities. In the long run, the people thought of constructing their own chapel and have a priest from Baclayon to come over to serve the people.</h5>
					<br>
					<h5>A parishioner of Looc, Lady Mariona Irag, a prominent lady in the community assumed the mantle of leadership for the construction of the chapel. In 1842, she requested the Parish Priest of Baclayon, Fr. Pedro de la Encarnacion, to supervise the construction of the said chapel which is to be built by the people.</h5>
					<br>
					<h5>The place of Looc was also known as “Segunto” and its first barangay captain was Pedro Jala who lived in the Sitio of Carnago. Eventually Carnago was separated from the town and established into a town called Sikatuna, in honor of the brave chieftain, Datu Sikatuna, who made a blood compact with the Spanish Conquistador, Miguel Lopez de Legaspi.</h5>
					<br>
					<h5>Barangay Segunto grew until the time when the government officials deemed it proper to separate it from the town of Baclayon. Finally on June 9, 1868, Gov. General Jose de la Gandara, issued the decree establishing the new town of Alburquerque in its civil jurisdiction.</h5>
					<br>
					<h5>The town’s name was changed by the Spanish authorities to Alburquerque in honor of Alfonso Alburquerque, the famous Portuguese seafarer and conqueror of Malaca, Sumatra. Alburquerque is also a name of a town in the province of Badajoz, region of Extremadura, Spain. Likewise, a place in the ancient town of Mexico, once a colony of Spain, was named Alburquerque for many years.</h5>
					<br>
					<h5>The name Alburquerque (from either albus querqus, meaning "white evergreen" in Latin; or Abu-al-Qurq, meaning "country of cork oaks" in Arabic) is very widespread in all of the Americas and the Philippines. Now changed to Alburquerque, the inhabitants are called Alburanons or Alburquerqueños in Spanish.</h5>
					<br>
					<h5>The name Alburquerque (from either albus querqus, meaning "white evergreen" in Latin; or Abu-al-Qurq, meaning "country of cork oaks" in Arabic) is very widespread in all of the Americas and the Philippines. Now changed to Alburquerque, the inhabitants are called Alburanons or Alburquerqueños in Spanish.</h5>
					<br>

					<h5>As to its religious jurisdiction, the Fr. Provincial of the Recollects approved the creation of the town on November 14, 1868. Seven months later, on June 18, 1869, the Bishop of Cebu made Alburquerque a separate Diocesan parish advocated to Sta. Monica. A week after, exactly on June 26, 1869, the first curate priest of Alburquerque, Fr. Tomas Hernandez assumed his post.</h5></j>


					<div class="comment-box">
						<div class="col-md-6 col-md-offset-3">
               <b><center><?php echo isset($msg)?$msg:''; ?></center></div>
						<h3>Leave a Comment</h3>
						<form class="comment-form" method= "POST">
							<input type="text" name="firstname" placeholder="Enter Name" required>
							<input type="email" name="email" placeholder="Enter Email" required>
							<textarea rows="5" name="comment" placeholder="Your Comment" required></textarea>
							<button type="submit" name= "checkout" class="hero-btn red btn"> POST COMMENT</button>
						</form>
				</div>
			</div>
				<div class="blog-right">
				
				</div>
		</section>
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br>
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