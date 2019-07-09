<?php
require 'server.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
 $td=$_POST['td_username'];
 $m=$_POST['m_username'];
 $SQL = $conn->prepare('SELECT * FROM td WHERE username = ?');
 $SQL->bind_param('s', $td);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows == 0){
    $error_mssg='no such trainer';
 }
 else
{

	$sql = "UPDATE schedule SET td_username='$td' WHERE m_username='$m'";
	$result=mysqli_query($conn,$sql);

}
}
header('Location:admin.php');
 // Closing Connection with Server
?>