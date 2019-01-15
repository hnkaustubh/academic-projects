<!DOCTYPE html>
<html>
<head>
	<title>Last Visited Products</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="color: white;background-color: #FFA07A; font-size: 25px; font-family: sans-serif;">
	<div class="first">
		<ul>
			<li><a href="smartsolutions.php">Home</a></li>
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
	<div class="smartlamps" style="background-image: url('wheat.jpg'); height: 180px; margin-top: -50px;">
		<h3 style="color: black; margin-left: 20px; top: 20px; position: relative;">Last 5 Previously Visited Products</h3>
	</div>
	<br><br>
	<div style="margin-left: 50px; color: black;">
		<?php
			echo "<strong>The last 5 previously visited Products are: <br><br></strong>";
			$count = 1;
			$final = array_reverse($_COOKIE);

			foreach($final as $key => $value) {
				if($count <= 5){
					 echo $count.". ".$key."<br>";
					$count++;
				}
			}
		?>
	</div>
</body>
</html>
