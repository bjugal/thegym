<?php
require 'server.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$p_id = $_POST['p_id'];
$pname=$_POST['pname'];
$duration = $_POST['duration'];
$amount = $_POST['amount'];
$description = $_POST['description'];
if($p_id !=''){
//Insert Query of SQL
$SQL="Insert into packages(p_id,pname,duration,amount,description) values('$p_id','$pname','$duration','$amount','$description')";
$result=mysqli_query($conn,$SQL);
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

else if(isset($_POST['submit1']))
{
	$p_id=$_POST['p_id'];
	$SQL='DELETE FROM packages WHERE p_id="'. mysqli_real_escape_string($conn, $p_id ) .'"';
	$result=mysqli_query($conn,$SQL);	
}

header('Location:admin.php');
mysqli_close($conn); // Closing Connection with Server
?>