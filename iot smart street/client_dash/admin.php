<html>
<head>
	<title>List of Users</title>
</head>
<style>
	.php{
		color: black;
		width: 600px;
		height: 150px;
		margin-left: 500px;
		position: relative;
		bottom: 100px;
	}

	.authenticate{
		width: 100px;
		height: 200px;
		position: relative;
		bottom: -60px;
		margin-left: 150px;
	}

	.*{
	margin: 0px;
	padding: 0px;
	}

	body{
		background-size: cover;
		font-family: Arial;
		color: white;
	}

	ul{
		margin: 0px;
		padding: 0px;
		list-style: none;
	}

	ul li{
		float: left;
		width: 205px;
		height: 40px;
		background-color: black;
		opacity: .8;
		line-height: 40px;
		text-align: center;
		font-size: 20px;
		margin-right: 2px;
	}

	ul li a {
		text-decoration: none;
		color: white;
		display: block;
	}

	ul li ul li:hover {
		background-color: green;
	}

	ul li a:hover {
		background-color: green;
	}

	ul li ul li{
		display: none;
	}

	ul li:hover ul li {
		display: block;
	}

	.first{
	padding-left: -30px;
	margin-left: 150px;
	/*float: right;*/
	background-color: green;
	}
</style>

<body style="color: white;background-color: #FFA07A; font-size: 25px; font-family: sans-serif;">

	<div class="first">
		<ul>
			<li><a href="dashboard1.php">Home</a></li>
			<li><a href="about.html">About Us</a></li>
			<li><a href="products.php">Products and Services</a>
				<ul></ul>
			</li>
			<li><a href="news.html">News</a></li>
			<li><a href="contacts.php">Contacts</a></li>
			<li><a href="admin.php">Admin</a></li>
		</ul>
	</div>

	<br><br><br>

	<div class="smartlamps" style="background-image: url('wheat.jpg'); height: 180px; margin-top: -12px">
		<h3 style="color: black; margin-left: 20px; top: 20px; position: relative;">Admin</h1>
	</div>

	<div class="authenticate" style="margin-top: -40px;">
		<form method="post">
			<br />

				<table border="0" cellspacing="0" style="height: 200px; width: 123px; font-size: 10pt" cellpadding="0">

					<tr style="font-family: sans-serif;font-size: 25px; color: black;">
						<td colspan="3">
							<strong>Username:</strong>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<input size="40" name="USERNAME" style="height: 22px; width: 180px" />
						</td>
					</tr>

					<tr style="font-family: sans-serif;font-size: 25px; color: black;">
						<td colspan="3">
							<strong>Password: </strong>
						</td>
					</tr>

					<tr>
						<td colspan="3">
							<input size="40" name="PASSWORD" style="height: 22px; width: 180px" type="password" />
						<br/></td>
					</tr>

					<tr>
						<td colspan="1">
							<input type="submit" name="Enter" value="Enter" style="height: 40px; width: 100px; margin-left: 30px; font-size: 25px; margin-top: 10px;" />
						</td>
					</tr>
				</table>
		</form>
	</div>

	<div class="php">
		<?php
			if(isset($_POST['Enter'])){

				if($_POST['USERNAME'] == 'admin' && $_POST['PASSWORD'] == 'raghava'){
					$count = 1;

					$file = fopen("password.txt", "r");

					print("<strong>List of Users for this website: </strong><br><br>");

					while(!feof($file)){
						$line = fgets($file,255);
						print("$count: $line<br>");
						$count++;
					}
				}
				else{
					print("<strong>Sorry......your credentials didn't match...</strong>");
				}
			}
		?>
	</div>
</body>
</html>
	
	
		















