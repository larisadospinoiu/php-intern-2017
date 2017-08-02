
<?php
include ("conexiune.php");

if(isset($_POST['submit'])){
	$id = '';
	//$name = $_POST['name'];
	$name = mysqli_real_escape_string($link, $_REQUEST['name']);
	$details = mysqli_real_escape_string($link, $_REQUEST['details']);
	$price = mysqli_real_escape_string($link, $_REQUEST['price']);
	$favorit = $_POST['favorite_product'];
	$job = mysqli_real_escape_string($link, $_REQUEST['job']);
	
	$sql = "INSERT INTO products (id, name, details, price, favorite, job, imagine)
	VALUES ('$id','$name','$details','$price','$favorit','$job','$file_name')";

	$id = $name = $details = $price = $job = "";
	
		if(mysqli_query($link,$sql))
		{
			echo "Recors added succesfully" ;			   
		} 
		else
		{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
}
else {	}

$conexiune->close();
?>
 