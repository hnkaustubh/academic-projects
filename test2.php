<!DOCTYPE html>
<html>
<head>
	<title>Test Page</title>
</head>
<body>
	<?php
		$conn = mysqli_connect("54.193.22.204","tester","password","project_281");
		$query = "select name as NAME, count(name) as COUNT, price AS PRICE, sum(price) as SUM, price, image from shopping_cart group by name DESC order by id";
		$result = mysqli_query($conn,$query);

		$image = "Project 272/shoppingcart/wifi.jpeg";
		
		foreach ($result as $row) {
			?> <img src="<?php echo $image ?>"> <?php echo "hi";
		}
	?>

	
</body>
</html>