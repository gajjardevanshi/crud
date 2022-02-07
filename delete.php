<?php
	include 'db.php';
	$id=$_GET['id'];
		
	$sql="delete from task where id = '$id'";
	
	
	
	
	if($db->query($sql)){
		header("Location: index.php");
	};

	
?>