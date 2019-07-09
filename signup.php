<?php
 require 'server.php';
$GLOBALS['error_mssg']=' ';
if(isset($_POST['submit1'])){
 $username=$_POST['username'];
 $password=$_POST['password3'];
 
 session_start();
 $_SESSION["register"]=-1;

 $SQL = $conn->prepare('SELECT * FROM member WHERE username = ?');
 $SQL->bind_param('s', $username);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows > 0){
    $GLOBALS['error_mssg']='username already exists';
 }
 else
{
  $password2=$_POST['password4'];
  if($password2==$password)
  {

      $fname=$_POST['fname'];
      $mname=$_POST['mname'];
      $lname=$_POST['lname'];    
      $mail=$_POST['email'];
      $contact=$_POST['contact'];
      $gender=$_POST['gender2'];
      $dobday=$_POST['day'];
      $dobmonth=$_POST['month'];
      $dobyear=$_POST['year'];
      $bgroup=$_POST['bgroup'];
      $height=$_POST['height'];
      $weight=$_POST['weight'];

      $sql = "INSERT INTO member (username,password,fname,mname,lname,gender,dobday,dobmonth,dobyear,contact,email,bgroup,height,weight)
      VALUES ('$username','$password','$fname','$mname','$lname','$gender','$dobday','$dobmonth','$dobyear','$contact','$mail','$bgroup','$height','$weight')";
      $result=mysqli_query($conn,$sql);
      if(!$result){
        $GLOBALS['error_mssg']='not added';
      }
      else{
        $GLOBALS['error_mssg']='sign up successfull';
        $_SESSION["register"]=1;
        $_SESSION["username"]=$username;
       // print($_SESSION["register"]);
      }    

  }
  else
  {
    $GLOBALS['error_mssg']='passwords entered do not match';
  }
}
}
//print($error_mssg);
header('Location:index.php');
// mysqli_close($conn); // Closing Connection with Server
?>

