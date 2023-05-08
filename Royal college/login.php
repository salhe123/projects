<!DOCTYPE html>
<html>
    <head>
  <title>Login</title>
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
                        <li><a href="background.php">Background of AS</a></li>
                        <li><a href="strategic.php">Strategic-plan</a></li>
                       

                    </ul>
                </li>
               
                 <li><a href="contact.php">Contact-us</a></li>
                <li><a href="feed.php">feedback</a></li>
                <li><a href="ref.php">references</a></li>
                

            </ul>
        </nav>
    </div>
   <section class="logg">
   <div class="log">
        <h1 class="label">UserLogin</h1>
        <form class="login_form" action="login.php" method="POST" name="form" onsubmit="return validated() ">
            <div class="font">Email</div>
            <input autocomplete="off" type="text" name="email" placeholder="">
            <div id="email_error">Please fill up your Email</div>
            <div class="font font2">Password</div>
            <input type="password" name="password" placeholder="">
            <div id="pass_error">Please fill up your Password</div>
            <button type="submit" name="login">Login</button>
            <b>Creat New Account<a href="fill.php"> SignUp</b></a>
        </form>
    </div>  
    <script src="valid.js"></script>
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
        <li><a href="#">Graduat</a></li>
        <li><a href="#">Undergraduat</a></li>
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
                <li><a href="www.facebook.com"> <ion-icon name="logo-facebook"></ion-icon></a></li>
                <li><a href="www.twitter.com"><ion-icon name="logo-twitter"></ion-icon></a></li>
              <li><a href="natyworku27@gmail.com"><ion-icon name="mail-outline"></ion-icon></a></li>
              <li><a href="www.youtub.com"><ion-icon name="logo-youtube"></ion-icon></a></li>
            </div>
    </div >
            
        <div class="copy">
                Copyright&copy2022-Natnael Worku
                </div>
    </section>
    </body>
</html>
<?php
if(isset($_POST['login'])){
$email=$_POST['email'];
$password=$_POST['password'];
$conn = mysqli_connect('localhost', 'root', '','royal_college');

$sql="SELECT * FROM student_info WHERE email = '$email' and password = '$password' ";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
$count = mysqli_num_rows($result);
if($count == 1){
  echo "<script>alert('Login successful')</script>";
  header ("location:course.php");
}
else{
  echo "<script>alert('Wrong username or password')</script>";

}
}
?>
