<html>
	<form action="member_display.php" method="post">
		Enter id :- <input type="text" name="id"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="Get details" name="submit"><br><br>
		<input type="submit" name="update" value="update"><br><br>
		
		<?php
		
		if(isset($_POST['submit']))
		{	$flag=1;
			echo "<Hello>";
			$dbhost="localhost";
			$dbuser="root";
			$dbpass="";
			$db="society";
	
			if(!empty($_POST['id']))
			{
				$id=$_POST['id'];
				echo "ID :- $id";
				$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$con)
				{
					die(mysqli_error($con));
				}
				$sql="select * from member where member_id='$id'";
				
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
					
		?>
		
		ID <input type="text" name="id" value="<?php echo $row['member_id'];?>"><br><br>			
		NAME :- <input type="text" name="name" value="<?php echo $row['name'];?>"><br><br>
		Contact :- <input type="text" name="contact" value="<?php echo $row['contact'];?>"><br><br>
		Email :- <input type="text" name="email" value="<?php echo $row['email'];?>"><br><br>
		Room :- <input type="text" name="room_no" value="<?php echo $row['room_no'];?>"><br><br>
		Bill Id :- <input type="text" name="bid" value="<?php echo $row['bill_id'];?>"><br><br>
		Join Date :- <input type="text" name="join_date" value="<?php echo $row['join_date'];?>"><br><br>
		Leave date :- <input type="text" name="leave_date" value="<?php echo $row['leave_date'];?>"><br><br>
		
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
		if(!empty($_POST['name']) AND !empty($_POST['contact']) AND !empty($_POST['email']) AND !empty($_POST['room_no']) AND !empty($_POST['bid']) AND !empty($_POST['join_date']) AND !empty($_POST['leave_date']))
		{	
		//echo "Inside";
			if(!empty($_POST['id']))
			{
				echo "HELLO";
				$id=$_POST['id'];
				echo "ID :- $id";
				$dbhost="localhost";
				$dbuser="root";
				$dbpass="";
				$db="society";
				
				
				$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
				if(!$con)
				{
					die(mysqli_error($con));
				}
				
				$name=$_POST['name'];
				$contact=$_POST['contact'];
				$mail=$_POST['email'];
				$room=$_POST['room_no'];
				$bill=$_POST['bid'];
				$jdate=$_POST['join_date'];
				$ldate=$_POST['leave_date'];
				
				echo "<br><br>".$name."<br>";
				echo $contact."<br>";
				echo $mail."<br>";
				echo $room."<br>";
				echo $bill."<br>";
				echo $jdate."<br>";
				echo $ldate."<br>";
				
				
				$sql="UPDATE `member` SET `name`='$name',`contact`='$contact',`email`='$mail',`room_no`=$room,`bill_id`='$bill',`join_date`='$jdate',`leave_date`='$ldate' WHERE `member_id`='$id' ";
				$result=mysqli_query($con,$sql);
				
				
				if(!$result)
				{
					echo mysqli_error($con);
					echo '<script>alert("update unsuccessfull!!")</script>';
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



