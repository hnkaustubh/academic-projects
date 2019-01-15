
<?php
	$datein = $_POST['datein'];
	$dateout = $_POST['dateout'];
	$cluster = $_POST['cluster'];
	$format = $_POST['format'];
	$report = $_POST['report'];
	$year = $_POST['year'];
	$space = " ";

	// echo $report;
	// echo $year;

    $connect = mysqli_connect("54.193.22.204","tester","password","project_281");
	$query = "select year, avg(temperature) as temp, Sum(motion) as motion, Sum(light) as light, avg(rain_guage) as rainfall, time_record from clusters where cluster = '$cluster' and (date_curr >= '$datein' and date_curr <= '$dateout') group by year order by year";
	$result = mysqli_query($connect,$query);

	$query2 = "select year,date_curr,time_record from clusters";
	$result2 = mysqli_query($connect,$query2);

	$result5 = mysqli_query($connect,$query2);

	$json1 = [];
	$json2 = [];
	$json3 = [];
	$json4 = [];
	// $json5 = [];
	$json6 = [];
	$json7 = [];
	// $json8 = [];

	while($row = mysqli_fetch_array($result)){
		// echo $row["light"]."<br />";
		$json1[] = array('year' => $row["year"], 'temp' => (int)$row["temp"]);
		$json2[] = array('year' => $row["year"], 'rainfall' => (int)$row["rainfall"]);
		$json3[] = array('year' => $row["year"], 'motion' => (int)$row["motion"]);
		$json4[] = array('year' => $row["year"], 'light' => (int)$row["light"]);
		$json6[] = array('year' => $row["year"], 'light' => ($row["light"] * 2.54));
		$json7[] = array('year' => $row["year"], 'deploy' => ($row["light"] * 4.28));
	}

	// while ($row = mysqli_fetch_array($result2)) {
	// 	$json5[] = array('year' => $row["year"], 'time_record' => $row["time_record"]);	
	// }

	// while ($row = mysqli_fetch_array($result5)) {
	// 	$json8[] = array('year' => $row["year"], 'date_curr' => $row["date_curr"]);	
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<style>
		table{
			border-collapse: collapse;
		    border: 3px solid black;
			width: 100%;
			color: black;
			font-family: monospace;
			font-size: 25px;
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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
</head>
<body background="dashboardbck.jpg">
	<h1></h1>
	<div id="tempChart" style="height: 200px; width: 30%; border-style: dotted; background-image: url('whitebackground.png');">	</div>
	<h3 style="padding-left: 90px; font-size: 25px; position: relative; bottom: 20px;">Average Temperature(◦F)</h3>
	<div id="rainfallChart" style="height: 200px; width: 30%; position: relative; float: right; bottom: 285px; right: 510px; border-style: dotted; background-image: url('whitebackground.png');"></div>
	<h3 style="padding-left: 580px; font-size: 25px; position: relative; bottom: 75px; ">Average Rainfall(inches)</h3>
	<div id="motionChart" style="height: 200px; width: 30%; position: relative; float: right; bottom: 338px; right: -400px; border-style: dotted; background-image: url('whitebackground.png');"></div>
	<h3 style="padding-left: 1040px; position: relative; font-size: 25px; bottom: 335px; ">Average Vehicular Motion</h3>

	<div id="lightingChart" style="height: 200px; width: 30%; position: relative; bottom: 80px; right: 25px; float: right; border-style: dotted; background-image: url('whitebackground.png');"></div>
	<h3 style="float: left; margin-bottom: -360px; margin-left: 400px; bottom: -110px; position: relative; right: 300px; font-size: 25px;">Deployment Costs($M)</h3>

	<div id="deploymentChart" style="height: 200px; width: 30%; position: relative; bottom: 80px; right: 560px; float: right; border-style: dotted; background-image: url('whitebackground.png');"></div>
	<h3 style="float: right; position: relative; right: -750px; font-size: 25px; bottom: -110px;">Lighting Expenses($M)</h3>

	<div id="expenditure" style="height: 200px; width: 30%; position: relative;bottom: 340px;  background-color: green; font-size: 23px; text-align: center; font-weight: bold;">
		<h3 style="border-style: dotted; font-size: 30px; padding-left: 20px; text-align: center;">Expected Expenditure </h3>
		<div style="  font-size: 50px;text-align: center; border-style: dotted; height: 128px;">
			<?php
				// foreach ($json4 as $row) {
				// 	echo $row["light"];
				// }
				// echo end($json4);
				$lightfinal = end(end($json4));
				$charge = $lightfinal * 0.023;
				echo "$".$charge." "."M";
			?>
		</div>
	</div>

	<div id="revenue" style="height: 200px; width: 30%; position: relative;bottom: 540px; right: -350px; background-color: #CD5C5C; font-size: 25px; text-align: center; font-weight: bold; float: right;">
		<h3 style="border-style: dotted; position: relative; bottom: 30px;">Expected Revenue this year</h3>
		<div style="font-size: 35px; position: relative; bottom: 20px; text-align: center; border-style: dotted; height: 120px;">
			<h2 style="position: relative; bottom: 45px;">$150M</h2>
		</div>
	</div>

	<div id="savings" style="height: 200px; width: 30%; position: relative;bottom: 740px; right: 35px; background-color: #008080; font-size: 25px; text-align: center; font-weight: bold; float: right;">
		<h3 style="border-style: dotted; position: relative; bottom: 30px;">Discount Savings</h3>
		<div style="font-size: 35px; position: relative; bottom: 20px; text-align: center; border-style: dotted; height: 120px;">
			<h2 style="position: relative; bottom: 45px;">$4.55M</h2>
		</div>
	</div>

	<div id="report" style="position: relative; bottom: 370px;">
		<table border="1|6">
		<tr>
			<th>Node</th>
			<th>Motion</th>
			<th>Light</th>
			<th>Temperature(◦F)</th>
			<th>Rainfall(")</th>
			<th>Date/Month</th>
		</tr>
		<h1 style="position: relative; left: 450px; top: 180px;"><?php echo $report; ?>Report for <?php echo "Cluster ".$cluster."(".$year ?>)</h1>
		<?php
			// echo '<h1>Report(for '.$year.')</h1>';
			if(strcmp($report, "Monthly") == 0){
				$query3 = "select node,avg(motion) as Motion,avg(light) as Light,avg(temperature) as Temperature,avg(rain_guage) as Rainfall,month from clusters where year = $year and cluster = $cluster group by month,cluster,node;";
				$result3 = mysqli_query($connect,$query3);
				
				foreach ($result3 as $row) {
					echo "<tr><td>".$row["node"]."</td><td>".round($row["Motion"],2)."</td><td>".round($row["Light"],2)."</td><td>".round($row["Temperature"],2)."</td><td>".round($row["Rainfall"],2)."</td><td>".date("F", mktime(0, 0, 0, $row["month"], 10))."</td></tr>";
				}
			}
			else{
				$query4 = "select node,avg(motion) as Motion, avg(light) as Light,avg(temperature) as Temperature, avg(rain_guage) as Rainfall,date_curr from clusters where cluster = $cluster and year = $year group by date_curr,node";
				$result4 = mysqli_query($connect,$query4);

				foreach ($result4 as $row) {
					echo "<tr><td>".$row["node"]."</td><td>".round($row["Motion"],2)."</td><td>".round($row["Light"],2)."</td><td>".round($row["Temperature"],2)."</td><td>".round($row["Rainfall"],2)."</td><td>".$row["date_curr"]."</td></tr>";
				}
			}

		?>
			
	</div>

	<!-- <div id="marketing" style="height: 230px; width: 30%; position: relative;bottom: 300px; right: 140px; background-color: #008080; font-size: 25px; text-align: center; font-weight: bold; float: right; background-image: url('marketing.jpg');">
	</div>
	<h3 style="padding-left: 90px; font-size: 25px; position: relative; bottom: 290px;">Deployment Costs</h3> -->

	<div id="timestamp" style="height: 200px; width: 30%; position: relative;bottom: 170px; right: 90px; background-color: #800080; font-size: 25px; text-align: center; font-weight: bold; float: right;">
		<h3 style="border-style: dotted; position: relative; bottom: 30px;">Last Sensor Update At</h3>
		<div style="  font-size: 50px;text-align: center; border-style: dotted; height: 128px; position: relative; bottom: 30px;">
			<?php
				// echo end(end($json8))." ".end(end($json5));
				echo "2018-11-19"." "."6 PM";
			?>
		</div>
	</div>



	<!-- <div id="lighting" style="height: 200px; width: 30%; position: relative;bottom: 570px; right: -405px; background-color: #808000; font-size: 25px; text-align: center; font-weight: bold; float: right;">
		<h3 style="border-style: dotted; position: relative; bottom: 30px;">Average Lighting Expenses</h3>
		<div style="  font-size: 50px;text-align: center; border-style: dotted; height: 128px; position: relative; bottom: 30px;">
			<?php
				$lightfinal = end(end($json4));
				$charge = $lightfinal * 22.58;
				echo "$".$charge." "."M";
			?>
		</div>
	</div> -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

		<script>
			new Morris.Bar({
			  // ID of the element in which to draw the chart.
			  element: 'tempChart',
			  // Chart data records -- each entry in this array corresponds to a point on
			  // the chart.
			  data: <?php echo json_encode($json1); ?>,
			  barColors: ['red'],
			  // The name of the data record attribute that contains x-values.
			  xkey: 'year',
			  // A list of names of data record attributes that contain y-values.
			  ykeys: ['temp'],
			  // Labels for the ykeys -- will be displayed when you hover over the
			  // chart.
			  labels: ['Temperature'],
			  hideHover: 'auto'
			});
		
			new Morris.Bar({
			  // ID of the element in which to draw the chart.
			  element: 'rainfallChart',
			  // Chart data records -- each entry in this array corresponds to a point on
			  // the chart.
			  data: <?php echo json_encode($json2); ?>,
			  barColors: ['green'],
			  // The name of the data record attribute that contains x-values.
			  xkey: 'year',
			  // A list of names of data record attributes that contain y-values.
			  ykeys: ['rainfall'],
			  // Labels for the ykeys -- will be displayed when you hover over the
			  // chart.
			  labels: ['Rainfall'],
			  hideHover: 'auto'
			});
		
			new Morris.Bar({
			  // ID of the element in which to draw the chart.
			  element: 'motionChart',
			  // Chart data records -- each entry in this array corresponds to a point on
			  // the chart.
			  data: <?php echo json_encode($json3); ?>,
			  barColors: ['blue'],
			  // The name of the data record attribute that contains x-values.
			  xkey: 'year',
			  // A list of names of data record attributes that contain y-values.
			  ykeys: ['motion'],
			  // Labels for the ykeys -- will be displayed when you hover over the
			  // chart.
			  // labels: ['Motion'],
			  hideHover: 'auto'
			});

			new Morris.Bar({
			  // ID of the element in which to draw the chart.
			  element: 'lightingChart',
			  // Chart data records -- each entry in this array corresponds to a point on
			  // the chart.
			  data: <?php echo json_encode($json6); ?>,	
			  barColors: ['#808000'],
			  // The name of the data record attribute that contains x-values.
			  xkey: 'year',
			  // A list of names of data record attributes that contain y-values.
			  ykeys: ['light'],
			  // Labels for the ykeys -- will be displayed when you hover over the
			  // chart.
			  // labels: ['Motion'],
			  hideHover: 'auto'
			});

			new Morris.Bar({
			  // ID of the element in which to draw the chart.
			  element: 'deploymentChart',
			  // Chart data records -- each entry in this array corresponds to a point on
			  // the chart.
			  data: <?php echo json_encode($json7); ?>,
			  barColors: ['#CD5C5C'],
			  // The name of the data record attribute that contains x-values.
			  xkey: 'year',
			  // A list of names of data record attributes that contain y-values.
			  ykeys: ['deploy'],
			  // Labels for the ykeys -- will be displayed when you hover over the
			  // chart.
			  // labels: ['Motion'],
			  hideHover: 'auto'
			});
		</script>
</body>
</html>
