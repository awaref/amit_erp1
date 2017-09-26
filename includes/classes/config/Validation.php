<?php  

class Validation
{
	// This function the data container get by database is empty
	public function checkEmpty($data, $fields)
	{
		$array = array();
		foreach ($fields as $field) {
			if (empty($data[$field]))
			{
				array_push($array, $field);
			}
		}
		return $array;
	}

	//// start -> added for ease of use
	public function checkarray($fields,$array){
		foreach ($fields as $field) {
			if (in_array($field,$array))
			{
				return true;
			}
		}
		return false;
	}
	
	public function numsValidation($data,$fields){
		foreach ($fields as $field) {
			if (!preg_match("/^[0-9]*$/", $data[$field]))
			{
				return false;
			}
		}
		return true;
	}
	//// end -> added for ease of use

	// Check if age fields is number
	public function numValidation($num)
	{
		if (!preg_match("/^[0-9]*$/", $num))
		{
			return $num;
		}
		return false;
	}
	
	public function checkString($string) {
		if (!preg_match("/^[a-zA-Z ]*$/", $string)){
			return false;
		}
		return $string;
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
