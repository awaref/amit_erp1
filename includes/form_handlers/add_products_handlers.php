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
$exp_date = ''; 		// Expire Date
$error_array = array(); // Holds error messages

// Form Handling
if (isset($_POST['add_user'])) {

	// Product Name
	$name = $validation->check_input($_POST['name']);	        // Remove HTML tags
	$name = str_replace(' ', '', $name);	                    // Remove white-spaces
    $name = ucfirst(strtolower($name)); 	                    // UpperCase first letter
    
	// Product Description
	$desc = $validation->check_input($_POST['desc']);	        // Remove HTML tags
	$desc = str_replace(' ', '', $desc);	                    // Remove white-spaces
	$desc = ucfirst(strtolower($desc)); 	                    // UpperCase first letter

	// Price
	$email = $validation->check_input($_POST['price']);         // Remove HTML tags
	// Cost
	$cost = $validation->check_input($_POST['cost']); 	        // Remove HTML tags
    // Quantity
	$quantity = $validation->check_input($_POST['quantity']); 	// Remove HTML tags
	// Password, Confirm-Password
	$exp_date = strip_tags($_POST['exp_date']); 			    // Remove HTML tags
	//checkdate(12, 31, 2000);

	// *******************************\_Form_Logic_/*******************************

	// Check FirstName and LastName
	if (empty($fname) || empty($lname)) {
		array_push($error_array, "First name and Last name are required");
	} else {
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

	//------------ Check: Password ------------
	// Check if password not match
	if (empty($password) || empty($conf_password)) {
		array_push($error_array, "Password fields cannot be empty");
	} else {
		if ($password != $conf_password) {
			array_push($error_array, "Your password don't match, please check it again");
		}
		// Check password char length
		if (strlen($password) > 30 || strlen($password) < 5) {
			array_push($error_array, "Your password must be between 5 and 30 characters");
		} 
	}

	//------------ Check: email ------------
	if (!empty($email) || !empty($conf_email)) {
		if ($email == $conf_email) {
			// Check if email in valid format
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				//$email = filter_var($email, FILTER_VALIDATE_EMAIL);
				$email = strtolower($email);
				// Check if email is already exist
				$email_check = $crud->getData("SELECT email FROM `users` WHERE email='$email'");
				// Counts the numbers of rows return
				if ($email_check !=  false) {
					array_push($error_array, "Email already in use");
				}
			} else
				array_push($error_array, "Invalid format!");
		} else
			array_push($error_array, "Email don't match");
	} else
		array_push($error_array, "Email fields cannot be empty");


	// Check Phone number

	// Check if there's no error
	if (empty($error_array)) {
		$password = md5($password); // Encrypt password before sending to database

		//Generate username by concatenating FirstName amd LastName
		$username = strtolower($fname . "_" . $lname);

		// Send validate data to database
		$query = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `email`) 
		VALUES ( '$fname', '$lname', '$username', '$password', '$email')";
		
		$result = $crud->executeQuery($query);
		$success = 'New user: ' . $fname . " " . $lname . ' has been added successfully';
	}

}


?>
