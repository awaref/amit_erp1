<?php

$crud = new Crud();
$validation = new Validation();
//********************************************************  
$user_id = $_SESSION['id'];
$customer_id = '';
$product = '';
$total_amount = '';
$shipping_fees = '';
$notes = '';
$created_at = date('Y-m-d');
$msgs_array = [];


if (isset($_POST['add_order'])) {

	$customer_id = $_POST['customer_id'];
	$product = $_POST['product'];
	$product = ucfirst($product);
	$total_amount = $_POST['total_amount'];
	$shipping_fees = $_POST['shipping_fees'];
	$notes = $_POST['notes'];
	$notes = strip_tags($notes);
	$notes = htmlspecialchars($notes);

	//*********** Form_Handling **************//

	if ($customer_id == 'select' || $customer_id == 'Select') {
		array_push($msgs_array, "Please select customer id");
	}

	// Product
	if (empty($product)) {
		array_push($msgs_array, 'This field cannot be empty');
	} else {
		if (!$validation->checkString($product)) {
			array_push($msgs_array, "Letters and white spaces are allowed");
		}
		if (strlen($product) > 50 || strlen($product) < 2) {
			array_push($msgs_array, 'Product field must be between 2 and 50 characters');
		}
	}

	// Total_amount
	if (empty($total_amount)) {
		array_push($msgs_array, 'This field cannot be empty');
	} else {
		if (!$validation->numValidation($total_amount)) {
			array_push($msgs_array, 'Total amount must be number');
		}
	}

	// Total_amount
	if (empty($shipping_fees)) {
		array_push($msgs_array, 'This field cannot be empty');
	} else {
		if (!$validation->numValidation($shipping_fees)) {
			array_push($msgs_array, 'Shipping fees must be number');
		}
	}


	// Notes
	if (strlen($notes) > 100)
		array_push($msgs_array, 'Don\'t exceeds 100 characters');

	// Check if there's no error
	if (empty($msgs_array)) {

		// Send validate data to database
		$query = "INSERT INTO `orders` VALUES (NULL, '$user_id', '$customer_id', '$product', '$total_amount', '$shipping_fees', '$notes', '')";
		$result = $crud->executeQuery($query);

		if ($result){
			array_push($msgs_array, "Order added successfully");
		}
	}
}

?>