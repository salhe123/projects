<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Us</title>
		<link rel="stylesheet" type="text/css" href="back.css">
		
	</head>
	<body>
		<style>

textarea {
  font-family: sans-serif;
}

* {
  box-sizing: border-box;
}

.wrapper {
  width: 100%;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
  margin-top:60px;
 background: rgb(155, 150, 150);
}

.d-grid {
  display: grid;
}

.text-center {
  text-align: center;
  
}

.text-left {
  text-align: left;
}

.text-right {
  text-align: right;
}

button,
select {
  outline: none;
  appearance: none;
}

button,
.btn,
select {
  cursor: pointer;
  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
}

a {
  text-decoration: none;
}

p {
  margin: 0;
  padding: 0;
}

/* Section top bottom gap */
.section-gap {
  padding: 4.5rem 0;
}


/* / Section top bottom gap */

/* title-styling */
h3.global-title {
  font-size: 40px;
  line-height: 45px;
  color: #16191e;
  margin-bottom: 50px;
  text-transform: capitalize;
}

/* / title-styling */


/* contact1 */
  .margin-up {
    margin-top: 2.5rem;
  }

  h4.sub-title {
    font-size: 16px;
    margin: 0;
    color: #3ecb36;
    font-weight: normal;
  }

  .contact-view {
    grid-template-columns: 1fr 1.3fr;
    grid-gap: 30px;
  }

  .cont-top {
    display: grid;
    grid-template-columns: 20px auto;
    grid-column-gap: 20px;
  }

  .twice {
    margin-bottom: 20px;
  }

  .cont-details span.fa {
    font-size: 22px;
    color: #4cb1ff;
    display: block;
    margin-top: 3px;
  }

  .cont-details h6 {
    font-size: 20px;
    color: #051b35;
    font-weight: 600;
  }

  .cont-details p,
  .cont-details p a {
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 24px;
    color: whitesmoke;
    margin-top: 3px;
  }

  .cont-details p a:hover {
    text-decoration: underline;
    opacity: 0.8;
    color: #051b35;
  }

  .cont-details address {
    margin: 25px 0;
  }

  .cont-details address p {
    margin: 5px 0;
  }

  .twice-two {
    display: grid;
    grid-gap: 20px;
    grid-template-columns: 1fr 1fr;
    margin-bottom: 20px;
  }

  .map-content form input,
  .map-content form textarea {
    background: #f8f9fa;
    border: 2px solid rgba(216, 216, 216, 0.3);
    color: #777;
    font-size: 16px;
    padding: 12px 15px;
    width: 100%;
    border-radius: 4px;
    height: 55px;
  }

  .map-content h5 {
    font-size: 25px;
    line-height: 30px;
    margin-bottom: 20px;
    color: #000000;
  }

  .map-content form textarea {
    resize: none;
    min-height: 140px;
  }

  .map-content form input:focus,
  .map-content form textarea:focus {
    outline: none;
    border: 2px solid #051b35;
    background: #fff;
    box-shadow: none;
  }

  button.btn-contact {
    border: none;
    font-size: 16px;
    padding: 15px 30px;
    margin: 20px auto 0;
    color: #fff;
    background: #3ecb36;
    border-color: #4cb1ff;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
   
    user-select: none;
    border: 1px solid transparent;
    border-radius: 0.25rem;
  }

  .cont-details h6 a {
    color: #051b35;
  }


</style>
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
				<li><a href="ref.php">references</a></li>
				<li><a href="fill.php">register here</a></li>
                <li><a href="login.php">Login</a></li>
			</ul>
		</nav>
	</div>
	  <section>
	  	<div class="conta">
	  		
    <!-- header section ends -->



  <!-- contact1 -->
    <div class=" section-gap"></div>
      <div class="wrapper">
     
        <h3 class="global-title text-center">Contact us</h3>
        <div class="d-grid contact-view">
          <div class="cont-details">


            <div class="cont-top">

              <div class="cont-left text-center">
               <i style="font-size:25px;"  class="fas fa-phone"></i>
              </div>

              <div class="cont-right">
                <h6>Call Us</h6>
                <p><a href="#">+251-936943394</a></p>
                <p><a href="#">+251-953257254</a></p>
              </div>

            </div>


            <div class="cont-top margin-up">

              <div class="cont-left text-center">
               <i style="font-size:25px;" class="fas fa-envelope"></i>
              </div>
              <div class="cont-right">
                <h6>Email Us</h6>
                <p><a href="mailto:example@mail.com" class="mail">RoyalCollege@gmail.com</a></p>
              </div>
              
            </div>


            <div class="cont-top margin-up">
              <div class="cont-left text-center">
                <i style="font-size:25px;" class="fas fa-map-marker"></i>
              </div>
              <div class="cont-right">
                <h6>Address</h6>
                <p>Bahirdar Ethiopia</p>
              </div>
            </div>
          </div>



          <div class="map-content">
            <form action="#" method="post">
              <div class="twice-two">
                <input type="text" class="form-control" name="name" id="w3lName" placeholder="Name" required="">
                <input type="email" class="form-control" name="sender" id="w3lSender" placeholder="Email"
                  required="">
              </div>

              <div class="twice">
                <input type="text" class="form-control" name="subject" id="w3lSubject" placeholder="Subject"
                  required="">
              </div>

              <textarea name="message" class="form-control" id="w3lMessage" placeholder="Message"
                required=""></textarea>
              <button name="sendmsg" type="submit" class="btn btn-contact">Send Message</button>
            </form>
          </div>

        </div>
      </div>
    

</section>

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
$conn = mysqli_connect('localhost', 'root', '','royal_college');
if(!$conn){
    die("Fatal Error: Connection Error!");
}
if(isset($_POST['sendmsg'])){
$firstname=$_POST['name'];
$lastname=$_POST['sender'];
$username=$_POST['subject'];
$email=$_POST['message'];

$statement=("SELECT * FROM `contactusinfo` WHERE `email` = '$email'");
$query = mysqli_query($conn,$statement);
$checkrow =mysqli_num_rows($query);
if ($checkrow == 1) {
    echo "<script>alert('EMAIL ALREADY EXIST')</script>";
} else {
    $statement1=("INSERT INTO contactusinfo ( name , sender, subject, message)VALUES ('$firstname','$lastname','$username','$email')");
    mysqli_query($conn,$statement1);
    echo "<script>alert('You Have Successfully Sent The Message')</script>";
}
}

?>