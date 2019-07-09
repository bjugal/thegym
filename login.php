<?php
 require 'server.php';
if(isset($_POST['submit2'])){
 $username=$_POST['username'];
 $password=$_POST['password'];

 $SQL = $conn->prepare('SELECT * FROM member WHERE username = ?');
 $SQL->bind_param('s', $username);
 $SQL->execute();
 $result = $SQL->get_result();
 if ($result->num_rows != 1){
    $SQL = $conn->prepare('SELECT * FROM td WHERE username = ?');
    $SQL->bind_param('s', $username);
    $SQL->execute();
    $result = $SQL->get_result();
    if($result->num_rows != 1){
      $error_mssg='failed to log in';
    }
    else
    {
       $db_field = $result->fetch_assoc();
       if($db_field['password']==$password){
        session_start();
        $_SESSION['login'] = "1";
        $_SESSION['username'] = $username;
        if($db_field['admin']==1)
          header('Location:redirect.php');
        else
        {  
          $_SESSION['username']=$username; 
          header('Location:trainer.php');
        }
        }
       else{
       $error_mssg='failed to log in';
       print($result);
       //header('Location:index.php');
       }
    }
 }
 else
{
  $db_field = $result->fetch_assoc();
  if($db_field['password']==$password){
    session_start();
    $_SESSION['login'] = "1";
    $_SESSION['username'] = $username;
    header('Location:member.php');

  }
  else{
    $error_mssg='failed to log in';
    header('Location:index.php');
  }
}
}


// mysqli_close($conn); // Closing Connection with Server
?>

