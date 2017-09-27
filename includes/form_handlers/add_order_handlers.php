<?php

$crud = new Crud();
$validation = new Validation();
//********************************************************  
$user_id = $_SESSION['id'];
$customer_id = '';
$product = '';
$quantity = '';
$shipping_fees = '';
$notes = '';
$created_at = date('Y-m-d');
$msgs_array = [];


if (isset($_POST['add_order'])) {

	$customer_id = $_POST['customer_id'];
	$product = $_POST['product'];
	$product = ucfirst($product);
	$quantity = $_POST['quantity'];
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
		array_push($msgs_array, 'Product cannot be empty');
	} else {
		if (!$validation->checkString($product)) {
			array_push($msgs_array, "product: Letters and white spaces are allowed");
		}
		if (strlen($product) > 50 || strlen($product) < 2) {
			array_push($msgs_array, 'Product field must be between 2 and 50 characters');
		}
		if($_POST['pr_confirm'] == "false"){
			array_push($msgs_array, 'Product doesnot exist');
		}
	}

	// Total_amount
	if (empty($quantity)) {
		array_push($msgs_array, 'Quantity cannot be empty');
	} else {
		if (!$validation->numValidation($quantity)) {
			array_push($msgs_array, 'Quantity must be number');
		}
	}

	// Shipping_fees
	if (empty($shipping_fees)) {
		array_push($msgs_array, 'Shipping fees cannot be empty');
	} else {
		if (!$validation->numValidation($shipping_fees)) {
			array_push($msgs_array, 'Shipping fees must be number');
		}
	}


	// Notes
	if (strlen($notes) > 100)
		array_push($msgs_array, 'Don\'t exceed 100 characters');

	// Check if there's no error
	if (empty($msgs_array)) {
		$query = "SELECT * FROM `products` where `name` = '$product'";
		$result = $crud->getData($query);
		$cost = $result[0]['cost'];
		$cost *= $quantity;
		$cost += $shipping_fees;
		// Send validate data to database
		$query = "INSERT INTO `orders` VALUES (NULL, '$user_id', '$customer_id', '$product', '$quantity',$cost, '$shipping_fees', '$notes', NULL)";
		$result = $crud->executeQuery($query);
		if ($result){
			$_POST = array();
			array_push($msgs_array, "Order added successfully");
		}
	}
}

?>