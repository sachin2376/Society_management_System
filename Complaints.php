<?php
	$id=$_POST['id'];
	$desc=$_POST['cdesc'];
	$cdate=$_POST['cdate'];
	$mid=$_POST['mid'];
	$status=$_POST['status'];
	
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con)
	{
		die(mysqli_error($con));
	}
	
	$sql="INSERT INTO complaints(`c_id`, `complaint_desc`, `complaint_date`,`status`, `member_id`) VALUES ('$id','$desc','$cdate','$status','$mid')";
	$retval=mysqli_query($con,$sql);
	if($retval)
	{
		echo "Values inserted successfully";
		header("Location:left_menu2.html");
	}
	else
	{
		echo '<script>alert("mysqli_error($con)")</script>';
	}

	
?>