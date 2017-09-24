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
	        	$_SESSION['id'] = $result['id'];
				$_SESSION['fname'] = $result['firstname'];
				$_SESSION['lname'] = $result['lastname'];
				$_SESSION['username'] = $result['username'];
				$_SESSION['email'] = $result['email'];
				header('Location: add_user.php');
	        }
	        
		}
	}
?>