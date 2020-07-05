<?php
	$id=$_POST['id'];
	$name=$_POST['aname'];
	$contact=$_POST['amob'];
	$addr=$_POST['aadd'];
	$email=$_POST['email'];
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con)
	{
		die(mysqli_error($con));
	}
	
/*	$sql1="SELECT staff_id FROM staff where id=$id";
	$result=mysqli_query($con,$sql1);
	if((mysqli_num_rows($result)) > 0)  
	{
		echo "<h1> TRUE</h1>";
		echo '<script>alert("Duplicate_entry")</script>';
//		header("location:secretary_login.html");  
	}*/
	
	
	
	
	$sql="INSERT INTO staff(`staff_id`, `sname`, `email`, `address`, `contact`) VALUES ('$id','$name','$email','$addr','$contact')";
	$retval=mysqli_query($con,$sql);
	if($retval)
	{
		header("location:left_menu.html");
		echo '<script>alert("Values inserted successfully")</script>';
		echo "<script>setTimeout(\"location.href = 'http://www.forobd2.com';\",1500);</script>";
	}
	else
	{
		echo mysqli_error($con);
	}
?>