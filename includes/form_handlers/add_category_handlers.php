<?php

$crud = new Crud();
$validation = new Validation();
// *********************************************************************
// Register page variables declarations
$cname = '';  			// category_name
$cdetails = ''; 			// category_details

$msg_array = array(); // Holds error messages

// Form Handling
if (isset($_POST['add_category'])) {

	$cname = $_POST['cname'];
	$cdetails = $_POST['cdetails'];
	
	// *******************************\_Form_Logic_/*******************************

	
	if (empty($cname)) {
		array_push($msg_array, "category name is required");
	}

	if (empty($cdetails)) {
		array_push($msg_array, "category details is required");
	}
	
	// Check if there's no error
	if (empty($msg_array)) {
		// Send validate data to database
		$query = "INSERT INTO `category` VALUES (NULL, '$cname', '$cdetails')";
		
		$result = $crud->executeQuery($query);

		if ($result) {
			array_push($msg_array, "New category has been added");
		}	  
	}
}


?>
