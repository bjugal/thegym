<?php
 require 'server.php';
if(isset($_POST['submit3'])){
 $username=$_POST['username'];
 $password=$_POST['password1'];

 $SQL = $conn->prepare('SELECT * FROM td WHERE username = ?');
 $SQL->bind_param('s', $username);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows > 0){
    $error_mssg='username already exists';
 }
 else
{
  $password2=$_POST['password2'];
  if($password2==$password)
  {
      $fname=$_POST['fname'];
      $mname=$_POST['mname'];
      $lname=$_POST['lname'];    
      $mail=$_POST['email'];
      $contact=$_POST['contact'];
      $gender=$_POST['gender1'];
      $dobday=$_POST['day'];
      $dobmonth=$_POST['month'];
      $dobyear=$_POST['year'];
      $experience=$_POST['experience'];
      $sql = "INSERT INTO td (username,password,fname,mname,lname,gender,dobday,dobmonth,dobyear,contact,email,experience,admin)
      VALUES ('$username','$password','$fname','$mname','$lname','$gender','$dobday','$dobmonth','$dobyear','$contact','$mail','$experience','0')";
      $result=mysqli_query($conn,$sql);
      if(!$result){
        $error_mssg='not added';
      }    
  }
  else
  {
    $error_mssg='passwords entered do not match';
  }
}
}
//print($error_mssg);
header('Location:index.php');
// mysqli_close($conn); // Closing Connection with Server
?>

