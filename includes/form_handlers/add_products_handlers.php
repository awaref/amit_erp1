<?php

$crud = new Crud();
$validation = new Validation();

// *********************************************************************
// Register page variables declarations
$name = ''; 			// Product Name
$cat = ''; 			    // Category
$desc = ''; 			// Product Description
$price = ''; 		    // Price
$cost = ''; 	        // Cost
$quantity = ''; 		// Quantity
$day = '';				// Expire Date
$month='';				//
$year='';				//
$error_array = array(); // Holds error messages
// Form Handling
if (isset($_POST['add_product'])) {
        
	// Product Name
	$name = $validation->check_input($_POST['name']);	        // Remove HTML tags
	$name = str_replace(' ', '', $name);	                    // Remove white-spaces
    $name = ucfirst(strtolower($name)); 	                    // UpperCase first letter
    // Category
    $cat = $validation->check_input($_POST['category']);		// Remove HTML tags
	// Product Description
	$desc = $validation->check_input($_POST['desc']);	        // Remove HTML tags 

	// *******************************\_Form_Logic_/*******************************
	//Check for empty fields
	$error_array = $validation->checkEmpty($_POST, 
	['name','category','price','cost','quantity','day','month','year']);
	// check if name exists
	$query = "SELECT * FROM `products` where `name` = '$name'";
	if ($crud->getData($query) != false){
		array_push($error_array, "Name exists");
	}
	
	//------------ Check: Date ------------
	if ($validation->numsValidation($_POST,['day','month','year'])!= false){
		$day 	= (int)$_POST['day'];
		$month 	= (int)$_POST['month'];
		$year 	= (int)$_POST['year'];
		if (checkdate($month,$day,$year)){
			if ($year < 2017 || $year > 2050){
				array_push($error_array, "Invalid Date");
			}
		}else{
			array_push($error_array, "Invalid Date");
		}
	}else{
		array_push($error_array, "Invalid Date");
	}

	$price = filter_var($_POST['price'],FILTER_VALIDATE_FLOAT);
	$quantity = filter_var($_POST['quantity'],FILTER_VALIDATE_FLOAT);
	$cost = filter_var($_POST['cost'],FILTER_VALIDATE_FLOAT);
	if ($price == false) array_push($error_array, "Invalid Price");
	if ($quantity == false) array_push($error_array, "Invalid Quantity"); 
	if ($cost == false) array_push($error_array, "Invalid Cost");  
	
	 
	
	

	

	// Check if there's no error
	if (empty($error_array)) {
	
		// Send validate data to database
		$query = "INSERT INTO `products` VALUES ( NULL,'$cat', '$name', '$desc', '$price', '$cost','$quantity','$year-$month-$day',NULL,NULL)";
		$result = $crud->executeQuery($query);
		if ($result != false){
			$_POST['success'] = '
			<div class="alert alert-success success-msg" role="success">
				Product : '.$name.' was added Successfully
			</div>
			';
		}
		
	}

}


?>
