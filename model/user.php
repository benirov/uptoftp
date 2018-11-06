<?php
namespace model\user;

include 'conection.php';
include '../traits/jsonResponser.php';

use model\Conection\Conection as conection;
use Traits\jsonResponser\JsonResponser;
use \PDO;


class user extends conection
{
	use JsonResponser;
	// private User;
	// private password;

	
	function __construct()
	{
		# code...
	}

	



	public function getUser($User, $Password)
	{
		$conection = $this->getConection();
		$data = array("name" => $User, "password" => $Password);
		// var_dump($data);
		$query = $conection->prepare("CALL sp_getUser(?,?)");
		$query->bindParam(1, $data["name"], PDO::PARAM_STR);
		$query->bindParam(2, $data["password"], PDO::PARAM_STR);
		$query->execute();
		if($query->rowCount() > 0)
		{

			// var_dump($query->fetch(PDO::FETCH_ASSOC));
			return $this->successResponse($query->fetch(PDO::FETCH_ASSOC));
		}
		else
		{
			return $this->emptyResponse();
		}
	}


	public function addUser($Userdata)
	{
		$conection = $this->getConection();
		$data = array("name" => $User, "password" => $Password);
		$query = $conection->prepare("CALL sp_addUser(?,?)");
		$query->bindParam(1, $Userdata["name"], PDO::PARAM_STR);
		$query->bindParam(2, $Userdata["password"], PDO::PARAM_STR);
		// $query->bindParam("ss", $data["name"], $data["password"]);
		$query->execute();
		// $datauser = $query->fetch(PDO::FETCH_ASSOC);
    	return json_encode($datauser);
		
	}
}
