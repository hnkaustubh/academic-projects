<!DOCTYPE html>
<html>
<head>
	<title>Most Visited Products</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
			<li style="font-size: 20px; width: 150px; height: 30px;"><a href="smartsolutions.php">Home</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="about.html">About Us</a></li>
            <li style="font-size: 20px; width: 250px; height: 30px;"><a href="products.php">Products and Services</a>
<!--                <ul></ul> -->
            </li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="news.html">News</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="contacts.php">Contacts</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="admin.php">Admin</a></li>
            <li style="font-size: 20px; width: 150px; height: 30px;"><a href="users.php">Users</a></li>
		</ul>
	</div>
	<br><br><br>
	<div class="smartlamps" style="background-image: url('img/wheat.jpg'); height: 180px; margin-top: -50px;">
		<h3 style="color: black; margin-left: 20px; top: 20px; position: relative;">5 Most Visited Products</h3>
	</div>
	<br><br>
	<div style="margin-left: 0px; color: black; position: relative; bottom: 270px;">
		<table border="1|6">
		<tr>
			<th>Count</th>
			<th>Product</th>
			<th>Number of Visits</th>
		</tr>
		<?php
			// echo "<strong>The 5 Most Visited Products along with their count are: <br><br></strong>";
			$count = 1;
			asort($_COOKIE);
			$final = array_reverse($_COOKIE);
			$json = [];

			foreach ($final as $key => $value) {
				if($count <= 5){
					echo "<tr><td>".$count."</td><td>".$key."</td><td>".$value."</td></tr>";
					$count++;
				}
			}

		?>
	</div>

	<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Product', 'Visits'],
          <?php 
          	foreach ($final as $key => $value) {
          		echo "['".$key."',".$value."],";
          	}

          ?>
        ]);

        var options = {
          title: 'Most Visited Products'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

	<div id="piechart" style="width: 500px; height: 250px; position: relative; top: 480px; left: 450px;"></div>
</body>
</html>