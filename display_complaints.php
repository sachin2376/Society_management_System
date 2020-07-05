<!DOCTYPE html>
<html>
<head>
	<title> Complaints Form </title>
<style>

.btn
	{
	 position: absolute;
    transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    background-color: rgb(243, 242, 236) ;
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
<form name="myform" method="post" action="display_complaints.php"> 
<form action="avocatedb.php" method="POST">
<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="abc.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="7%" color="black"><b>Complaint Details</b></font></u> </center>
	</td>
	</div>
</tr>
</table><br><br>
<table border="1" align="center">
<tr>
<td>

<table border="0" cellpadding="10" width="100%" height="100%" align="center" cellspacing="19" background="123.jpg">

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Complaint ID:-</td></td></b>
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
				$sql="select * from complaints where c_id='$id'";				
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
					
		?>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Complaint desc.:-</td></b>
	<td><textarea readonly="readonly" name="cdesc" rows="3" cols="25" ><?php echo $row['complaint_desc'];?></textarea></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Complaint Date:-</td></font>
	<td><input type="date" readonly="readonly" name="cdate" size="25" value="<?php echo $row['complaint_date'];?>">
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Status:-</td></font>
	<td><input type="text" readonly="readonly" name="status" size="25" value="<?php echo $row['status'];?>">
</tr>

<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> Member Id:-</td></font>
	<td><input type="text" readonly="readonly" name="mid" size="25" value="<?php echo $row['room_no'];?>">
</tr>


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

<div class="container">
<table border="1" cellpadding="10" width="100%" height="80px" align="center" background="abc.jpg">
<tr border="1">
	<div class="container">
	<td align="center"><input class="btn" type ="submit" name="display" value="All Complaints"> </td>
	<?php
		if(isset($_POST['display']))
		{
			header("location:display_all_complaints.php");
		}
	?>
	
	
	
	<td align="center"><a class="btn" href="left_menu.php" value="back">BACK </td>
	</div>
	</div>
</tr>
</table>
</form>
</body>
</html>