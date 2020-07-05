<html>
	<form action="staff_update.php" method="post">
		Enter id :- <input type="text" name="id"><br><br>
		<input type="submit" value="Get details" name="submit"><br><br><br>		
		<input type="submit" name="update" value="update"><br><br>
		<?php
		
		if(isset($_POST['submit']))
		{
			if(!empty($_POST['id']))
			{
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$db="society";
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
		
		STAFF ID <input type="text" name="id" value="<?php echo $row['staff_id'];?>"><br><br>			
		Staff NAME :- <input type="text" name="name" value="<?php echo $row['sname'];?>"><br><br>
		Email :- <input type="text" name="email" value="<?php echo $row['email'];?>"><br><br>
		Address :- <input type="text" name="address" value="<?php echo $row['address'];?>"><br><br>
		Contact :- <input type="text" name="contact" value="<?php echo $row['contact'];?>"><br><br>
		
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
				//echo "HELLO";
				$id=$_POST['id'];
			//	echo "ID :- $id";
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
					header("location:display.php");
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
		
	</form>
	
</html>



