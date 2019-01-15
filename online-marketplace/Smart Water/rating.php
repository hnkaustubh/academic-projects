<?php 
if(isset($_POST)){
	$conn = mysqli_connect('52.53.161.121','tester','password','project_281');
	if(mysqli_query($conn,"INSERT INTO smartwater VALUES('','".$_POST['v1']."','".$_POST['v2']."','".$_POST['v3']."')")){
		echo "1";		
	}else{
		echo "2";
	}
}
?>