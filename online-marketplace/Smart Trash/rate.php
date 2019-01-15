<?php

$db = new mysqli('52.53.161.121','tester','password','project_281');

if (isset($_GET['rating'])) {
	$rating = (int)$_GET['rating'];

	if(in_array($rating, [1,2,3,4,5])){
			$db->query("INSERT INTO stnum (rating) VALUES({$rating})");
	}
	header('Location: smarttrash.php');
}

?>