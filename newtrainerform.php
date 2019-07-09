<?php
require 'server.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
 $username=$_POST['uname'];

 $SQL = $conn->prepare('SELECT * FROM td WHERE username = ?');
 $SQL->bind_param('s', $username);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows == 0){
    $error_mssg='no such trainer';
 }
 else
{
	$salary = $_POST['salary'];
	if($salary !=''){
	$sql = "UPDATE td SET salary='$salary' WHERE username='$username'";
	$result=mysqli_query($conn,$sql);
	if($result){
	echo "Data Inserted successfully...!!";}
	else
	{
		echo "not inserted";
	}

	}
	else{
	echo "Insertion Failed.Some Fields are Blank....!!";
	}
}
}

else if(isset($_POST['submit1']))
{
	$username=$_POST['uname'];
	$sql = 'UPDATE td SET admin=1 WHERE username="'. mysqli_real_escape_string($conn, $username ) .'"';
	$result=mysqli_query($conn,$sql);	
}
	header('Location:admin.php');
 // Closing Connection with Server
?>