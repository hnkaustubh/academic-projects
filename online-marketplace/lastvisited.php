<!DOCTYPE html>
<html>
<head>
	<title>Last Visited Products</title>
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
<body style="color: white;background-color: #FFA07A; font-size: 25px; font-family: sans-serif;">
	<div class="first" style="margin-top: -5px; margin-left: 220px; width: 1500px;">
		<ul>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="smartsolutions.php">Home</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="about.html">About Us</a></li>
            <li style="font-size: 20px; width: 250px; height: 30px;"><a href="products.php">Products and Services</a>
<!--                <ul></ul> -->
            </li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="news.html">News</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="contacts.php">Contacts</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="admin.php">Admin</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>
	<div class="smartlamps" style="background-image: url('img/wheat.jpg'); height: 180px; margin-top: -50px;">
		<h3 style="color: black; margin-left: 20px; top: 20px; position: relative;">Last 5 Previously Visited Products</h3>
	</div>
	<br><br>
	<div style="margin-left: 50px; color: black;">
		<table border="1|6">
		<tr>
			<th>Count</th>
			<th>Product</th>
		</tr>
		<?php
			// echo "<strong>The last 5 previously visited Products are: <br><br></strong>";
			$count = 1;
			$final = array_reverse($_COOKIE);

			foreach($final as $key => $value) {
				if($count <= 5){
					 echo "<tr><td>".$count."</td><td>".$key."</td></tr>";
					$count++;
				}
			}
		?>
	</div>
</body>
</html>
