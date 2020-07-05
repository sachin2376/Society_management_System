<?php
require('mailer/mail.php');

	$flat_no=$_POST['flat_no'];
	$flat=$_POST['flat'];
	$name=$_POST['name'];
	$cont=$_POST['con'];
	$em=$_POST['mail'];
	$room=$flat_no.$flat;
	//$bill=$_POST['bill'];
	$in_date=$_POST['jd'];
	//$in_date=date("Y-m-d",strtotime($in_date));
	
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	
	if(!$con)
	{
		die(mysqli_error($con));
	}
	
	$sql="INSERT INTO member(`room_no`, `name`, `contact`, `email`, `join_date`) VALUES ('$room','$name','$cont','$em','$in_date')";
	$s = "INSERT INTO member_login(`member_user`,`member_pass`) VALUES ('$em','$em')";
	$retval=mysqli_query($con,$sql);
	if($retval)
	{
		echo '<script>alert("Insertion Successful");
				if(confirm("Want to Add more ?"))
				{
					window.location.href="member.html";
				}
				else
				{
					window.location.href="left_menu.php";
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
		window.location.href="member.html";
		</script>';
		
	}
?>