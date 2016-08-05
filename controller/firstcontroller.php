<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
require_once "applicationcontroller.php";
require_once "../module/firstmodule.php";
require_once '../config/PDOConfig.php';
// echo "string";
class FirstController{

	public function all($conn)
	{
		$allUsers = new FirstModule;
		$Users = $allUsers -> all($conn);
		return $Users;

	}
}

$userObj = new FirstController;
$data = $userObj -> all($conn);

echo json_encode($data);

// if (condition) {
// 	# code...
// }
?>