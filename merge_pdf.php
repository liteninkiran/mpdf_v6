<?php

	require_once(__DIR__ . '/vendor/autoload.php');

	// Define the input files
	$filesIn = array
	(
		'test 1.pdf',
		'test 2.pdf'
	);

	// Find last element of array
	$lastElement = end($filesIn);

	// Define the output file
	$fileOut = 'Merged.pdf';
	$dest = 'D';

	// Create new PDF instance
	$mpdf = new mPDF();

	$mpdf->SetImportUse();

	foreach($filesIn as $f)
	{
		// Set the source file and count number of pages
		$pageCount = $mpdf->SetSourceFile($f);

		// Loop through the pages
		for($i = 1; $i <= $pageCount; $i++)
		{
			// Find the i'th page's template ID
			$importPage = $mpdf->ImportPage($i);

			// Insert page into PDF document
			$mpdf->UseTemplate($importPage);

			// Add a page unless we have reached the last page
			if($i < $pageCount)
			{
				$mpdf->AddPage();
			}
		}

		// Add a page unless we have reached the last file
		if($f != $lastElement)
		{
			$mpdf->AddPage();
		}
	}

	// Write any extra content
	//$mpdf->AddPage();
	//$mpdf->WriteHTML('');

	// Output to browser
	$mpdf->Output($fileOut, $dest);

?>