<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>List of Users from "Gotech Smart Solutions"</h3>
	<?php

		$conn = mysqli_connect('localhost','prayojana','passwORD@567','project_281');
		$query = "select id, name from list_of_users_kaustubh";
		$result = mysqli_query($conn,$query);

		foreach ($result as $row) {
			echo $row["name"]."<br>";
		}
	?>

	<h3>List of Users from "Word: The book store"</h3>

	<?php

		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, 'http://ketanrudrurkar36682.ipage.com/curllab.php');

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_HEADER, 0);

		$output = curl_exec($ch);

		print_r($output);
	?>

	<h3>List of Users from "The Bike Store"</h3>
	<?php
		curl_setopt($ch, CURLOPT_URL, 'http://nikhilnlimaye.com/print_users_from_mysqldb.php');

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

		curl_setopt($ch, CURLOPT_HEADER, 0);

		$output = curl_exec($ch);

		print($output);

		curl_close($ch);
	?>
</body>
</html>