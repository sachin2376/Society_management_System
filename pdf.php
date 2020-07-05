
<?php
	function fetch_data()
	{
		$output='';
		$dbhost="localhost";
		$dbuser="root";
		$dbpass="";
		$db="society";
		$con = mysqli_connect($dbhost,$dbuser,$dbpass,$db);
		if(!$con)
		{
			die(mysqli_error($con));
		}
		$sql="select * from member ORDER BY name ASC";
		
		$result=mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result))
		{
			$output.='
			<tr>
				<td>'.$row["room_no"].'</td>
				<td>'.$row["name"].'</td>
				<td>'.$row["contact"].'</td>
				<td>'.$row["email"].'</td>
				<td>'.$row["join_date"].'</td>
			</tr>
		';
		}
		return $output;
	}
	if(isset($_POST['create_pdf']))
	{
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
		<h1 align="center">  MEMBER DETAILS  </h1>
		<table border="2" callspacing="5" cellpadding="5">
		<tr>
			<th> Room No </th>
			<th> Owner </th>
			<th> Contact </th>
			<th> Email </th>
			<th> Join date </th>
		</tr>
		
		';
		
		$content.=fetch_Data();
		$content.='</table>';
		
		$obj_pdf->writeHTML($content);
		
		$obj_pdf->Output("Sample.pdf","I");
		ob_end_flush(); 
	}
		
	
?>

<html>
	<table border='5'>
		<tr>
			<th> Room No </th>
			<th> Owner </th>
			<th> Contact </th>
			<th> Email </th>
			<th> Join date </th>
		</tr>
		<?php
			
			echo fetch_data();
		
		?>
	</table>
	
	<form method="post">
		<input type="submit" name="create_pdf" value="Create Pdf">
	</form>
</html>
