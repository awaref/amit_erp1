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
	//$customer_id = $validation->numValidation($_POST['customer_id']);
	$product = $_POST['product'];
	//$product = $validation->check_input($_POST['product']);
	$total_amount = $_POST['total_amount'];
	//$total_amount = $validation->numValidation($_POST['total_amount']);
	$shipping_fees = $_POST['shipping_fees'];
	//$shipping_fees = $validation->numValidation($_POST['shipping_fees']);
	$notes = $_POST['notes'];
	// $notes = strip_tags($notes);
	// $notes = htmlspecialchars($notes);

	//*********** Form_Handling **************//

	// CustomerID
	if (empty($customer_id)) {
		array_push($msgs_array, 'This field cannot be empty');
	} else {
		if (!$validation->numValidation($customer_id)) {
			array_push($msgs_array, 'Customer id must be number');
		}
	}

	// Product
	if (empty($product)) {
		array_push($msgs_array, 'This field cannot be empty');
	} else {
		if (!preg_match("/^[a-zA-Z ]*$/", $product)) {
			echo "Error";
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

		if (!$result)
			echo "<pre style='color:#000;'>";
			print_r($query);
			echo "</pre>";
			die("Failed to execute query");
		
	}
}

?>