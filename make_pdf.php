<?php

	require_once(__DIR__ . '/vendor/autoload.php');
	require_once('functions.php');

	// Grab variables
	$firstName = $_POST['first_name'];
	$lastName = $_POST['last_name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	// Create new PDF instance
	$mpdf = new mPDF();

	// Create our content
	$data = '';

	$data .= '<h1>Your Details</h1>';


	// Add data
	$data .= '<strong>First Name</strong> ' . $firstName . '<br>';
	$data .= '<strong>Last Name</strong> ' . $lastName . '<br>';
	$data .= '<strong>Email</strong> ' . $email . '<br>';
	$data .= '<strong>Telephone</strong> ' . $phone . '<br>';

	if($message)
	{
		$data .= '<strong>Message</strong> ' . $message . '<br>';
	}

	// Write to PDF
	$mpdf->WriteHTML($data);

	$fileName = 'Your Details.pdf';

	// I - Inline
	// D - Download
	// F - File
	// S - String
	$dest = 'F';


	// Output to browser
	$mpdf->Output($fileName, $dest);

	redirect('/mpdf_v6/index.php');

?>