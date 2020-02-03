<?php

	include('vendor/autoload.php');

	$mpdf = new mPDF();

	$data = 'Lorem ipsum...';

	$fileName = 'test.pdf';

	// I - Inline		$fileName = 'File Name.pdf'
	// D - Download		$fileName = 'File Name.pdf'
	// F - File			$fileName = 'C:\Folder\File Name.pdf'
	// S - String		$fileName is ignored
	$dest = 'D';


	$mpdf->WriteHTML($data);
	$mpdf->Output($fileName, $dest);

?>

