<?php

$db = new mysqli('52.53.161.121','tester','password','project_281');

if (isset($_GET['article'], $_GET['rating'])) {
	$article = (int)$_GET['article'];
	$rating = (int)$_GET['rating'];

	if(in_array($rating, [1,2,3,4,5])){
		$exists = $db->query("SELECT id FROM articles WHERE id = {$article}")->num_rows ? true : false;

		if ($exists) {
			$db->query("INSERT INTO articles_ratings (article,rating) VALUES({$article},{$rating})");
		}
	}
	header('Location: article.php?id=' .$article);
}

?>