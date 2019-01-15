<?php
	$time_in_12_hour_format  = date("g:i a", strtotime("13:30"));
	echo $time_in_12_hour_format;

	// .$row["Temp"]." ".$row["Rain"]." "

	// select cluster,node,avg(rain_guage),avg(temperature),month from clusters where year = 2001 group by month,cluster,node

	// $today="2007-03-01";
	// $nextday=strftime("%Y-%m-%d", strtotime("$today +1 day"));
	// echo $nextday;

	// $start = '2014-06-01 14:00:00';

	// for ($i=0; $i <50 ; $i++) { 
	// 	echo date('Y-m-d H:i',strtotime('+1 hour +20 minutes',strtotime($start)))."<br>";
	// }

	// $start = '2017-06-01 14:00:00';
	// $end = '2018-06-01 14:00:00';
	// for ($time = $start; $time <= $end; $time++) {
	//   echo date("H:00", mktime($time+1)).'<br>';
	// }
	
	// echo date('m/d/Y H:i:s', time())."<br>";
	// $newtime = $start = strtotime("10 September 2001");
	// echo date("Y-m-d", $newtime);
	// for ($i=0; $i <10; $i++) { 
	// 	$hours = 4;
	// 	$newtime = $newtime + ($hours * 60 * 60); // hours; 60 mins; 60secs
	// 	echo date('m/d/Y H:i:s', $newtime)."<br>";
	// }

	// $hours = 4;
	// echo date('m/d/Y H:i:s', time())."<br>";
	// $newtime = time() + ($hours * 60 * 60); // hours; 60 mins; 60secs
	// echo date('m/d/Y H:i:s', $newtime);
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

</body>
</html>