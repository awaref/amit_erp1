<?php

$crud = new Crud();
$validation = new Validation();
// *********************************************************************
// Register page variables declarations
$fname = ''; 			// First Name
$lname = ''; 			// Last Name
$password = ''; 		// Password
$conf_password = ''; 	// Confirm Password
$email = ''; 			// Email
$conf_email = ''; 		// Confirm Email
$error_array = array(); // Holds error messages

// Form Handling
if (isset($_POST['add_user'])) {

	// Firstname
	$fname = $validation->check_input($_POST['fname']);	// Remove HTML tags
	$fname = str_replace(' ', '', $fname);	// Remove white-spaces
	$fname = ucfirst(strtolower($fname)); 	// UpperCase first letter
	// $_SESSION['reg_fname'] = $fname;		// Store first name value into session variable

	// Lastname
	$lname = $validation->check_input($_POST['lname']);	// Remove HTML tags
	$lname = str_replace(' ', '', $lname);	// Remove white-spaces
	$lname = ucfirst(strtolower($lname)); 	// UpperCase first letter
	// $_SESSION['reg_lname'] = $lname;		// Store last name value into session variable


	// Email
	$email = $validation->check_input($_POST['email']); 	// Remove HTML tags
	$email = str_replace(' ', '', $email); 	// Remove white-spaces
	$email = strtolower($email); 			// UpperCase first letter
	// $_SESSION['reg_email'] = $email; 	// Store email value into session variable

	// Confirm-Email
	$conf_email = $validation->check_input($_POST['conf-email']); 		// Remove HTML tags
	$conf_email = str_replace(' ', '', $conf_email); 		// Remove white-spaces
	$conf_email = strtolower($conf_email); 					// UpperCase first letter
	// $_SESSION['reg_conf_email'] = $conf_email; 			// Store confirm-email value into session variable

	// Password, Confirm-Password
	$password = strip_tags($_POST['password']); 			// Remove HTML tags
	$conf_password = strip_tags($_POST['conf_password']); 	// Remove HTML tags


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
		//$query = "INSERT INTO `users` (`username`, `name`, `password`, `email`) VALUES ( '$username', '$fname', '$password', '$email')";
		$query = "INSERT INTO `users` (`firstname`, `lastname`, `username`, `password`, `email`) 
		VALUES ( '$fname', '$lname', '$username', '$password', '$email')";
		
		$result = $crud->executeQuery($query);
		// Send validate data to database
		// $query = mysqli_query(connect(), "INSERT INTO `users` VALUES (null, '$fname', '$lname', '$username', '$password', 
		// 					'$email', '$phone', '$gender', '0')");

	}

}


?>
