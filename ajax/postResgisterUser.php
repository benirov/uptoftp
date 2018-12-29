<?php
include '../controller/userController.php';

use controller\userController\userController as userController;

$user = new userController;
return $user->addUserController($_POST);
exit();
?>