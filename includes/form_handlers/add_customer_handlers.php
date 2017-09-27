<?php

$crud = new Crud();
$validation = new Validation();
// *********************************************************************
// Register page variables declarations
$fname = ''; 			// First Name
$lname = ''; 			// Last Name
$phone = ''; 			// Phone
$email = ''; 			// Email
$address = ''; 			// address
$city = ''; 			// city
$country = ''; 			// country
$error_array = array(); // Holds error messages

// Form Handling
if (isset($_POST['add_customer'])) {
	// Firstname
	$fname = $validation->check_input($_POST['fname']);	// Remove HTML tags
	$fname = str_replace(' ', '', $fname);	// Remove white-spaces
	$fname = ucfirst(strtolower($fname)); 	// UpperCase first letter

	// Lastname
	$lname = $validation->check_input($_POST['lname']);	// Remove HTML tags
	$lname = str_replace(' ', '', $lname);	// Remove white-spaces
	$lname = ucfirst(strtolower($lname)); 	// UpperCase first letter


	// Email
	$email = $validation->check_input($_POST['email']); 	// Remove HTML tags
	$email = str_replace(' ', '', $email); 	// Remove white-spaces
	$email = strtolower($email); 			// UpperCase first letter
	// $_SESSION['reg_email'] = $email; 	// Store email value into session variable

	// Phone
	$phone = $validation->check_input($_POST['phone']); 	// Remove HTML tags
	$phone = str_replace(' ', '', $phone); 	// Remove white-spaces

	// Address
	$address = $validation->check_input($_POST['address']); 	// Remove HTML tags
	$address = strtolower($address); 			// UpperCase first letter

	// City
	$city = $validation->check_input($_POST['city']); 	// Remove HTML tags
	$city = str_replace(' ', '', $city); 	// Remove white-spaces
	$city = strtolower($city); 			// UpperCase first letter

	// Country
	$country = $validation->check_input($_POST['country']); 	// Remove HTML tags
	$country = str_replace(' ', '', $country); 	// Remove white-spaces
	$country = strtolower($country); 			// UpperCase first letter

	

	// *******************************\_Form_Logic_/*******************************

	// Check Empty Fields
	$error_array = $validation->checkEmpty($_POST, 
	['fname','lname','email','phone','address','city','country']);

	// Check FirstName and LastName

	if (!$validation->checkarray(['fname','lname'],$error_array)){
		//------------ Check: First_Name ------------
		// Check first name char. length
		if (strlen($fname) > 25 || strlen($fname) < 2) {
			array_push($error_array, "First name must be between 2 and 25 characters");
		}
		//------------ Check: Last_Name ------------
		// Check last name char. length
		if (strlen($lname) > 25 || strlen($lname) < 2){
			array_push($error_array, "Last name must be between 2 and 25 characters");
		}
	}
	if (!in_array("country",$error_array)){
		if ($validation->checkString($country) == false){
			array_push($error_array, "Country name cannot contain numbers");
		}
	}
		
	if ($validation->numValidation($phone) == false){
		array_push($error_array, "Invalid phone number");
	}
	
	//------------ Check: email ------------
			
	// Check if email in valid format
	if ($validation->emailValidation($email)) {
		$email_check = $crud->getData("SELECT email FROM `customers` WHERE email='$email'");
		if ($email_check !=  false) {
			array_push($error_array, "Email already in use");
		}
		
	} else
		array_push($error_array, "Invalid email format!"); 
		
	
	// Check if there's no error
	if (empty($error_array)) {
		
		
		// Send validate data to database
		$query = "INSERT INTO `customers`  
		VALUES (NULL, '$fname', '$lname', '$phone', '$email', '$address','$city','$country')";
		
		$result = $crud->executeQuery($query);
		//$success = 'New user: ' . $fname . " " . $lname . ' has been added successfully';
		if ($result != false){
			$_POST = array();
			$_POST['success'] = '
			<div class="alert alert-success success-msg" role="success">
				Customer : '.$fname." ".$lname .' was added Successfully
			</div>
			';
		}
	}	
}


?>
