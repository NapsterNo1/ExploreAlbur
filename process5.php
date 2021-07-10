<?php
	
	$service = "";
	$therapist = "";
	$price = "";
	$error = array();
	
	//connect to the database

	mysql_connect("localhost","root","") or die("not connected");
 	mysql_select_db("albursite") or die ("no db found");

 		//fetch data
 	  $sql = 'SELECT * FROM blog';
  	 $result = mysql_query($sql);


	

	//logout

	if (isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('Location: admin.php');
	}

?>