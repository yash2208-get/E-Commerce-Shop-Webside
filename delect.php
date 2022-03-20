<?php
	require_once "con1.php";
$id=$_REQUEST["id"]; 
$query="Delete from add_to_card where id= '" . $id ."'";
mysqli_query($con,$query);
header("Location:detail1.php");


?>