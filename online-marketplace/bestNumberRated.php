<!DOCTYPE html>
<html>
<head>
	<title>Top 5 Best Number Rated Products</title>
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
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="../smartsolutions.php">Home</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../about.html">About Us</a></li>
            <li style="font-size: 20px; width: 250px; height: 30px;"><a href="../products.php">Products and Services</a>
<!--                <ul></ul> -->
            </li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../news.html">News</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../contacts.php">Contacts</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../admin.php">Admin</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="../users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>
	<div class="smartlamps" style="background-image: url('img/wheat.jpg'); height: 180px; margin-top: -50px;">
		<h3 style="color: black; margin-left: 20px; top: 20px; position: relative;">Top 5 Number Rated Products</h3>
	</div>
	<br><br>

	<div style="margin-left: 50px; color: black; margin-top: -50px;">
		<table border="1|6">
		<tr>
			<th>Count</th>
			<th>Product</th>
			<th>Average Rating</th>
		</tr>
		<?php
		$conn = mysqli_connect("52.53.161.121","tester","password","project_281");

		$bestrating = array("Public Wifi" => "rating1","Smart Communication" => "rating2","Smart Gas" => "rating3", "Smart Lamps" => "rating4", "Smart Meter" => "rating5","Smart Parking" => "rating6","Smart Security" => "rating7", "Smart Transportation" => "rating8", "Smart Trash" => "rating9", "Smart Water" => "rating10");

		$query1 = "SELECT AVG(rating) as rating FROM pwnum;";
		$result = mysqli_query($conn,$query1);

		foreach ($result as $row) {
			$bestrating["Public Wifi"] = round($row["rating"],2);
		}

		$query2 = "SELECT AVG(rating) as rating FROM scnum;";
		$result = mysqli_query($conn,$query2);

		foreach ($result as $row) {
			$bestrating["Smart Communication"] = round($row["rating"],2);
		}

		$query3 = "SELECT AVG(rating) as rating FROM sgnum;";
		$result = mysqli_query($conn,$query3);

		foreach ($result as $row) {
			$bestrating["Smart Gas"] = round($row["rating"],2);
		}

		$query4 = "SELECT AVG(rating) as rating FROM slnum;";
		$result = mysqli_query($conn,$query4);

		foreach ($result as $row) {
			$bestrating["Smart Lamps"] = round($row["rating"],2);
		}

		$query5 = "SELECT AVG(rating) as rating FROM smnum;";
		$result = mysqli_query($conn,$query5);

		foreach ($result as $row) {
			$bestrating["Smart Meter"] = round($row["rating"],2);
		}

		$query6 = "SELECT AVG(rating) as rating FROM spnum;";
		$result = mysqli_query($conn,$query6);

		foreach ($result as $row) {
			$bestrating["Smart Parking"] = round($row["rating"],2);
		}

		$query7 = "SELECT AVG(rating) as rating FROM ssnum;";
		$result = mysqli_query($conn,$query7);

		foreach ($result as $row) {
			$bestrating["Smart Security"] = round($row["rating"],2);
		}

		$query8 = "SELECT AVG(rating) as rating FROM stransnum;";
		$result = mysqli_query($conn,$query8);

		foreach ($result as $row) {
			$bestrating["Smart Transportation"] = round($row["rating"],2);
		}

		$query9 = "SELECT AVG(rating) as rating FROM stnum;";
		$result = mysqli_query($conn,$query9);

		foreach ($result as $row) {
			$bestrating["Smart Trash"] = round($row["rating"],2);
		}

		$query10 = "SELECT AVG(rating) as rating FROM swnum;";
		$result = mysqli_query($conn,$query10);

		foreach ($result as $row) {
			$bestrating["Smart Water"] = round($row["rating"],2);
		}

		echo "<br>";

		asort($bestrating);
		// print_r($bestrating);

		$final = array_reverse($bestrating);
		echo "<br>";
		// print_r($final);
		$count = 1;

		// echo "<strong>The 5 Top Number Rated Products are - </strong>"."<br /><br />";

		foreach($final as $key => $value) {
				if($count <= 5){
					echo "<tr><td>".$count."</td><td>".$key."</td><td>".$value."</td></tr>";
					$count++;
				}
			}
	?>
	</div>