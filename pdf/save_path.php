<?php 


	function getSavePath(){

	$path = getcwd(); 
	$path = substr($path, 0, strpos($path, "public_html"));
	$root = $path . "public_html/";
	$SavePath = $root.'incipitweb.com/vRegistration/vRegistrationFiles/'; 

	return $SavePath;

	}

?>