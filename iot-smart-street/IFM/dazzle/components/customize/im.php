<!DOCTYPE html>
<html>
<head>
	<title>Infrastructure Manager</title>
</head>
<body>
	<form action="simulator.php" method="POST">
		<input type="radio" name="cluster" value="1">
		<input type="radio" name="cluster" value="2">
		<input type="radio" name="cluster" value="3">

		<br><br>
		<input type="radio" name="node" value="1">
		<input type="radio" name="node" value="2">
		<input type="radio" name="node" value="3">
		<input type="radio" name="node" value="4">
		<input type="radio" name="node" value="5">
		<br><br>

		<input type="radio" name="sensor" value="motion">
		<input type="radio" name="sensor" value="light">
		<input type="radio" name="sensor" value="temperature">
		<input type="radio" name="sensor" value="rain_guage">
		
		<input type="submit" name="submit">
	</form>
</body>
</html>