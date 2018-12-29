<?php
include '../controller/userController.php';

// print_r($_POST["hostName"])

use controller\userController\userController as userController;

$user = new userController;
return $user->updateUserDataController($_POST);
exit();
?>