<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
	<link rel="stylesheet" href="add.css">
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
					<li><a href="student.php">Students-Info</a></li>
			<li><a href="Messages.php">Messages</a></li>
			<li><a href="Add_admin.php" class="Active">Add Admin</a></li>
			 <li><a href="home.php">Logout</a></li>
			</ul>
		</nav>
	</div>
 
			<div class="modal-header">
			<h3 id="Label">Add Admin...</h3>
		</div>
		<section class="we">
		<div class="log1">
		  <form class="login_form" action="Add_admin.php" method="POST" name="form" onsubmit="return validated()">
 
            <input autocomplete="off" type="email" name="email"placeholder="Email"><br><br>
 
  
            <input  type="text" name="Firstname" placeholder="Firstname" required><br><br>
   
            <input  type="text" name="Secondname" placeholder="Secondname" required><br><br>
             
		
            <input type="password" name="password" placeholder="password" required><br><br>
            
             <button type="submit" name="submit"> Submit</button>
         </form>
         </div>
         </section>
	<?php
$conn = mysqli_connect('localhost', 'root', '','royal_college');
if(!$conn){
    die("Fatal Error: Connection Error!"); 
}
if(isset($_POST['submit'])){
$email = $_POST['email'];
$Firstname = $_POST['Firstname'];
$Secondname = $_POST['Secondname'];
 $password = $_POST['password'];

$statement=("SELECT * FROM `admin` WHERE `email` = '$email'");
$query = mysqli_query($conn,$statement);
$check =mysqli_num_rows($query);
if ($check == 1) {
    echo "<script>alert('EMAIL ALREADY EXIST')</script>";
}
 else {
    $statement1=("INSERT INTO admin(email, Firstname, Secondname,password) values('$email','$Firstname','$Secondname','$password')");
    $check=mysqli_query($conn,$statement1);
   
	header ("location:admin.php");
}
}

?>
</div>
</section>
	<section id="footer2">
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