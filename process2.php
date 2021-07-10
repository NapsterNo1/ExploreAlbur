<?php
	session_start();
	
	$username = "";
	$email = "";
	$error = array();
	
	//connect to the database

	mysql_connect("localhost","root","") or die("not connected");
 	mysql_select_db("albursite") or die ("no db found");

 	//if the register button is clicked
	if (isset($_POST['register-btn'])){
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$password = mysql_real_escape_string($_POST['password']);
		$password2 = mysql_real_escape_string($_POST['password2']);

		//ensure that form fields are filled properly
		if(empty($username)){
			array_push($error, "Username is required"); //add error to errors array
		}

		if(empty($email)){
			array_push($error, "Email is required");
		}

		if(empty($password)){
			array_push($error, "Password is required");
		}

		if ($password != $password2) {
			array_push($error, "The two passwords do not match");
		}

		//if there are no errors, save user to database
		if (count($error) == 0){
			$query = "insert into admin(Username, Email, Password) values ('$username', '$email', '$password')";
 		mysql_query($query);
 		$_SESSION['username'] = $username;
 		$_SESSION['success'] = "You are now Logged in";
 		header ('Location: index2.php'); //redirect to main page
 	
		}

	}

	

	//log user in from login page

	if (isset($_POST['Login'])){
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);

		//ensure that form fields are filled properly
		if(empty($username)){
			array_push($error, "Username is required"); //add error to errors array
		}

		if(empty($password)){
			array_push($error, "Password is required");
		}

		if (count($error) == 0){
			$query = "SELECT * FROM admin WHERE Username= '$username' AND Password= '$password'";
			$result = mysql_query($query);
			if (mysql_num_rows($result) == 1){
				// log user in
				$_SESSION['username'] = $username;
 				$_SESSION['success'] = "You are now Logged in";
 				header ('Location: index2.php'); //redirect to main page

			}else{
				array_push($error, "Wrong Username/Password Combination");
			}
		}
	}
