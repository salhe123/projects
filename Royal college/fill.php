  <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>register</title>
	<link rel="stylesheet" type="text/css" href="back.css">
</head>
<body>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<section id="back">
		<header>
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
				<li><a href="feed.php">feedback</a></li>
				<li><a href="ref.php">references</a></li>
				
			</ul>
		</nav>
	</div>
    <section class="logg">
   <div class="log2">
        <h1 class="label">REGISTER</h1>
        <form class="login_form" action="fill.php" method="POST" name="form" onsubmit="return validated()">
        	 <div class="font"></div>
            <input autocomplete="off" type="email" name="email"placeholder="Email">
            <div id="email_error">Please fill up your Email </div>
        	 <div class="font"></div>
            <input  type="text" name="Firstname" placeholder="Firstname" required>
             <div class="font"></div>
            <input  type="text" name="Secondname" placeholder="Secondname" required>
             <div class="font"></div>
            <input  type="text" name="Lastname" placeholder="Lastname" required>
		<div class="font"></div>
            <input type="password" name="password" placeholder="password" required>
            <div id="pass_error">Please fill up your Password</div>
            
			   <table border="1" width="363px" bgcolor="white" >
			   	<tr>
			   	<td>
			   		
			  
			  <div class="gender-details" >
          <input type="radio" name="Sex" id="dot-1" value="M">
          <input type="radio" name="Sex" id="dot-2" value="F">
          <span class="gender-title">Gender</span>
          <div class="category">
            <label for="dot-1">
            <span class="dot one"></span>
            <span class="gender">Male</span>
          </label>
          <label for="dot-2">
            <span class="dot two"></span>
            <span class="gender">Female</span>
          </label>
        </div>
         	</td>
			   </tr>
			   </table>
      <table border="1"  width="363px" bgcolor="white"   border-collapse="collapse">
      	<tr>
      		<td >
      			
      		
             <label>Age:</label><select name="Age" id="tn">

<option value="18"
selected="selected">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
<option value="32">32</option>
<option value="33">33</option>
<option value="34">34</option>
</select><br>
</td>
     
      <td >
          <label> Birthdate:</label ><select name="Birthdate" id="tn">

<option value="01"
selected="selected">01</option>
<option value="02">02</option>
<option value="03">03</option>
<option value="04">04</option>
<option value="05">05</option>
<option value="06">06</option>
<option value="07">07</option>
<option value="08">08</option>
<option value="09">09</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
</select>
             </td>
               </tr>
       <tr>
             <td>
                  <label>Month:</label><select name="Month" id="tn">

<option value="01"
selected="selected">January</option>
<option value="02">February</option>
<option value="03">March</option>
<option value="04">April</option>
<option value="05">May</option>
<option value="06">June</option>
<option value="07">July</option>
<option value="08">August</option>
<option value="09">September</option>
<option value="10">October</option>
<option value="11">November</option>
<option value="12">December</option>
</select>
      <br>  
  </td>
      
          <td> 
         <label>Year:</label><select name="year" id="tn">

<option value="1995"
selected="selected">1995</option>
<option value="1996">1996</option>
<option value="1997">1997</option>
<option value="1998">1998</option>
<option value="1999">1999</option>
<option value="2000">2000</option>
<option value="2001">2001</option>
<option value="2002">2002</option>
<option value="2003">2003</option>
<option value="2004">2004</option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>




</select>

          </td>
      	</tr>
      </table>  
            <button type="submit" name="submit"> Submit</button>
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
<?php
$conn = mysqli_connect('localhost', 'root', '','royal_college');
if(!$conn){
    die("Fatal Error: Connection Error!"); 
}
if(isset($_POST['submit'])){
$email = $_POST['email'];
$Firstname = $_POST['Firstname'];
$Secondname = $_POST['Secondname'];
$Lastname = $_POST['Lastname'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$Birthdate = $_POST['Birthdate'];
$Month = $_POST['Month'];
$year = $_POST['year'];
 $password = $_POST['password'];

$statement=("SELECT * FROM `student_info` WHERE `email` = '$email'");
$query = mysqli_query($conn,$statement);
$check =mysqli_num_rows($query);
if ($check == 1) {
    echo "<script>alert('EMAIL ALREADY EXIST')</script>";
}
 else {
    $statement1=("INSERT INTO student_info(email, Firstname, Secondname, Lastname, Sex, Age, Birthdate, Month,year,password,Cpassword) values('$email','$Firstname','$Secondname','$Lastname','$Sex','$Age','$Birthdate','$Month','$year','$password')");
    $check=mysqli_query($conn,$statement1);
   
	header ("location:login.php");
}
}

?>
