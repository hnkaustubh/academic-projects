<html>
	<head>
		<title>Smart Street</title>		
		<link href="bootstrap4/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
		<link href="bootstrap4/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="font-awesome/font-awesome/css/font-awesome.min.css">
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<header>
			<div class="row">
				<div class="logo">
					<img src="cloud-pic.png">
				</div>

				<ul class="main-nav">
					<li><a href="main-page.php">Home</a></li>
					<li><a href="">Products/Services</a></li>
					<li><a href="">News</a></li>
					<li><a href="">Contacts</a></li>
				</ul>
			</div>

			<h1>
				<?php
					$date = $_REQUEST['date'];
					echo("Date: ".$date);
				?>
			</h1>		
	</header>

	<script type="text/javascript" src="bootstrap.min.jss"></script>
	</body>
</html>