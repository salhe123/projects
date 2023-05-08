<?php

   $connection = mysqli_connect('localhost','root','','royal_college 1');

   if(isset($_POST['send'])){
      $email = $_POST['email'];
      $Firstname = $_POST['Firstname'];
      $Secondname = $_POST['Secondname'];
      $Lastname = $_POST['Lastname'];
      $Sex = $_POST['Sex'];
      $Age = $_POST['Age'];
      $Birthdate = $_POST['Birthdate'];
      $Month = $_POST['Menth'];
      $year = $_POST['year'];
      $password = $_POST['password'];

      $request = " insert into royal college student info(email, Firstname, Secondname, Lastname, Sex, Age, Birthdate, Month,year,password) values('$email','$Firstname','$Secondname','$Lastname','$Sex','$Age','$Birthdate','$Menth','$year','$password') ";
      mysqli_query($connection, $request);

      header('location:register.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>