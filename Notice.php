<?php
	$id=$_POST['nid'];
	$desc=$_POST['desc'];
	$date=$_POST['date'];
	$staff_id=$_POST['sid'];
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con)
	{
		die(mysqli_error($con));
	}
	
	$sql="INSERT INTO notice(`n_id`, `description`, `date`,`staff_id`) VALUES ('$id','$desc','$date','$staff_id')";
	$retval=mysqli_query($con,$sql);
	if($retval)
	{
		echo "Values inserted successfully";
		header("location:left_menu.html");
	}
	else
	{
		echo mysqli_error($con);
	}
?>