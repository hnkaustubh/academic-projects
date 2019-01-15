<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$conn = mysqli_connect('localhost','prayojana','passwORD@567','project_281');
		$query = "select name from list_of_users_kaustubh";
		$result = mysqli_query($conn,$query);

		foreach ($result as $row) {
			echo $row["name"]."<br>";
		}
	?>
</body>
</html>