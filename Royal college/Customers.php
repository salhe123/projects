<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="Admin.css">
</head>
<body>
    <div id="header" style="position:fixed;">
		<label>Royal <span>College</span> Admin</label>
		<?php
        $conn=mysqli_connect('localhost','root','','royal_college');
        session_start();
            if(isset($_SESSION['Email'])){
                ?>
				<p style="float:right;color:white;margin-right:20px;">Welcome:&nbsp;&nbsp;<?php echo $_SESSION['Email'];?>
                &nbsp;&nbsp;&nbsp;<a href="../Login.php" style="color:white; float:right">logout</a></p>
                <?php
                }
                ?>
    </div>
	<div id="leftnav">
		<ul>
		
			<li><a href="customers.php" class="Active">Students</a></li>
			<li><a href="Messages.php">Messages</a></li>
			
			<li><a href="Add_admin.php">Add Admin</a></li>
		</ul>
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
</body>
</html>