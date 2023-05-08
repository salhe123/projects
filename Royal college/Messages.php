<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
	<link rel="stylesheet" href="messages.css">
	<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>
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
					<li><a href="student.php">Students_Info</a></li>
			<li><a href="Messages.php" class="Active">Messages</a></li>
			<li><a href="Add_admin.php">Add Admin</a></li>
			 <li><a href="home.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	<div id="rightcontent" style="position:absolute; top:3%;">
	<div class="alert alert-info"><center><h2>Messages</h2></center></div>
	<div class="alert alert-info">
		<table class="table" style=" background-color:skyblue; border:2px solid black;">
			<thead>
			<tr style="font-size:20px; width: 200px;">
				<th style="width:300px; text-align:center;">name</th>
				<th style="width:400px; text-align:center;">sender</th>
				<th style="width:500px; text-align:center;"> subject</th>
				<th style="width:500px; text-align:center;"> message</th>
			</tr>
			</thead>
			<?php
			$conn=mysqli_connect('localhost','root','','contactus');
				$query = $conn->query("SELECT * FROM `contactusinfo`") or die(mysqli_error());
				while($fetch = $query->fetch_array())
					{
			?>
			<tr>
				<td style="text-align:center; background-color:#34495e;border-bottom:2px solid black;color:white"><?php echo $fetch['name'];?></td>
				<td style="text-align:center;background-color:#34495e; border-bottom:2px solid black;color:white"><?php echo $fetch['sender'];?></td>
				<td style="text-align:center;background-color:#34495e; border-bottom:2px solid black;color:white"><?php echo $fetch['subject'];?></td>
				<td style="text-align:center;background-color:#34495e; border-bottom:2px solid black;color:white"><?php echo $fetch['message']?></td>
			</tr>
			<?php
				}
			?>
		</table>
	</div>

</div>
</section>
	<section id="footer">
		<div class="title-text">

			<p>Visit Our Web Site Today</p>
			<h1></h1>
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
					<li><a href="#">Selectwebsite</a></li>
					
					
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