<?php



	$crud = new Crud;
	$validation = new Validation;
	
	if (isset($_POST['submit'])) 
	{

		$email = $validation->check_input($_POST['email']);
		$password = md5($_POST['password']);

		$query = "SELECT * FROM `users` WHERE `email` = '$email'  AND `password` = '$password'";

		$result = $crud->getData($query);

		
		if ($result === false) 
	    {
	      echo "Query cannot be excuted";
	      header('Location: index.php');

	    }
		else
		{
	        if ($result != false) 
	        {
	        	echo "ay kalaaaam";
	           $_SESSION['fname'] = $result[0]['fname'];
	           $_SESSION['username'] = $result[0]['username'];
	           $_SESSION['email'] = $result[0]['email'];
	           header('Location: add_user.php');
	        }
	        
		}
	}
	var_dump($_SESSION);
	$current_page = basename($_SERVER['PHP_SELF']);
	if (!empty($_SESSION['username'])){
		if ($current_page == "index.php")
			header('Location: add_user.php');
		}
	else{
		if ($current_page != "index.php")
			header('Location: index.php');
	}