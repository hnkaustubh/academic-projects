<?php

$db = new mysqli('54.193.22.204','tester','password','project_281');

if (isset($_GET['rating'])) {
	$rating = (int)$_GET['rating'];

	if(in_array($rating, [1,2,3,4,5])){
			$db->query("INSERT INTO slnum (rating) VALUES({$rating})");
	}
	header('Location: smartlamps.php');
}

?>