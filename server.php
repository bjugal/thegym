<?php
$dbname='gms';
$conn=new mysqli('localhost','root','',$dbname);
if(!$conn){
	$error_mssg='not connected';
	print($error_mssg);
	mysqli_close($conn); 
}

?>