<?php

$crud = new Crud();
$validation = new Validation();
// *********************************************************************
// Register page variables declarations
$cname = '';  			// category_name
$cdetails = ''; 			// category_details

$error_array = array(); // Holds error messages

// Form Handling
if (isset($_POST['add_category'])) {

	
	// *******************************\_Form_Logic_/*******************************

	
	if (empty($cname)) {
		array_push($error_array, "category name is required");
	}
  
	// Check if there's no error
	if (empty($error_array)) {
		

		// Send validate data to database
		$query = "INSERT INTO `category` (`name`, `description`) 
		VALUES ( '$cname', '$cdetails')";
		
		$result = $crud->executeQuery($query);
		
				  
	}
	else {

		echo "error occur";
	}

}


?>
