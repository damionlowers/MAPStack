<?php
/**
* 
*/
require_once '../config/PDOConfig.php';
class FirstModule{
	public function __construct(){
		// echo 'The class "', __CLASS__, '" was initiated!<br />';
	}
	public function __destruct()
	{
		// echo 'The class "', __CLASS__, '" was destroyed.<br />';
	}
	public function __toString()
	{
		// echo "Using the toString method: ";
		// return $this->getProperty();
	}

	public function all($conn)
	{
		$all = $conn->prepare("SELECT * FROM user");

		if ($all -> execute(array())>0) {
			# code...
			return $all->fetchAll(PDO::FETCH_OBJ);
		}else{
			echo "Error: ".$e;
		}

	}
}

?>