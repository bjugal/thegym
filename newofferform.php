<?php
require 'server.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$o_id = $_POST['o_id'];
$name = $_POST['name'];
$description = $_POST['description'];
if($o_id !=''){
//Insert Query of SQL
$SQL="Insert into offer(o_id,name,description) values('$o_id','$name','$description')";
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
	$o_id=$_POST['o_id'];
	$SQL='DELETE FROM offer WHERE o_id="'. mysqli_real_escape_string($conn, $o_id ) .'"';
	$result=mysqli_query($conn,$SQL);	
}
header('Location:admin.php');
mysqli_close($conn); // Closing Connection with Server
?>