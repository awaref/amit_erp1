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
<<<<<<< HEAD
	        	$_SESSION['id'] = $result['id'];
				$_SESSION['fname'] = $result['firstname'];
				$_SESSION['lname'] = $result['lastname'];
				$_SESSION['username'] = $result['username'];
				$_SESSION['email'] = $result['email'];
=======
				$_SESSION['fname'] = $result[0]['firstname'];
				$_SESSION['lname'] = $result[0]['lastname'];
				$_SESSION['username'] = $result[0]['username'];
				$_SESSION['email'] = $result[0]['email'];
>>>>>>> 53e8e7284609c5c45c17fb4b0d839216b4cc64bd
				header('Location: add_user.php');
	        }
	        
		}
	}
?>