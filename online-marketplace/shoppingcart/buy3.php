<!DOCTYPE html>
<html>
<head>
	<title>Thank You!</title>
</head>
<body style="padding-left: 80px;">
	<img src="logo.jpeg" width="150" height="100">
	<h1 style="margin-left: 200px; margin-top: -50px;">Welcome to <span style="color: #000080">All-in-one</span> Marketplace</h1>
	<hr style="width: 1200px;">
	<h2>Thank you, your product will be delivered within 2-3 business days at -</h2>
		<div style="padding-left: 40px; color: blue;">
			<h4>
			<?php
				$add1 = $_POST['address1'];
				$add2 = $_POST['address2'];

				echo $add1.","."<br>";
				echo $add2;
			?>
		</h4>
		</div>
		<h2>Please visit again!</h2>
		

</body>
</html>