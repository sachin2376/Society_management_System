<!DOCTYPE html>
<html>
<head>
	
	<title> Notice Detail</title>
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
<form name="myform" method="post"  action="display_notice.php" > 
<table border="1" cellpadding="10" width="100%" height="100%" align="center" background="abc.jpg">
<tr>
		<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="7%" color="black"><b>Notice Details</b></font></u> </center>
	</td>
	</div>
</tr>
</table><br><br>
<table border="1" align="center">
<tr>
<td>

<table border="0" cellpadding="25" width="100%" height="100%" align="center" cellspacing="19" background="abc.jpg">

<tr>
	<b><td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Notice ID:-</td></font>
	<td><input type="text" name="nid" size="25">&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Get_details"></td>
</tr>
<?php
		
		if(isset($_POST['submit']))
		{
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$db="society";
	
			if(!empty($_POST['nid']))
			{
				$id=$_POST['nid'];
				$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$con)
				{
					die(mysqli_error($con));
				}
				$sql="select * from notice where n_id='$id'";
				
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
					
		?>


<tr>
	<b><td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Description:-</td></font>
	<td><textarea rows="3" readonly="readonly" name="desc" cols="30" ><?php echo $row['description'];?></textarea> </td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Date:-</td></<td></font>
	<td><input type="date" readonly="readonly" name="date" size="25" value="<?php echo $row['date'];?>"></td>
</tr>


<tr>
	<td align="right"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">Staff id:-</td></<td></font>
	<td><input type="date" readonly="readonly" name="date" size="25" value="<?php echo $row['staff_id'];?>"></td>
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
	?>

<div class="container">
<table border="2" cellpadding="10" width="640" height="80px" align="center" background="abc.jpg">
<tr border="1">
	<div class="container">
	<td align="center"><input class="btn" type ="submit" name="display" value="All Notices"> </td>
	<?php
		if(isset($_POST['display']))
		{
			header("location:display_all_notices.php");
		}
	?>
	
	<td align="center"><a class="btn"  href="left_menu.php" value="Back">BACK</td>
	</div>
	</div>
</tr>
</table>
</form>
</body>
</html>