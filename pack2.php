<?php
 require 'server.php';
$GLOBALS['error_mssg']=' ';

session_start();
$_SESSION["register"]=-1;


if(isset($_POST['submit'])){
 $username=$_SESSION["username"];
 $pname=$_POST['submit'];
 

 $SQL = $conn->prepare('SELECT * FROM member WHERE username = ?');
 $SQL->bind_param('s', $username);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows == 0){
    $GLOBALS['error_mssg']='username does not exist';
 }
 else
{
      $sql = "UPDATE member SET pname='$pname' WHERE username='$username'";
      $result=mysqli_query($conn,$sql);
      if(!$result){
        $GLOBALS['error_mssg']='not added';
      }
      else{
        $GLOBALS['error_mssg']='sign up successfull';
        $_SESSION["register"]=2;
        $_SESSION["username"]=$username;
       // print($_SESSION["register"]);
      }    
}
}

header('Location:member.php');

?>
