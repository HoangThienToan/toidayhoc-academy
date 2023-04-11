<?php
class connect_data
{
	private $_host = 'localhost';
	private $_username = 'root';
	private $_password = '';
	private $_database = 'academy';

	protected $connection;

	public function __construct()
	{
		if (!isset($this->connection)) {

			$this->connection = new mysqli($this->_host, $this->_username, $this->_password, $this->_database);
			mysqli_set_charset($this->connection, 'UTF8');
			if (!$this->connection) {
				echo 'Cannot connect to database server';
				exit;
			}
		}
		return $this->connection;
	}
};

class take extends connect_data
{
    public function getData($query)
	{		
		$result = $this->connection->query($query);
		if ($result == false) {
			return false;
		} 
		
		$rows = array();
		
		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}
		
		return $rows;
	}


};

class delete extends connect_data
{
    public function delete($id, $table) 
	{ 
		$query = "DELETE FROM $table WHERE id = $id";
		
		$result = $this->connection->query($query);
	
		if ($result == false) {
			echo "'Error: cannot delete id ' . $id . ' from table ' . $table";
			return false;
		} else {
			return true;
		}
	}
};

class update extends connect_data
{
    public function update($query) 
	{ 
		$result = $this->connection->query($query);
		if ($result == false) {
			echo 'Error: cannot update';
			return false;
		} else {
			return true;
		}
	}
};


class create extends connect_data
{
    public function execute($query) 
	{
		$result = $this->connection->query($query);
		
		if ($result == false) {
			echo 'Error: cannot execute the command';
			return false;
		} else {
			return true;
		}		
	}
}

// $get = new take();
// $query = "SELECT * FROM user_table";
// $result = $get->getData($query);
// echo json_encode($result);

// $dele = new delete();
// $id = $dele->escape_string($_POST['id']);
// $result = $dele->delete($id, 'data');

// $cre = new create();
// $query = "INSERT INTO data (Name, Phone, Image, Video) VALUES ('$Name', '$Phone', '$Image', '$Video')";
// $result = $cre->execute($query);

// $geta = new take();
// var_dump($query);
?>