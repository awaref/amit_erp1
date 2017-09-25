<?php 

include 'DbConfig.php';
class Crud extends DbConfig
{
	// Get data from datbase by selecting the specific table
	public function getAllData($table) {
		$query = "SELECT * FROM `$table`";
		$result = $this->connect()->query($query);
		if (!$result){
			return false;
		}			
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}
	public function getAllData_assocByID($table) {
		$query = "SELECT * FROM `$table`";
		$result = $this->connect()->query($query);
		if (!$result){
			return false;
		}			
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			$rows[$row['id']] = $row;
		}
		return $rows;
	}
	public function getData($query) {
		$result = $this->connect()->query($query);
		if (!$result){
			return false;
		}			
		$rows = [];
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		return $rows;
	}

	// Insert data into database
	public function executeQuery($sqlQuery) {
		$result = $this->connect()->query($sqlQuery);
		if (!$result) {
			return false;
			//to return error : $this->connection->error
		} else
			return true;
	}

	// Delete data
	public function deleteData($table, $id) {
		$query = "DELETE FROM " . $table . " WHERE `id` = " . $id . "";
        $result = $this->connection->query($query);

        if ($result == false) 
        {
            echo "Cannot delete the record with id " . $id . " From Table " . $table;
            return false;
        }
        else
        {
            echo "The Record has been deleted successflly";
            return true;
        }
	}
	public function get_connection(){
		return $this->connection;
	}
}

?>
