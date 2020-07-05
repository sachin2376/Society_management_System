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
<form method="post"  action="update_member.php" > 
<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="a1.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="7%" color="black"><b>Update Member Details</b></font></u> </center>
	</td>
	</div>
</tr>
</table>
<table border="1" align="center">
<tr>
<td>

<table border="0" cellpadding="10" width="100%" height="100%" align="center" cellspacing="19" background="123.jpg">

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Room No:-</td></font>
	<td><select name='flat_no'><option 'value'="A">A</option><option 'value'="B">B</option><option 'value'="C">C</option><option 'value'="D">D</option></select>
		<select name='flat'>
			<option 'value'="1">1</option>
			<option 'value'="2">2</option>
			<option 'value'="3">3</option>
			<option 'value'="4">4</option>
			<option 'value'="5">5</option>
			<option 'value'="6">6</option>
			<option 'value'="7">7</option>
			<option 'value'="8">8</option>
			<option 'value'="9">9</option>
			<option 'value'="10">10</option>
			</select>&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Get_details"></td>
</tr>

<?php
		
		if(isset($_POST['submit']))
		{
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$db="society";
			$flat_no=$_POST['flat_no'];
			$flat=$_POST['flat'];
			$room=$flat_no.$flat;
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
</form>
<form action="update_member1.php" method="post">
<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Room No :-</td></font>
	<td><input type="hidden" name="room" value="<?php echo $row['room_no'];?>"><?php echo $row['room_no'];?></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Name:-</td></font>
	<td><input type="hidden" name="name" value="<?php echo $row['name'];?>"><?php echo $row['name'];?></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Contact No:-</td></font>
	<td><input type="hidden" name="con" value="<?php echo $row['contact'];?>"><?php echo $row['contact'];?></td>
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> E-mail :-</td></font>
	<td><input type="hidden" name="mail" value="<?php echo $row['email'];?>"><?php echo $row['email'];?></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Join Date :-</td></font>
	<td><input type="hidden" name="jd" value="<?php echo $row['join_date'];?>"><?php echo $row['join_date'];?></td>
</tr>

<tr>
	<td colspan='2' align='center'><b><input type="submit" name="update" value="Update these details"></td>
</tr>


</table>
<div class="container">
<table border="2" cellpadding="10" width="100%" height="80px" align="center" background="a1.jpg">
<tr border="1">
	<div class="container">
	
	</td>
	<td align="center"><a class="btn"  href="left_menu.php" value="Back">BACK</td>
	</div>
	</div>
</tr>
</table>
	<?php
			}
			mysqli_close($con);	
		}	
	?>

<div class="container">
</table>
</table>

<div class="container"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align="center"><a class="btn" href="left_menu.php" >BACK</p>
</div>
</div>
</form>
</body>
</html>