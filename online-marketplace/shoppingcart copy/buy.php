<!DOCTYPE html>
<html>
<head>
	<title>Shipping & Payment</title>
</head>
<body style="padding-left: 80px; font: sans-serif; font-family: Montserrat">
	<div>
		<img src="logo.jpeg" width="150" height="100">
		<h1 style="margin-left: 200px; margin-top: -50px;">Welcome to <span style="color: #000080">All-in-one</span> Marketplace</h2>
		<div style="width: 1200px; height: 120px;">
			<hr>
			<h2>Shipping address</h2>
			<p>Please enter a shipping address for this order. Please also indicate whether your billing address is the same as the shipping address entered. When finished, click the "Continue" button.</p>
			<hr>
		</div>
		<h3><strong>Enter a new Shipping Address</strong></h3>
		<p>When finished, click the "Continue" button.</p>
		<p><strong>Full Name: </strong></p>
		<input type="text" name="fullname" placeholder="Full Name" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<br>
		<p><strong>Address Line 1</strong></p>
		<input type="text" name="address" placeholder="Street Address, P.O.Box, Company Name, c/o" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<br>
		<p><strong>Address Line 2</strong></p>
		<input type="text" name="address" placeholder="Street Address, P.O.Box, Company Name, c/o" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<br>
		<p><strong>City: </strong></p>
		<input type="text" name="city" placeholder="city" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<br>
		<p><strong>State/Province/Region: </strong></p>
		<input type="text" name="state" placeholder="state" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<br>
		<p><strong>ZIP: </strong></p>
		<input type="text" name="zip" placeholder="zip" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<br>
		<p><strong>Country/Region: </strong></p>
		<select style="width: 550px; height: 25px; position: relative; top: -15px; font-size: 13px;"> 
			<option>United States</option>
			<option>Afghanistan</option>
			<option>Aland Islands</option>
			<option>Albania</option>
			<option>Algeria</option>
			<option>Amerian Samorra</option>
			<option>Antorra</option>
			<option>Angola</option>
			<option>San Marino</option>
			<option>Sanotono Principe</option>
			<option>Singapore</option>
			<option>Sint Marten</option>
			<option>Sierra Leone</option>
			<option>Tokelao</option>
			<option>Turkmenistan</option>
			<option>India</option>
			<option>Zimbabwe</option>
		</select>
		<p><strong>Phone Number: </strong></p>
		<input type="text" name="phonenumber" placeholder="phone number" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<h3><strong>Add Delivery Instructions(optional)</strong></h3>
		<p>Do we need additional instructions to find this address?</p>
		<textarea placeholder="Provide details such as building description, a nearby landmark or other navigation instructions" style="width: 550px; height: 75px; border-radius: 4px; position: relative; top: -15px; font-size: 13px;"></textarea>
		<p><strong>Do we need a Security Code or a call box number to access this building?</strong></p>
		<input type="text" name="securitycode" placeholder="security code" style="border-radius: 4px; width: 550px;height: 25px; position: relative; top: -15px; font-size: 13px;">
		<p><strong>Is this address also your billing address?</strong></p>
		<input type="radio" name="yes" value="Yes">  Yes<br>
		<input type="radio" name="no" value="No">  No (If not, we will ask you in a moment)
		<br>
		<input type="submit" name="continue" value="continue" style="width: 100px; height: 30px; border-radius: 4px; margin-left: 450px; background-color: #FFD733; font-weight: bold; font-size: 15px">
		<br><br><br><br><br><br><br>
	</div>
	<div style="width: 500px; height: 500px; margin-left: 700px; margin-top: -1000px; font-weight: bold;">
		<h3>Your Outstanding Charge:</h3>
		<div style="margin-left: 230px; margin-top: -40px; color: #800000; font-size: 20px;">
			<?php    
				$conn = mysqli_connect("54.193.22.204","tester","password","project_281");
				$query = "select sum(price) AS SUM from shopping_cart";
				$result = mysqli_query($conn,$query);

				foreach ($result as $row) {
					echo "$".$row["SUM"];
				}
			?>
		</div>
		<br>
		<div style="width: 500px; border-style: groove; border-radius: 8px; height: 60px; padding-left: 10px;padding-top: 10px;">
			Please note: You are eligible for a Cash Discount of upto $50 for all purchases above $500
		</div>
	</div>
</body>
</html>