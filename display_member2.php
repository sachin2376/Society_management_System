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
<body background="a1.jpg">
<form method="post"  action="display_member2.php" > 
<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="a1.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="6%" color="black"><b>Member Details
	</font></u> </center>
	<?php
		session_start();
		?>
		<font align="Right"><h6><?php echo "Welcome   ".$_SESSION['member_user'] ?></h6></font>
	</td>
	
	</div>
</tr>
</table>
<br><br>
<table border="1" align="center">
<tr>
<td>

<table border="0" cellpadding="10" width="100%" height="100%" align="center" cellspacing="19" background="a1.jpg">

<?php
		
		if(isset($_POST['submit']))
		{
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$db="society";
			$user=$_SESSION['member_user'];
			$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
			if(!$con)
			{
				die(mysqli_error($con));
			}
			//$sql="select * from member where room_no='$room'";
			$sql="select * from member where email='$user'";
			$result=mysqli_query($con,$sql);
			if(($row=mysqli_num_rows($result))==0)
			{
				echo '<script>alert("No recods found")</script>';
			}
			while($row=mysqli_fetch_array($result))
			{
				
		?>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Room No:-</td></font>
	<td><?php echo $row['room_no'];?></td>	
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Name:-</td></font>
	<td><?php echo $row['name'];?></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Contact No:-</td></font>
	<td><?php echo $row['contact'];?></td>
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> E-mail :-</td></font>
	<td><?php echo $row['email'];?></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Join Date :-</td></font>
	<td><?php echo $row['join_date'];?></td>
</tr>

</table>
		<?php
			}
			mysqli_close($con);	
		}
	?>


</table>
</table>

<div class="container"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align="center"><a class="btn" href="left_menu2.php" >BACK</p>
</div>
</form>
</body>
</html>