<?php
include '../controller/ftpUserController.php';

use controller\ftpUserController\ftpUserController as ftpUserController;

$user = new ftpUserController;
return $user->addFtpUserDataController($_POST);
exit();
?>