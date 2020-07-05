<!DOCTYPE html>
<html>
<head>	
	<title> Member Form </title>

<style>

.btn
	{
	 position: absolute;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
	background-color: rgb(248, 238, 211);
	font-family: "Comic Sans MS", cursive, sans-serif;
    font-size: 16px;
    padding: 8px 23px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
    text-align: center;
	font-size: 25px;
	}
	
.container .btn:hover 
{
  background-color: rgb(0, 0, 0);
  color: white;
}

.btn1
{
	border-radius: 5px;
    background-color: rgb(245, 243, 237);
	font-family: "Comic Sans MS", cursive, sans-serif;
    font-size: 20px;
    padding: 7px 25px;
	cursor: pointer;
}	

</style>
</head>
<body>
<body background="abc.jpg">
<form method="post"  action="update_member1.php" > 
<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="abc.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="7%" color="black"><b>Member Details</b></font></u> </center>
	</td>
	
	</div>
</tr>
</table>
<br><br>
<table border="1" align="center">
<tr>
<td>

<?php
		if(isset($_POST['update']))
		{
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$db="society";
			$room=$_POST['room'];
			$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
			if(!$con)
			{
				die(mysqli_error($con));
			}
			$sql="select * from member where room_no='$room'";
		
			$result=mysqli_query($con,$sql);
			if(($row=mysqli_num_rows($result))==0)
			{
				echo '<script>alert("No recods found")</script>';
			}
			while($row=mysqli_fetch_array($result))
			{
				
		?>


<table border="0" cellpadding="10" width="100%" height="100%" align="center" cellspacing="19" background="123.jpg">

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black" value="<?php echo $room;?>">Room No:-</td></font>
	<td><input type="hidden" name="room" value="<?php echo $row['room_no'];?>"><?php echo $row['room_no'];?></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Name:-</td></font>
	<td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Contact No:-</td></font>
	<td><input type="text" name="con" value="<?php echo $row['contact'];?>"></td>
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> E-mail :-</td></font>
	<td><input type="text" name="mail" value="<?php echo $row['email'];?>"></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Join Date :-</td></font>
	<td><input type="text" name="jd" value="<?php echo $row['join_date'];?>">&nbsp;&nbsp;&nbsp;<input type="submit" name="update1" value="UPDATE"></td>
</tr>

</table>
	<?php
			}
			mysqli_close($con);	
		}	
		else if(isset($_POST['update1']))
		{	
			$name=$_POST['name'];
			$contact=$_POST['con'];
			$mail=$_POST['mail'];
			$jdate=$_POST['jd'];
			if(!empty($_POST['name']) AND !empty($_POST['con']) AND !empty($_POST['mail']) AND !empty($_POST['jd']))
			{	 
				
				$room=$_POST['room'];
					
					$dbhost="localhost";
					$dbuser="root";
					$dbpass="";
					$db="society";
					
					
					$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
					if(!$con)
					{
						die(mysqli_error($con));
					}
					
					//$room_no=$_POST['room'];
					$name=$_POST['name'];
					$contact=$_POST['con'];
					$mail=$_POST['mail'];
					$jdate=$_POST['jd'];
		
					
					
					$sql="UPDATE `member` SET `name`='$name',`contact`='$contact',`email`='$mail',`join_date`='$jdate' WHERE `room_no`='$room' ";
					$result=mysqli_query($con,$sql);
					
					
					if(!$result)
					{
						echo mysqli_error($con);
						echo '<script>alert("update Unsuccessful!!")</script>';
					}
					else
					{
						echo '<script>alert("Values Updated Successfully");
						if(confirm("Want to update more ?"))
						{
							window.location.href="update_member.php";
						}
						else
						{
							window.location.href="left_menu.php";
						}
						</script>';
					}
					
				
			}
			else
				{
					echo '<script>alert("Get Details first!!")</script>';
				}
		
	}
			
	
	?>
</table>
<br>
	<div class="container">
<table border="2" cellpadding="10" width="530" height="80px" align="center" background="abc.jpg">
<tr border="1">
	<div class="container">
	<td align="center"><a class="btn" href="update_member.php" >BACK</td>
	</div>
	</div>
</tr>
</table> 

</form>
</body>
</html>