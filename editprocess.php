<?php
session_start();
include 'connection.php';


if (isset($_POST['title'],$_POST['abstract'],$_POST['description'],$_POST['name'],$_POST['added_date']))
{
	$title=mysqli_escape_string($conn,$_POST['title']);
	$abstract=mysqli_escape_string($conn,$_POST['abstract']);
	$description=mysqli_escape_string($conn,$_POST['description']);
	$name=mysqli_escape_string($conn,$_POST['name']);
	$added_date=mysqli_escape_string($conn,$_POST['added_date']);

 	if (empty($title) or empty($abstract) or empty($description) or empty($name) or empty($added_date))  {
		echo"all fields are required";
		header('location:addarticle.php');
		exit;
	}
else
{
	$sql="update articles set title = '$title',name='$name',abstract='$abstract', description='$description' where id = $id";

	if(mysqli_query($conn,$sql))
	{
		echo"record saved";
	}
	else{
		echo"record not saved";
	}
}
}
header('location:addarticle.php');
?>