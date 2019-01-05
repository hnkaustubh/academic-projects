<?php

	$value1 = 1;
	$value2 = 2;

	setcookie("First-Cookie", $value1, time()+60*60);
	setcookie("Second-Cookie", $value2, time()+60*60);

	foreach ($_COOKIE as $key => $value) {
		echo $key." ".$value."<br>";
	}

?>