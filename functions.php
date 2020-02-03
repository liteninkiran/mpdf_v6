<?php

	spl_autoload_register('classAutoLoader');

	function classAutoLoader($class)
	{
		// Store class name in lower case
		$class = strtolower($class);

		// Define file path
		$path = "includes/{$class}.php";

/*
		if(is_file($path) && !class_exists($class))
		{
			require_once($path);
		}
*/
///*
		if(file_exists($path))
		{
			require_once($path);
		}
		else
		{
			die("The file {$class}.php was not found.");
		}
//*/
	}

	function getUrl()
	{
		return (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	}

	function redirect($location)
	{
		header("Location: {$location}");
	}
?>
