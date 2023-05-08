<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Royal Colleg Management System</title>
	<link rel="stylesheet" type="text/css" href="back.css">

</head>

<body>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<section id="back">
		<header class="head">
			<img src="download_1.jpeg" class="logo">
			<div class="back-text">
				<h6>Royal College Management System </h6>
				<p>Take More Knowldge</p>
			</div>
		</header>
	</section>
	<div class="side">
		<nav>
			<ul>
				<li><a class="active" href="home.php">Home </a></li>
				<li><a href="">About <ion-icon name="chevron-down-outline"></ion-icon></a>
					<ul>
						<li><a href="background.php">Background of RC</a></li>
						<li><a href="strategic.php">Strategic-plan</a></li>
						
					</ul>
				</li>
				<li><a href="contact.php">Contact-us</a></li>
				<li><a href="ref.php">references</a></li>
				<li><a href="fill.php">register here</a></li>
				<li><a href="admin.php">Admin</a></li>
				<li><a href="#">Login</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="Admin.php"> Admin login</a></li>
                </li>
			</ul>
		</nav>
	</div>
	<section class="bit">
		<div id="slider">
			<figure>
				<img src="stud.PNG" alt="" />
				<img src="book1.JPG" alt="" />
				<img src="book3.JPG" alt="" />
				<img src="book4.JPG" alt="" />
				<img src="book5.JPG" alt="" />
			</figure>
		</div>
	</section>
	<section id="footer">
		<div class="title-text">

			<p>Visit Our Web Site Today</p>
			
		</div>
		<div class="footer-row">
			<div class="footer-left">
				<h1>Quick Links</h1>
				<ul>
					<li><a href="#">Announcement</a></li>
					<li><a href="#">Libraries</a></li>
				

				</ul>
			</div>
			<div class="footer-center">
				<h1>Program</h1>
				<ul>
					<li><a href="grad.php">Graduat</a></li>
					<li><a href="underg.php">Undergraduat</a></li>
				</ul>
			</div>

			<div class="footer-right">
				<h1>Important Links</h1>

				<ul>
					<li><a href="privacy.php">privacy and policy</a></li>
					
					
				</ul>
			</div>
			<div class="links">
				<h1>Social Links</h1>
				<ul>
            <li><a href="www.facebook.com"><ion-icon name="logo-facebook"></ion-icon></a></li>
			<li><a href="www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a></li>
			<li><a href="natyworku27@gmail.com"><ion-icon name="mail-outline"></ion-icon></a></li>
		     <li><a href="www.youtub.com"><ion-icon name="logo-youtube"></ion-icon></a></li>
		 </ul>
		</div>
		</div>
		<div class="copy">
			Copyright&copy2022-Natnael Worku
		</div>
	</section>

</body>

</html>