<?php
	ob_start();
	function fetch_data()
	{
		$output= '';
		$connect= mysqli_connect("localhost","root","","gtpl");
		$sel= "select * from reg";
		$exe= mysqli_query($connect, $sel); 
		while($fetch= mysqli_fetch_array($exe))
		{
			$output .= '
		<tr>
			<td>'.$fetch['uid'].'</td>
			<td>'.$fetch['unm'].'</td>
			<td>'.$fetch['pass'].'</td>
			<td>'.$fetch['gen'].'</td>
		</tr>
					';
		}
	return $output;
	}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>

<body>
<div class="container">
	<h1 align="center"><img src="download.png" align="center" height="100px" width="100px"></h1>
	<h1 align="center"> Export Html table to PDF</h1>
	<table class="table">
	<tr>
	<th width="5%">User Id</th>
	<th width="20%">User Name</th>
	<th width="20%">Password</th>
	<th width="20%">Gen</th>
	</tr>
	<?php
	echo fetch_data();
	?>
	</table>

	<form action="" method="post">
		<input type="submit" name="gen_pdf" value="Generate Pdf File Of Data">
	</form>

</div>
</body>
</html>
<?php
if(isset($_REQUEST['gen_pdf']))
{
	require_once('tcpdf/tcpdf.php');
	$pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
	$pdf->AddPage();
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetTitle('Generate PDF file of data');
	$pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
	$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
	$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
	$pdf->SetDefaultMonospacedFont('helvetica');
	$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
	$pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
	$pdf->SetPrintHeader(false);
	$pdf->SetPrintFooter(false);
	$pdf->SetAutoPageBreak(TRUE, 10);
	$pdf->SetFont('helvetica', '', 12);



	
	
	$data = '<div class="container">
				<h1 align="center"><img src="download.png" align="center" height="100px" width="100px"></h1>
				<h1 align="center"> Export Html table to PDF</h1>
				<table class="table">
					<tr>
					<th width="5%">User Id</th>
					<th width="20%">User Name</th>
					<th width="20%">Password</th>
					<th width="20%">Gen</th>
					</tr>';
					
	$data.=fetch_data();				
	$data.='</table></div>';				

	$pdf->writeHTML($data);
	ob_end_clean();	
	$pdf->Output("insane_data.pdf", "I");
}
?>
