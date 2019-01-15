<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	

		<div style="width: 100%; background-color: grey; height: 80px; padding-top: 0px;">
			<img src="smartmeterin1.jpg" width="50" height="50" style="margin-top: 14px; margin-left: 14px;">
			<img src="ss.jpg" width="50" height="50" style="margin-top: 14px; margin-left: 14px;">
			<p style="font-weight: bold; margin-top: -38px; margin-left: 150px; font-size: 20px;">SEE SOMETHING NEW, EVERYDAY</p>
		</div>

		<h2 style="margin-left: 100px; margin-bottom: -15px;">Shopping Cart</h2>
		<div style="margin-left: 100px;">
			<?php
				$conn = mysqli_connect("54.193.22.204","tester","password","project_281");
				$query = "select name as NAME, count(name) as COUNT, price AS PRICE, sum(price) as SUM,price from shopping_cart group by name order by name";
				$result = mysqli_query($conn,$query);

				$count = 0;
					
					foreach ($result as $row) {
					// echo "<tr><td>".$count."</td><td>".$row["NAME"]."</td><td>".$row["PRICE"]."</td><td>".$row["COUNT"]."</td><td>".$row["SUM"]."</td><td>".'<input style="margin-left: 10px;" type="submit" name="delete" value="delete">'."</td></tr>"; 
					// $count++;
					echo '<div style="border-style: groove; width: 950px; height: 200px; margin-top: 20px;">'.'<div style="background-color: #C0C0C0; width: 950px; height: 50px; font-size: 16px;">'.'<div style="padding-top: 18px;">'."San Jose, California-95152".'</div>'.'</div>'.'<div style="width: 350px; height: 120px; margin-left: 50px; margin-top: 0px; background-color: green;">'.'<div style="font-size: 22px; font-weight: bold; color: #000080;">'.$row["NAME"].'</div>'."<br>".'<div style="font-size: 15px; margin-top: -15px; color: black;">'."In Stock".'</div>'.'<div style="font-size: 15px; margin-top: 2px; color: black;">'."Eligible for free shipping".'</div>'. '<div style="font-size: 15px; margin-top: 2px; color: black;">'."Gift options not available".'</div>'.'</div>'.'<div style="width: 250px; height: 120px; color: #800000; margin-left: 400px; margin-top: -120px; background-color: pink; font-size: 22px; font-weight: bold;">'."$".$row["PRICE"].'</div>'.'<div style="width: 250px; height: 120px; margin-left: 650px; margin-top: -120px; background-color: green; font-weight: bold; font-size: 18px;">'."Count:&nbsp".$row["COUNT"].'</div>'.'</div>';
					$count += $row["COUNT"];
					}
			?>
			
		</div>

		<h3 style="margin-left: 920px;">SubTotal: ( <?php echo $count; ?> items): </h3>
		<div style="margin-left: 1115px; margin-top: -40px; width: 70px; font-size: 20px; font-weight: bold; color: #800000">
			<?php
				// $conn = mysqli_connect("54.193.22.204","tester","password","project_281");
				$query = "select sum(price) AS SUM from shopping_cart";
				$result = mysqli_query($conn,$query);

				foreach ($result as $row) {
					echo "$".$row["SUM"];
				}
			?>
		</div>
	<br><br><br>
	<form action="buy.php" method="POST" style="margin-left: 100px; margin-top: -20px;">
		<input type="submit" name="checkout" value="Proceed to Checkout">
	</form>
</body>
</html>