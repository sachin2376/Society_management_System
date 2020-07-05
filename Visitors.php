<?php
	require('mailer/mail.php');
	session_start();
	$user=$_SESSION['staff_user'];
	$flat_no=$_POST['flat_no'];
	$flat=$_POST['flat'];
	$room=$flat_no.$flat;
	echo $room;
	$name=$_POST['name'];
	$outdate=$_POST['outdate'];
	$in_time=$_POST['intime'];
	$out_time=$_POST['outtime'];
	

	
	
	$reasonv=$_POST['mname'];
	$room1=$room;
	$t=date("Hi");
	$t1=date("dmy");
	$vid=$room1.' '.$t.' '.$t1 ;


	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con)
	{
		die(mysqli_error($con));
	}

	  
	$sql="select staff_id from staff where email = '$user'";
	$retval=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($retval);
	$sid=$row['staff_id'];
	echo "here";
	


	
	$sql1="INSERT INTO visitors(`vid`, `vname`, `in_time`, `out_time`,`outdate`, `reason`, `room_no`, `staff_id`) VALUES ('$vid','$name','$in_time','$out_time','$outdate','$reasonv','$room','$sid')";
	
	$retval=mysqli_query($con,$sql1);
	if($retval)
	{
		echo '<script>alert("Insertion Successful");
				if(confirm("Want to Add more ?"))
				{
					window.location.href="Visitors.html";
				}
				else
				{
					window.location.href="left_menu1.php";
				}
			</script>';
		/*if(!mysqli_query($con,$s)){
			echo '<script>alert("mysqli_error($con) 1")</script>';
		}
		else
		{
			$msg = '<h1>Hi! '.$name.' </h1><p>Welcome to Our society.<br/><h3>Thankyou!</h3></p>';
                    $alt_msg = 'Hi! '.$name.'\nYour user id is'.$em.'and password is '.$em.'\nThank you!';
            mail($em, "Registered member", $msg, $alt_msg);
		}*/
		//header("Location:Member.html");	
	}
	else
	{
		echo '<script type="text/javascript">alert("' . mysqli_error($con) . '");
		window.location.href="Visitors.html";
		</script>';
		
	}
	
?>