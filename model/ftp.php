<?php
namespace model\ftp;

 include 'user.php';

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

	

public function getDataFtp($ftp)
{
	$conection = $this->getConection();
	
	$data = array("idFtp" => $ftp);
	$query = $conection->prepare("CALL sp_getUserDataFtp(?)");
	$query->bindParam(1, $data["idFtp"], PDO::PARAM_STR);
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

public function getAccountFtp()
{
	$conection = $this->getConection();
	
	$data = array("idUser" => $_SESSION['idUser']);
	$query = $conection->prepare("select id, hostftp as text from ftpdata where idUser = ?");
	$query->bindParam(1, $data["idUser"], PDO::PARAM_STR);
	$query->execute();
	if($query->rowCount() > 0)
	{

		return $this->successResponse($query->fetchAll(PDO::FETCH_ASSOC));
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
	$queryexecute->execute([$data["hostName"], $data["UserName"], $data["Password"], $_SESSION['idUser']]);
	if($queryexecute)
	{
		return $this->successResponseInfo();
	}
	else
	{
		return $this->emptyResponse();
	}
}

public function AddUserFTP($data)
{
	// var_dump($_SESSION['idUser']);
	// exit();
	$conection = $this->getConection();
	$query = "INSERT INTO  ftpdata (hostftp, userftp, passwordftp, idUser) VALUES (:hostName, :UserName, :Password, :idUser)";
	$queryexecute= $conection->prepare($query);
	$queryexecute->bindParam(':hostName', $data['hostName'], PDO::PARAM_STR);
	$queryexecute->bindParam(':UserName', $data['UserName'], PDO::PARAM_STR);
	$queryexecute->bindParam(':Password', $data['Password'], PDO::PARAM_STR);
	$queryexecute->bindParam(':idUser', $_SESSION['idUser'], PDO::PARAM_STR);
	$queryexecute->execute();
	// var_dump($queryexecute);
	// exit();
	if($queryexecute)
	{
		return $this->successResponseInfo();
	}
	else
	{
		return $this->emptyResponse();
	}
}

public function DeletedDataFtp($data)
{
	$conection = $this->getConection();
	$query = "DELETE from ftpdata where  id=?";
	$queryexecute= $conection->prepare($query);
	$queryexecute->execute([$data["idFtp"]]);
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
