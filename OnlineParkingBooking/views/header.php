<?php
session_start();
//echo "welcom".$_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link rel="stylesheet" href="../css/styles.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

</head>
<body>

	<div class="wrapper">
		<div class="w1">

		<div class="container">
			
			<!-- header starts here -->

			<div class="header">
				<div class="logo">
					<img src="../images/carLogo.png" alt="">
				</div>

				<div class="nav">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="home.php">About</a></li>
						<li><a href="home.php">Contact</a></li>
					</ul>
					
				</div>

				<div class="nav-right">
					<ul>

						<li><i class="fas fa-sign-out-alt logout-icon"></i><a href="../index.php">Log out</a></li>
					</ul>
				</div>
				
			</div>
			<!-- header ends here -->