<?php
namespace controller\userController;
 

 include '../model/user.php';
 include '../middleware/Util.php';
 // include '../traits/jsonResponser.php';


 use model\user\user as user;
 use middleware\Util\util as util;
 // use Traits\jsonResponser\JsonResponser;

class userController extends user
{
	// use JsonResponser;
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
		// var_dump($util->Validate($arraydata, $arrayField));
		if($util->Validate($arraydata, $arrayField)[1])
		{
			return  $this->getUser($User, $password);
		}else
		{
			return $this->validateResponse($util->Validate($arraydata, $arrayField)[0]);
		}
	}


	public function getUserDataController()
	{
		return  $this->getUserData();
	}

	public function addUserController($data)
	{
		$arrayField = array("emailuser","password");
		$util = new util;
		
		if($util->Validate($data, $arrayField))
		{
			return  $this->AddUser($data);
		}
			
	}

	public function updateUserDataController($data)
	{
		// var_dump($data);
		// exit();
		$arrayField = array("emailUser","Password");
		$util = new util;
		
		if($util->Validate($data, $arrayField))
		{
			return  $this->updatedUser($data);
		}
			
	}

	
}


// $user = new userController;
// $_POST['User'] = 'pruebasftp';
// $_POST['password'] = 'abc1234';
// $user->getUserController($_POST['User'], $_POST['password']);
