<?php  

class Validation
{
	// This function the data container get by database is empty
	public function checkEmpty($data, $fields)
	{
		$message = "";
		foreach ($fields as $field) {
			if (empty($data[$field]))
			{
				$message .= $field . " Cannot be empty <br>";
			}
		}
		return $message;
	}

	// Check if age fields is number
	public function numValidation($num)
	{
		if (preg_match("/^[0-9]+$/", $num))
		{
			return true;
		}
		return false;
	}

	public function emailValidation($email)
	{
		if (filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			return true;
		}
		return false;
	}

	public function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = strip_tags($data);
		$data = htmlspecialchars($data);
		$data = ucfirst($data);
		return $data;
	}

}

?>
