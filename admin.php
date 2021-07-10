<?php

include ('process2.php');

?>

<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name = "viewport" content= "width=device-width, initial-scale=1.0">
	<meta http-equiv="X_UA-Compatible" content="ie-edge">
	<title>Home Pages</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css" />	
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">	
</head>
	<body>
		<main>
			<div class = "background">
				<div class = "text">
					<h1>Admin Panel</h1>
					<p>>> <a href = "index.php"><span>Home</span></a></p>
				</div>
				<div class = "box">
					<form class = "form" method= "post" action= "admin.php">
						<!-- display validation error here -->
							<?php include ('errors2.php') ?>
						<input type = "text" name = "username" class="username" placeholder= "Username">
						<input type = "password" name= "password" class="password" placeholder= "Password">
							<input type = "submit" name = "Login" class = "Login" value="Login">
					</form>
				</div>
			</div>
		</main>
		
	</body>
</html>
