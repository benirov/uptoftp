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

	



	public function getftpUserDataController()
	{
		$arraydata = array("id" => 1); 
		$arrayField = array("id");
		$util = new util;
		
		if($util->Validate($arraydata, $arrayField))
		{
			return  $this->getDataFtp();
		}
	}

	public function addFtpUserDataController($data)
	{
		$arrayField = array("user","password");
		$util = new util;
		
		if($util->Validate($data, $arrayField))
		{
			return  $this->AddUser($data);
		}
			
	}

	public function conectionHostFtp($data)
	{

	}

	public function conectionHostFtp($data)
	{

	}

	public function loginFtp($data)
	{

	}

	public function getDirectorytFtp($data)
	{

	}
}


$user = new ftpUserController;
$user->getftpUserDataController();
