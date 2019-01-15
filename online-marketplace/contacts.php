<?php
	$file = fopen("contacts.txt", 'r');
?>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="color: white;background-color: #FFA07A; font-size: 25px; font-family: sans-serif; background-image: url('img/try8.jpg');">
	<div class="first" style="margin-top: -2px; position: relative; left: 245px; width: 1500px;">
		<ul>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="smartsolutions.php">Home</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="about.html">About Us</a></li>
			<li style="font-size: 20px; width: 250px; height: 30px;"><a href="products.php">Products and Services</a>
<!-- 				<ul></ul> -->
			</li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="news.html">News</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a>Contacts</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="admin.php">Admin</a></li>
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>

	<div class="products" style="margin-top: -52px;">
		<h3 style="color: black; margin-left: 20px; top: 20px; position: relative;">Contact Us</h3>
	</div>

	<div style="margin-left: 30px; margin-top: 40px; color: black;font-family: sans-serif;font-size: 20px; font-weight: bold;">
		<h4>Please contact us for more information</h5>
		<pre style="font-family: sans-serif; font-size: 20px;">
			<?php
				while($line = fgets($file))
					echo $line;
			?>	
		</pre>
	</div>
</body>
</html>