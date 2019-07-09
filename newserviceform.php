<?php
require 'server.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$a_id = $_POST['a_id'];
$name = $_POST['a_name'];
$content = $_POST['a_content'];
if($name !=''){
$SQL="Insert into activities(a_id,name,content) values('$a_id','$name','$content')";
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
	$a_id=$_POST['a_id'];
	$SQL='DELETE FROM activities WHERE a_id="'. mysqli_real_escape_string($conn, $a_id ) .'"';
	$result=mysqli_query($conn,$SQL);	
}
header('Location:admin.php');
 // Closing Connection with Server
?>