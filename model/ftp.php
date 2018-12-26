<?php
namespace model\ftp;

 include 'user.php';
 session_start();

 use model\user\user as user;
 use \PDO;

class ftp extends user
{
	// private hostftp;
	// private portftp;
	
	function __construct()
	{
		# code...
	}

	

public function getDataFtp()
{
	$conection = $this->getConection();
	
	$data = array("idUser" => $_SESSION['idUser']);
	$query = $conection->prepare("CALL sp_getUserDataFtp(?)");
	$query->bindParam(1, $data["idUser"], PDO::PARAM_STR);
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

public function UpdateDataFtp($data)
{
	$conection = $this->getConection();
	// var_dump($data);
	
	// $data = array("idUser" => 1);
	// var_dump($data);
	$query = "update ftpdata set hostftp=?, userftp=?, passwordftp=? where id=?";
	$queryexecute= $conection->prepare($query);
	$queryexecute->execute([$data["hostName"], $data["UserName"], $data["Password"], $data["idUser"]]);
	if($queryexecute)
	{
		return $this->successResponseInfo();
	}
	else
	{
		return $this->emptyResponse();
	}
}

	public function getConectionFtp()
	{
		
		return ftp_connect();
	}
}
