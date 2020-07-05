<?php
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	$con=mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	
	$sql="Select * from `visitors`";
	$retval=mysqli_query($con,$sql);
	?>
	<html>
	<head>
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
  background-color: rgb(1, 1, 1);
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
	
	
	<table border="5" cellpadding="10" width="1000" height="100" align="center" background="a1.jpg">
	<tr>
	<td align="center">	
	<center><u><font face="Comic Sans MS, cursive, sans-serif" size="6%" color="black"><b>All Visitors Details</b></font></u> </center>
	</td>
	</div>
	</tr>
	</table>
	
	
	
	<table border="5" border="1" cellpadding="5" width="1000" height="70%" align="center" background="a1.jpg">
	
	<tr>
		<th align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">visitor Id </th>
		<th align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black">visitor name </th>
		<th align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> in time </th>
		<th align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> out time </th>
		<th align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> reason </th>
		<th align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="5%" color="black"> flat number </th>
	</tr>
	<?php
	while($row=mysqli_fetch_array($retval))
	{
		?>
		<tr>
			<td align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="3%" color="black"><?php echo $row['vid']?></td>
			<td align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="3%" color="black"><?php echo $row['vname']?></td>
			<td align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="3%" color="black"><?php echo $row['in_time']?></td>
			<td align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="3%" color="black"><?php echo $row['out_time']?></td>
			<td align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="3%" color="black"><?php echo $row['reason']?></td>
			<td align="center"><b><font face="Comic Sans MS, cursive, sans-serif" size="3%" color="black"><?php echo $row['room_no']?></td>
		</tr>
		<?php
	}
?>

</table>

<table border="2" cellpadding="10" width="1000" height="80px" align="center" background="a1.jpg">
<tr border="1">
	<div class="container">
	<td align="center"><a class="btn" href="left_menu1.php" >BACK</td>
	</div>
	</div>
</tr>
</table>
</body>
<html>