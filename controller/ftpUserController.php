<?php
namespace controller\ftpUserController;
 

 include '../model/ftp.php';
 include '../middleware/Util.php';


 use model\ftp\ftp as ftp;
 use middleware\Util\util as util;

class ftpUserController extends ftp
{
	// private User;
	// private password;

	
	function __construct()
	{
		# code...
	}

	



	// get Data FTP
	public function getftpUserDataController($ftp)
	{
		$arraydata = array("id" => $ftp); 
		$arrayField = array("id");
		$util = new util;
		
		if($util->Validate($arraydata, $arrayField))
		{
			return  $this->getDataFtp($ftp);
		}
	}

	// get Account FTP
	public function getftpUserAcountController()
	{
		$arraydata = array("id" => $_SESSION['idUser']); 
		$arrayField = array("id");
		$util = new util;
		
		if($util->Validate($arraydata, $arrayField))
		{
			return  $this->getAccountFtp();
		}
	}

	public function addFtpUserDataController($data)
	{
		$arrayField = array("hostName","Password","UserName");
		$util = new util;
		// var_dump($data);
		// exit();
		
		if($util->Validate($data, $arrayField))
		{
			return  $this->AddUserFTP($data);
		}
			
	}

	public function updateFtpUserDataController($data)
	{
		// $arrayField = array("user","password");
		// $util = new util;
		
		// if($util->Validate($data, $arrayField))
		// {
			return  $this->UpdateDataFtp($data);
		// }
			
	}

	public function deletedFtpUserDataController($data)
	{
		$arrayField = array("idFtp");
		$util = new util;
		
		if($util->Validate($data, $arrayField))
		{
			return  $this->DeletedDataFtp($data);
		}
			
	}


	public function conectionHostFtp($data)
	{
		if(@ftp_connect($data["hostName"]))
		{
			$connect = ftp_connect($data["hostName"]);
			return $connect;
		}
		else
		{
			return false;	
		}
	}

	public function loginFtp($conection, $data)
	{
		if($conection)
		{
			if(@ftp_login($conection, $data["UserName"], $data["Password"]))
			{
				return true;
			}
			else
			{
				return false;	
			}
			
		}
	}

	public function testConection($data)
	{
		$connect = $this->conectionHostFtp($data);
		if($connect)
		{
			if($this->loginFtp($connect, $data))
			{
				return $this->successResponseInfo();
			}
			else
			{
				return $this->errorResponseInfo();
			}
		}
		else
		{
			return $this->errorResponseInfo();
		}
	}

	public function getDirectorytFtp($data)
	{

	}
}


// $user = new ftpUserController;
// $user->getftpUserDataController();
