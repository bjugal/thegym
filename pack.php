<?php
 require 'server.php';
$GLOBALS['error_mssg']=' ';
date_default_timezone_set('Asia/Kolkata');
session_start();
$_SESSION["register"]=-1;


if(isset($_POST['submit'])){
 $username=$_SESSION["username"];
 $p_id=$_POST['submit'];
 

 $SQL = $conn->prepare('SELECT * FROM member WHERE username = ?');
 $SQL->bind_param('s', $username);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows == 0){
    $GLOBALS['error_mssg']='username does not exist';
 }
 else
{
      $start=date("y/m/d");
      print($start);
       $SQL = $conn->prepare('SELECT * FROM packages WHERE p_id = ?');
       $SQL->bind_param('s', $p_id);
       $SQL->execute();
       $result = $SQL->get_result();
       $db_field = $result->fetch_assoc();
       $val=$db_field['duration']*60*24*30;   

      $end = strtotime(" +$val minutes", strtotime($start));
      $end=date("y/m/d",$end);
      print("$end");
      $sql = "INSERT INTO member_pack (username, p_id, start_date, end_date) VALUES ('$username', '$p_id', '$start', '$end')";
      $result=mysqli_query($conn,$sql);
      
      if(!$result){
        $GLOBALS['error_mssg']='not added';
      }
      else{
        $GLOBALS['error_mssg']='sign up successfull';
        $_SESSION["register"]=2;
        $_SESSION["username"]=$username;
        
        $sql = "INSERT INTO schedule (m_username) VALUES ('$username')";
        $result=mysqli_query($conn,$sql);

       // print($_SESSION["register"]);
      }    
}
}

header('Location:index.php');

?>

