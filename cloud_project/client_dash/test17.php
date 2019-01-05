<!DOCTYPE html>
<html>
<head>
	<title>Test PHP</title>
</head>
<body>
	<form method="POST">
		<input type="date" name="datein">
		<h3>Format:	<input type="radio" name="format" value="Line Curve" style="margin-left: 30px;"> Line Curve  </h3>
				<h3 style="float: right; position: relative; top: -23px; right: 250px;"><input type="radio" name="format" value="Area Curve"> Area Curve  </h3>
				<h3 style="float: right; position: relative; top: -23px; right: -20px;"><input type="radio" name="format" value="Bar Graph"> Bar Graph  </h3>
		<input type="submit" name="submit">

	</form>

	<?php
		$datein = $_POST['datein'];
		$format = $_POST['format'];
		echo $datein;
		echo $format;

		if(strcmp("Hello", "Hello") == 0)
			echo "Strings Match";
		else
			echo "Strings don't match";

	?>
</body>
</html>


