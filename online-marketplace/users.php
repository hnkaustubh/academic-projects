<!DOCTYPE html>
<html>
<head>
	<title>User Creation and Searching</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
	    table{
			border-collapse: collapse;
		    border: 3px solid black;
			width: 100%;
			color: black;
			font-family: monospace;
			font-size: 24px;
			text-align: center;
		}
		th{
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(10n-8), tr:nth-child(10n-7), tr:nth-child(10n-6), tr:nth-child(10n-5), tr:nth-child(10n-4){ 
		    background-color: gray;
		}
		tr{background-color: #f2f2f2};
		td{
			text-align: center;
		}
	</style>
</head>
<body style="text-align: justify;">
	<div class="first" style="margin-top: -30px; position: relative; left: 245px; width: 1500px;">
		<ul>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="smartsolutions.php">Home</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="about.html">About Us</a></li>
			<li style="font-size: 20px; width: 250px; height: 30px;"><a href="products.php">Products and Services</a>
<!-- 				<ul></ul> -->
			</li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="news.html">News</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="contacts.php">Contacts</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="admin.php">Admin</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a>Users</a></li>
		</ul>
	</div>

	<div class="smartlamps" style="background-image: url('img/wheat.jpg'); height: 180px; position: relative; top: 60px;">
		<h3 style="color: black; margin-left: -20px; top: 20px; position: relative; left: -1170px; font-size: 35px;">Users</h1>
	</div>

	<form method="POST" style="border-style: dotted; background-color: #808000; padding-left: 20px; height: 500px; margin-top: 80px;">
		<h1>Sign-Up for free(Add a New User)</h1>
		<h3>First Name:
		<input type="text" name="firstname" style="margin-left: 50px; border: 2px solid red;
    border-radius: 4px; width: 150px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px;"></h3>
		<h3>Last Name:
		<input type="" name="lastname" style="margin-left: 50px; border: 2px solid red;
    border-radius: 4px; width: 150px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px;"></h3>
		<h3>Email: 
		<input type="text" name="email" style="margin-left: 92px; border: 2px solid red;
    border-radius: 4px; width: 150px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px;"></h3>
		<h3>Home Address: 
		<input type="text" name="homeadd" style="margin-left: 10px; width: 300px; border: 2px solid red; border-radius: 4px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px;"></h3>
		<h3>Home Phone: 
		<input type="text" name="homephone" style="margin-left: 25px; border: 2px solid red;
    border-radius: 4px; width: 150px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px;"></h3>
		<h3>Cell Phone: 
		<input type="text" name="cellphone" style="margin-left: 40px; border: 2px solid red;
    border-radius: 4px; width: 150px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px;"></h3>
		<input type="submit" name="submit1" value="Create User" style="font-size: 35px; width: 130px; margin-left: 75px; margin-top: 20px; height: 30px;">
	</form>

	<form method="POST" style="border-style: dotted; margin-top: 30px; padding-left: 20px; height: 650px; background-color: #008080">
		<h1>User Search Form</h1>
		<h3>First Name: 
		<input type="text" name="firstnamesearch" style="width: 150px; border: 2px solid red; border-radius: 4px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px; margin-left: 40px;"></h3>
		<h3>Last Name: 
		<input type="text" name="lastnamesearch" style="width: 150px; border: 2px solid red; border-radius: 4px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px; margin-left: 40px;"></h3>
		<h3>Email: 
		<input type="text" name="emailsearch" style="width: 200px; border: 2px solid red; border-radius: 4px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px; margin-left: 85px;"></h3>
		<h3>Home Phone: 
		<input type="text" name="homephonesearch" style="width: 150px; border: 2px solid red; border-radius: 4px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px; margin-left: 20px;"></h3>
		<h3>Cell Phone: 
		<input type="text" name="cellphonesearch" style="width: 150px; border: 2px solid red; border-radius: 4px; height: 20px; background-color: #3CBC8D;
    color: white; font-size: 20px; height: 30px; margin-left: 35px;"></h3>
		<input type="submit" name="submit2" value="Search" style="font-size: 35px; width: 130px; margin-left: 75px; margin-top: 20px; height: 30px;">
	</form>

	<div style="position: fixed; left: 600px; top: 200px; /*background-color: green;*/ font-size: 30px;">
		<?php
			if (isset($_POST['submit1'])) {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$email = $_POST['email'];
				$homeadd = $_POST['homeadd'];
				$homephone = $_POST['homephone'];
				$cellphone = $_POST['cellphone'];

				$conn = mysqli_connect('localhost','prayojana','passwORD@567','project_281');
				$query = "INSERT INTO users (firstname, lastname, email, homeaddress, homephone, cellphone) VALUES ('$firstname','$lastname','$email','$homeadd','$homephone','$cellphone')";
				$result = mysqli_query($conn,$query);
				echo "User added Successfully";
				// header('Location: somewhereelse.php');
			}
		?>
	</div>

	<div style="position: relative; left: 0px; top: -180px; background-color: green; font-size: 20px;">
		<table border="1|6">
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>Home Address</th>
			<th>Home Phone</th>
			<th>Cell Phone</th>
		</tr>
		<?php
			if(isset($_POST['submit2'])){
				$firstnamesearch = $_POST['firstnamesearch'];
				$lastnamesearch = $_POST['lastnamesearch'];
				$emailsearch = $_POST['emailsearch'];
				$homephonesearch = $_POST['homephonesearch'];
				$cellphonesearch = $_POST['cellphonesearch'];

				$conn = mysqli_connect('localhost','prayojana','passwORD@567','project_281');
				$query = "SELECT * FROM users WHERE firstname = '$firstnamesearch' OR lastname = '$lastnamesearch' OR email = '$emailsearch' OR homephone = '$homephonesearch' OR cellphone = '$cellphonesearch'";
				$result = mysqli_query($conn,$query);

				foreach ($result as $row) {
					echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["email"]."</td><td>".$row["homeaddress"]."</td><td>".$row["homephone"]."</td><td>".$row["cellphone"]."</td></tr>";
				}
			}
		?>
	</div>
</body>
</html>