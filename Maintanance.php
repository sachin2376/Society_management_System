<?php

	$flat_no=$_POST['flat_no'];
	$flat=$_POST['flat'];
	$room=$flat_no.$flat;
	$month=$_POST['month'];
	$main=$_POST['maintainance'];
	$lbill=$_POST['lbill'];
	$wbill=$_POST['wbill'];
	$others=$_POST['other'];
	$date=$_POST['date'];
	
	$t=date("Hi");
	$t1=date("dmy");
	$bid=$room.' '.$t.' '.$t1 ;
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con)
	{
		die(mysqli_error($con));
	}
	
	$sql="INSERT INTO `bill_payments`(`bill_id`, `room_no`, `month`, `maintainance`, `light_bill`, `water_bill`, `other`, `date`) VALUES ('$bid','$room','$month','$main','$lbill','$wbill','$others','$date'))";
	$retval=mysqli_query($con,$sql);
	if($retval)
	{
		header("Location:left_menu3.php");
	}
	else
	{
		echo '<script>alert("mysqli_error($con)")</script>';
	}

	
?>