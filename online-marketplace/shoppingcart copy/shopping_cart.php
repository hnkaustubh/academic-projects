<!DOCTYPE html>
<html>
<head>
	<title>Shopping Cart</title>
</head>
<body>
	

		<div style="width: 100%; height: 80px; padding-top: 0px;">
			<img src="smartmeterin1.jpg" width="50" height="50" style="margin-top: 14px; margin-left: 14px;">
			<img src="ss.jpg" width="50" height="50" style="margin-top: 14px; margin-left: 54px;">
			<p style="font-weight: bold; margin-top: -38px; margin-left: 210px; font-size: 20px;">TRY NEW THINGS EVERYDAY</p>
			<img src="takealook.png" width="50" height="50" style="position: relative; top:-60px; margin-left: 550px;">
			<img src="brownie.jpg" width="50" height="50" style="position: relative; top:-60px; margin-left: 200px;">
			<img src="cookie.jpg" width="50" height="50" style="position: relative; top:-113px; margin-left: 680px;">
			<img src="applipie.jpg" width="50" height="50" style="position: relative; top:-167px; margin-left: 920px;">
			<img src="picture1.jpeg" width="50" height="50" style="position: relative; top:-223px; margin-left: 1020px;">
			<img src="picture2.jpeg" width="50" height="50" style="position: relative; top:-277px; margin-left: 1120px;">
			<img src="picture3.jpeg" width="50" height="50" style="position: relative; top:-332px; margin-left: 1220px;">
			<img src="picture4.jpeg" width="50" height="50" style="position: relative; top:-384px; margin-left: 1320px;">
		</div>

		<div style="width: 100%; background-color: green; height: 100px; padding-top: 0px;">
			<img src="logo.jpeg" width="150" height="100">
			<img src="st.jpg" width="50" height="50" style="position: relative; top: -36px; margin-left: 50px;">
			<img src="icecream.jpg" width="50" height="50" style="position: relative; top: -36px; margin-left: 50px;">
			<img src="ss3.jpg" width="50" height="50" style="position: relative; top: -36px; margin-left: 50px;">
			<h2 style="margin-top: -85px; margin-left: 550px;">Welcome to <span style="color: #000080">All-in-one</span> Marketplace</h2>
			<marquee><strong>Pick an item of your choice!</strong></marquee>
			<img src="smartwaterin.jpg" width="70" height="50" style="position: relative; top: -76px; margin-left: 1000px;">
			<img src="chocolateeclairs.jpg" width="50" height="50" style="position: relative; top: -76px; margin-left: 50px;">
			<img src="smartL1.jpg" width="50" height="50" style="position: relative; top: -76px; margin-left: 50px;">
			<img src="sc1.jpg" width="50" height="50" style="position: relative; top: -76px; margin-left: 50px;">
		</div>

		<div style="width: 20%; height: 100px; background-color: #CBCDCE; position: sticky; margin-top: 15px; margin-left: 1070px; border-radius: 8px; border-style: groove">
			<div style="width: 70px; font-size: 20px; font-weight: bold; color: #800000; margin-top: 20px; margin-left: 200px;">
				<?php
					$conn = mysqli_connect("54.193.22.204","tester","password","project_281");
					$query = "select count(name) as COUNT, sum(price) AS SUM from shopping_cart";
					$result = mysqli_query($conn,$query);
					$count = 0;

					foreach ($result as $row) {
						echo "$".$row["SUM"];
						$count += $row["COUNT"];
					}
				?>
			</div>
			<h3 style="padding-left: 20px; margin-top: -22px;">Subtotal (<?php echo $count; ?> item(s)): </h3>
			<form action="buy.php" method="POST" style="margin-left: 80px; margin-top: 20px;">
				<input type="submit" name="checkout" value="Proceed to Checkout" style="width: 200px; margin-left: -30px; height: 30px; border: none; border-radius: 8px; background-color: #FFD733; font-weight: bold; font-size: 15px;" height="50" width="100" >
			</form>
		</div>

		<div style="width: 20%; height: 50px; background-color: #CBCDCE; position: sticky; margin-top: 18px; margin-left: 1070px; border-radius: 8px; border-style: groove">
			<form method="POST">
				<input type="submit" name="delete" value="Empty Cart" style="width: 100px; margin-left: 90px; height: 25px; border: none; border-radius: 8px; background-color: #FFD733; font-size: 14px; margin-top: 10px; font-weight: bold;">
			</form>
		</div>

		<div style="width: 67%; border-color: #33FFEC; height: 80px; padding-top: 0px; margin-top: -178px; margin-left: 50px; border-radius: 8px; border-style: groove;">
			<div style="padding-top: 15px; padding-left: 20px;">
				<img src="smartMeter3.jpg" width="50" height="50" style="">
				<img src="smartwater.jpg" width="50" height="50">
			</div>
			<div style="margin-top: -80px; margin-left: 150px; font-size: 18px; font: sans-serif;">
				<p><strong>Hey,</strong> avail a <strong>5% discount</strong> on <strong>all products</strong><br>
				in our Marketplace for purchases above <strong> $500.<br>
				Hurry up! Limited Period Offer!</strong>
				</p>
			</div>
		</div>

		<div style="width: 20%; height: 430px; position: static; margin-top: 110px; margin-left: 1070px; border-radius: 8px; border-style: groove; border-color: #33FFEC;">
			<h3 style="font-weight: bold; padding-left: 20px;">Your treasured items!</h3>
			<img src="ducks.jpeg" width="100" height="100" style="margin-top: 14px; margin-left: 24px;">
			<img src="donut.jpg" width="100" height="100" style="position: relative; top: -105px; margin-left: 164px;">
			<img src="lighthouse.jpeg" width="100" height="100" style="position: relative; top: -95px; margin-left: 24px;">
			<img src="publicwifiin2.jpg" width="100" height="100" style="position: relative; top: -198px; margin-left: 164px;">
			<img src="bridge.jpeg" width="100" height="100" style="position: relative; top: -185px; margin-left: 24px;">
			<img src="sc1.jpg" width="100" height="100" style="position: relative; top: -288px; margin-left: 164px;">
		</div>

		<h2 style="margin-left: 55px; margin-top: -520px; position: relative; bottom: -12px;">Shopping Cart</h2>
		<div style="margin-left: 50px;">
			<?php
				$conn = mysqli_connect("54.193.22.204","tester","password","project_281");
				$query = "select name as NAME, count(name) as COUNT, price AS PRICE, sum(price) as SUM, price, image from shopping_cart group by name DESC order by id";
				$result = mysqli_query($conn,$query);

				$count = 0;
					
					foreach ($result as $row) {
					// echo "<tr><td>".$count."</td><td>".$row["NAME"]."</td><td>".$row["PRICE"]."</td><td>".$row["COUNT"]."</td><td>".$row["SUM"]."</td><td>".'<input style="margin-left: 10px;" type="submit" name="delete" value="delete">'."</td></tr>"; 
					// $count++;
					echo '<div style="border-style: groove; border-radius: 8px; width: 950px; height: 200px; margin-top: 20px;">'.'<div style="background-color: #C0C0C0; width: 950px; height: 50px; font-size: 16px;">'.'<div style="padding-top: 18px; padding-left: 10px; font-weight: bold;">'."San Jose, California - 95152".'</div>'.'</div>'.'<div style="width: 300px; height: 120px; margin-left: 150px; margin-top: 0px; padding-left: 30px;">'.'<div style="font-size: 22px; font-weight: bold; color: #000080; padding-left: 20px;">'.$row["NAME"].'</div>'."<br>".'<div style="font-size: 15px; margin-top: -15px; color: black; padding-left: 20px">'."In Stock".'</div>'.'<div style="font-size: 15px; margin-top: 2px; color: black; padding-left: 20px">'."Eligible for free shipping".'</div>'. '<div style="font-size: 15px; margin-top: 2px; color: black; padding-left: 20px">'."Gift options not available".'</div>'.'</div>'.'<div style="width: 250px; height: 120px; color: #800000; margin-left: 450px; margin-top: -120px; font-size: 22px; font-weight: bold;">'."$".$row["PRICE"].'</div>'.'<div style="width: 250px; height: 120px; margin-left: 700px; margin-top: -120px; font-weight: bold; font-size: 18px;">'."Count:&nbsp".$row["COUNT"].'</div>'; ?>
					<div style="width: 150px; height: 120px; margin-top: -120px;padding-left: 5px;">.<img src="<?php echo $row["image"]; ?>" width="150" height="120"></div><?php echo '</div>';
					$count += $row["COUNT"];
					}
			?>
			
		</div>

		<h3 style="margin-left: 770px;">Subtotal (<?php echo $count; ?> item(s)): </h3>
		<div style="margin-left: 945px; margin-top: -40px; width: 70px; font-size: 20px; font-weight: bold; color: #800000">
			<?php
				// $conn = mysqli_connect("54.193.22.204","tester","password","project_281");
				$query = "select sum(price) AS SUM from shopping_cart";
				$result = mysqli_query($conn,$query);

				foreach ($result as $row) {
					echo "$".$row["SUM"];
				}
			?>
		</div>

		<?php
			if(isset($_POST['delete'])){
				$query = "delete from shopping_cart";
				mysqli_query($conn,$query);
			}
		?>

</body>
</html>