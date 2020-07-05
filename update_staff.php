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
<body background="a1.jpg">
<form name="myform" method="post" action="update_Staff.php" " > 

<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="a1.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="7%" color="black"><b>Staff Details</b></font></u> </center>
	</td>
	</div>
</tr>
</table>
<br><br>
<table border="1" align="center">
<tr>
<td>

<table border="0" cellpadding="10" width="100%" height="100%" align="center" cellspacing="19" background="a1.jpg">

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Staff ID:-</td></font>
	<td><input type="text" name="id" size="25">&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Get_details"></td></td>
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
	<td><input type="text" name="name" size="25" value="<?php echo $row['sname'];?>"></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Contact No:-</td></font>
	<td><input type="tel" name="contact" size="25" value="<?php echo $row['contact'];?>">
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> Address :-</td></font>
	<td><input type="text" name="address" size="25" value="<?php echo $row['address'];?>">
</tr>

<tr>
		<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> E-mail :-</td></font>
		<td><input type="text" name="email" size="25" value="<?php echo $row['email'];?>">&nbsp;&nbsp;&nbsp;<input type="submit" name="update" value="UPDATE"></td>
	</tr>
</td>

<tr>
		<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> 
	</tr>
</td>
</tr>

</table>
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
	
	else if(isset($_POST['update']))
	{	
		if(!empty($_POST['id']) AND !empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['address']) AND !empty($_POST['contact']))
		{
			if(!empty($_POST['id']))
			{
				$id=$_POST['id'];
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$db="society";
				
				
				$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$con)
				{
					die(mysqli_error($con));
				}
				
				$sname=$_POST['name'];
				$email=$_POST['email'];
				$add=$_POST['address'];
				$contact=$_POST['contact'];

				echo "<br><br>".$sname."<br>";
				echo $contact."<br>";
				echo $email."<br>";
				echo $add."<br>";
				
				
				
				$sql="UPDATE `staff` SET `sname`='$sname',`email`='$email',`address`='$add',`contact`=$contact WHERE `staff_id`='$id' ";
				$result=mysqli_query($con,$sql);
				
				
				if(!$result)
				{
					echo mysqli_error($con);
					echo '<script>alert("update1!!")</script>';
				}
				else
				{
					header("location:left_menu.html");
					echo'<script>alert("success!!")</script>';
				}
				
			}
			else
			{
				echo '<script>alert("Enter id first!!")</script>';
			}
		}
		else
		{
			echo '<script>alert("Get Details first!!")</script>';
		}

	}
	
	
	
	
	
	?>




</table>
</table>
</table>
</table>

<div class="container"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<p align="center"><a class="btn" href="left_menu.php" >BACK</p>
</div>
</form>
</body>
</html>