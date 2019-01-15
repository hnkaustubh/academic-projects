<?php
	$file = fopen("contacts.txt", 'r');
?>
<html>
<head>
	<title>Contact Us</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
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

	<div class="products" style="margin-top: -12px;">
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