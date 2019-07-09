<?php
require 'server.php';
session_start();
date_default_timezone_set('Asia/Kolkata');
 $today= date("d/m/y");
 $time=date("h:i:s");

$day=date('w');
if($day==1)
	$day="monday";
else if($day==2)
	$day="tuesday";
else if($day==3)
	$day="wednesday";
else if($day==4)
	$day="thursday";
else if($day==5)
	$day="friday";
else if($day==6)
	$day="saturday";
else if($day==7)
	$day="sunday";



 $sql = 'SELECT * FROM timetable WHERE s_id in (select s_id from schedule where m_username="'. mysqli_real_escape_string($conn, $_SESSION['username'] ) .'") and day="'. mysqli_real_escape_string($conn, $day ) .'"';
	$username=$_SESSION['username'];
 $query = mysqli_query($conn, $sql);

  while ($row = mysqli_fetch_array($query))
    {		
    	$start=$row['start_time'];
		$val=$row['hrs']*60;
		$end = strtotime("+$val minutes", strtotime($start));


        if($time>=$start&&$time<=$end)
        {
        	$sql = "INSERT INTO attendance (username,`date`,timeslot,attendance)
      			VALUES ('$username','$today','$start','1')";
      		$result=mysqli_query($conn,$sql);
        }
        else if($time>$end)
        {
        	$sql = "INSERT INTO attendance (username,`date`,timeslot,attendance)
      			VALUES ('$username','$today','$start','0')";
      		$result=mysqli_query($conn,$sql);
        }    


    }  

header('location:member.php');
?>	