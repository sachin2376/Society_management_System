<!DOCTYPE html>
<html>
<head>
	
	<title> Staff Detail</title>
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
  background-color: black;
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
<body background="abc.jpg">
<form name="myform" method="post" action="display_Staff.php" " > 

<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="abc.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="7%" color="black"><b>Staff Details</b></font></u> </center>
	</td>
	</div>
</tr>
</table><br><br><br><br>
<table border="1" align="center">
<tr>
<td>

<table border="0" cellpadding="10" width="100%" height="100%" align="center" cellspacing="19" background="abc.jpg">

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Staff ID:-</td></font>
	<td><input type="text" name="id" size="25">&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Get_details"></td>
</tr>


<?php
		
		if(isset($_POST['submit']))
		{
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$db="society";
	
			if(!empty($_POST['id']))
			{
				$id=$_POST['id'];
				$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$con)
				{
					die(mysqli_error($con));
				}
				$sql="select * from staff where staff_id='$id'";				
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
					
		?>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Name:-</td></font>
	<td><input type="text" name="aname" size="25" value="<?php echo $row['sname'];?>"></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Contact No:-</td></font>
	<td><input type="tel" name="amob" size="25" value="<?php echo $row['contact'];?>">
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> Address :-</td></font>
	<td><input type="text" name="aadd" size="25" value="<?php echo $row['address'];?>">
</tr>

<tr>
		<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> E-mail :-</td></font>
		<td><input type="text" name="email" size="25" value="<?php echo $row['email'];?>">
	</tr>
</td>

<tr>
		<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> </td>
	</tr>
</tr>


</table>

<?php
			}
			mysqli_close($con);	
		}
		else
		{
			echo '<script>alert("Enter id first!!")</script>';
		}
	}
	?>

</table>
</table>

<div class="container"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align="center"><a class="btn" href="left_menu.php" >BACK</p>
</div>
</form>
</body>
</html>