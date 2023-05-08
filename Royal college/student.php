<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
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
					<li><a href="student.php" class="Active">Students_Info</a></li>
			<li><a href="Messages.php">Messages</a></li>
			<li><a href="Add_admin.php">Add Admin</a></li>
			 <li><a href="home.php">Logout</a></li>
			</ul>
		</nav>
	</div>

	<div id="rightcontent" style="position:absolute; top:10%;">
		<div class="alert alert-info"><center><h2>Student Information</h2></center></div>
		<div class="alert alert-info">
			<table class="table" style=" background-color: black; border:2px solid black;">
				<thead>
				<tr style="font-size:20px; width: 200px; background-color:skyblue; color:white;">
					
					<th style="width:100px; text-align:center;">Email</th>
					<th style="width:100px; text-align:center;">Firstname</th>
					<th style="width:100px; text-align:center;">Secondname</th>
					<th style="width:100px; text-align:center;">Lastname</th>
					<th style="width:100px; text-align:center;"> Sex</th>
					<th style="width:100px; text-align:center;">Age</th>
					<th style="width:100px; text-align:center;">Birthdate</th>
					<th style="width:100px; text-align:center;">Month</th>
					<th style="width:100px; text-align:center;">year</th>
					<th style="width:300px; text-align:center;">password</th>
				</tr>
				</thead>
				<?php
				$conn=mysqli_connect('localhost','root','','royal_college');
					$query = $conn->query("SELECT * FROM `student_info`") or die(mysqli_error());
					while($fetch = $query->fetch_array())
						{
				?>
				<tr style="border-bottom:2px solid black;">
					<td style="text-align:center; background-color:#34495e; color:white"><?php echo $fetch['email'];?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Firstname'];?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Secondname'];?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Lastname'];?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Sex']?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Age']?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Birthdate']?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['Month']?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['year']?></td>
					<td style="text-align:center;background-color:#34495e; color:white"><?php echo $fetch['password']?></td>
					

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