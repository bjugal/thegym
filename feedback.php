<?php
require 'server.php';
session_start();
if(isset($_POST['submit']))
{

$content=$_POST['content'];
$username=$_SESSION['username'];
$sql = "INSERT INTO feedback (username,content)
VALUES ('$username','$content')";
      $result=mysqli_query($conn,$sql);
      if(!$result){
        $GLOBALS['error_mssg']='not added';
      }
      else{
        $GLOBALS['error_mssg']='feedback successfull';
      }
}
else{
	 $GLOBALS['error_mssg']='ehehehe';
}
print($error_mssg);
header('Location:member.php');
?>