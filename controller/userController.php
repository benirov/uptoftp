<?php
namespace controller\userController;
 

 include '../model/user.php';
 include '../middleware/Util.php';


 use model\user\user as user;
 use middleware\Util\util as util;

class userController extends user
{
	// private User;
	// private password;

	
	function __construct()
	{
		# code...
	}

	



	public function getUserController($User, $password)
	{
		$arraydata = array("user" => $User, "password" => $password); 
		$arrayField = array("user","password");
		$util = new util;
		
		if($util->Validate($arraydata, $arrayField))
		{
			return  $this->getUser($User, $password);
		}
	}

	public function addUserController($data)
	{
		$arrayField = array("user","password");
		$util = new util;
		
		if($util->Validate($data, $arrayField))
		{
			return  $this->AddUser($data);
		}
			
	}
}


// $user = new userController;
// $_POST['User'] = 'pruebasftp';
// $_POST['password'] = 'abc1234';
// $user->getUserController($_POST['User'], $_POST['password']);
