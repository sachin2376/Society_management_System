<?php

	$flat_no=$_POST['flat_no'];
	$flat=$_POST['flat'];
	$room=$flat_no.$flat;
	$month=$_POST['month'];
	$main=$_POST['maintainance'];
	$lbill=$_POST['lbill'];
	$wbill=$_POST['wbill'];
	$others=$_POST['other'];
	$date=$_POST['date'];
	
	//$t=date("Hi");
	$t1=date("dmy");
	$bid=$room.' '.$t1 ;
	
	
	echo $bid;
	echo $room;
	echo $month;
	echo $main;
	echo $lbill;
	echo $wbill;
	echo $others;
	echo $date;
	
	
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="";
	$db="society";
	echo "here";
	$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
	if(!$con)
	{
		die(mysqli_error($con));
	}
	echo "here2";
	$sq="Select name from member where room_no='$room'";
	$result=mysqli_query($con,$sq);
	$row1=mysqli_fetch_array($result);
	$user=$row1['name'];
	$sql="INSERT INTO `bill_payments`(`bill_id`, `room_no`, `month`, `maintainance`, `light_bill`, `water_bill`, `other`, `date`) VALUES ('$bid','$room','$month',$main,$lbill,$wbill,$others,'$date')";
	$retval=mysqli_query($con,$sql);
	echo "here1";
	if($retval)
	{
		echo "Inside";
		echo '<script>alert("Insertion Successful");
			if(confirm("Want a pdf ?"))
			{
				</script>';
				
				
				ob_start();
				require_once("tcpdf/tcpdf.php");
				$obj_pdf=new TCPDF('P',PDF_UNIT , PDF_PAGE_FORMAT , true , 'UTF-8' ,false);
				$obj_pdf->AddPage();
				$obj_pdf->SetCreator(PDF_CREATOR);
				$obj_pdf->SetTitle("Export HTML Table data to PDF using TCPDF in php");
				$obj_pdf->SetHeaderData('','',PDF_HEADER_TITLE,PDF_HEADER_STRING);
				$obj_pdf->SetHeaderFont(Array(PDF_FONT_NAME_MAIN,'',PDF_FONT_SIZE_MAIN));
				$obj_pdf->SetFooterFont(Array(PDF_FONT_NAME_DATA,'',PDF_FONT_SIZE_DATA ));
				$obj_pdf->SetDefaultMonospacedFont('helvetica');
				$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
				$obj_pdf->SetMargins(PDF_MARGIN_LEFT,'4',PDF_MARGIN_RIGHT);
				$obj_pdf->SetPrintHeader(false);
				$obj_pdf->SetPrintFooter(false);
				$obj_pdf->SetAutoPageBreak(true,10);
				$obj_pdf->SetFont('helvetica','',12);
				
				$content='';
				$content.='
				<h1 align="center">  Bill DETAILS  </h1>
				<table border="2" callspacing="5" cellpadding="5">
				<tr>
					<th> Bill Id </th>
					<th> Month </th>
					<th> Flat </th>
					<th> Owner </th>
					<th> Maintainance </th>
					<th> Light Bill </th>
					<th> Water Bill </th>
					<th> Other charges</th>
					<th> Total </th>
				</tr>
				';
				
				$output='';
				$sql="select * from bill_payments where bill_id='$bid'";
				$retval=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($retval))
				{
					$output.='<tr>
					<td>'.$row["bill_id"].'</td>
					<td>'.$row["month"].'</td>
					<td>'.$row["room_no"].'</td>
					<td>'.$row1["name"].'</td>
					<td>'.$row["maintainance"].'</td>
					<td>'.$row["light_bill"].'</td>
					<td>'.$row["water_bill"].'</td>
					<td>'.$row["other"].'</td>
					<td>'.$row["date"].'</td>
					<td>'.($main+$lbill+$wbill+$others).'</td>
					</tr>
				';
				}
				
				
				$content.=$output;
				$content.='</table>';
				$obj_pdf->writeHTML($content);
		
				$obj_pdf->Output("Sample.pdf","I");
				ob_end_flush();
				
				
				echo '<script>
			}
			else
			{
				if(confirm("Want to Add more ?"))
				{
					window.location.href="Maintanance.html";
				}
				else
				{
					window.location.href="left_menu4.php";
				}
			}
			</script>';
		//header("Location:left_menu4.php");
	}
	else
	{
		echo mysqli_error($con);
		echo '<script type="text/javascript">alert("' . mysqli_error($con) . '")';
	}

	
?>