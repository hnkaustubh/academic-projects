<?php 
if(isset($_POST)){
	$conn = mysqli_connect('18.191.245.65','testuser','password','proj272');
	if(mysqli_query($conn,"INSERT INTO publicwifi VALUES('','".$_POST['v1']."','".$_POST['v2']."','".$_POST['v3']."')")){
		echo "1";		
	}else{
		echo "2";
	}
}
?>