<?php
require 'server.php';
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$eq_id = $_POST['eq_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$manual = $_POST['manual'];
if($name !=''){
$SQL="Insert into equipment(eq_id,name,description,manual) values('$eq_id','$name','$description','$manual')";
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
	$eq_id=$_POST['eq_id'];
	$SQL='DELETE FROM equipment WHERE eq_id="'. mysqli_real_escape_string($conn, $eq_id ) .'"';
	$result=mysqli_query($conn,$SQL);	
}
 header('Location:admin.php');
 // Closing Connection with Server
?>