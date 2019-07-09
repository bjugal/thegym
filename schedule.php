<?php
require 'server.php';
if(isset($_POST['submit2']))
{
	$username=$_POST['username'];
	$SQL = $conn->prepare('SELECT * FROM schedule WHERE m_username = ?');
 	$SQL->bind_param('s', $username);
 	$SQL->execute();
 	$result = $SQL->get_result();
 	 if ($result->num_rows == 0){
    $GLOBALS['error_mssg']='no such member';
 	}
 	else
	{
		$db_field = $result->fetch_assoc();
		$sid=$db_field['s_id'];
		$day=$_POST['day'];
		$st=$_POST['st'];
		$hrs=$_POST['hrs'];
		$aid=$_POST['id'];
		$inst=$_POST['inst'];

		$sql = "INSERT INTO timetable (s_id, day, start_time, hrs, a_id, note)
		VALUES ('$sid', '$day', '$st', '$hrs', '$aid', '$inst')";
      $result=mysqli_query($conn,$sql);
      if(!$result){
        $GLOBALS['error_mssg']='not added';
      }
      else{
        $GLOBALS['error_mssg']='successfull';

      } 

	}	
	//print($error_mssg);
	header('location:trainer.php');
}	


else if(isset($_POST['submit']))
{

	$pieces = explode(" ", $_POST['submit']);
	$sql = 'DELETE FROM timetable WHERE s_id="'. mysqli_real_escape_string($conn, $pieces[0] ) .'" and a_id="'. mysqli_real_escape_string($conn, $pieces[1] ) .'"';
	$result=mysqli_query($conn,$sql);
	if(!$result){
        $GLOBALS['error_mssg']='not deleted';
    }
    else{
        $GLOBALS['error_mssg']='successfull';

    }
    //print($error_mssg);
    header('location:trainer.php');
}


else if(isset($_POST['submit1']))
{

	$pieces = explode(" ", $_POST['submit1']);
	$sid=$pieces[0];
	$st=$_POST['st'];
	$hrs=$_POST['hrs'];
	$aid=$_POST['id'];
	$inst=$_POST['inst'];

	$sql="UPDATE timetable SET start_time = '$st', hrs = '$hrs', a_id='$aid',note='$inst' WHERE s_id = '". mysqli_real_escape_string($conn, $pieces[0] ) ."' and a_id='". mysqli_real_escape_string($conn, $pieces[1] ) ."' and day = '". mysqli_real_escape_string($conn, $pieces[2] ) ."'";

	// $sql = 'UPDATE timetable SET start_time="$st", hrs="$hrs", a_id="$aid" WHERE s_id="'. mysqli_real_escape_string($conn, $pieces[0] ) .'" and a_id="'. mysqli_real_escape_string($conn, $pieces[1] ) .'"';
     
     $result=mysqli_query($conn,$sql);	

	if(!$result){
        $GLOBALS['error_mssg']='not updated';
    }
    else{
        $GLOBALS['error_mssg']='successfull';

    }
    //print($error_mssg);
    header('location:trainer.php');
}
?>