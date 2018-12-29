<?php
include '../controller/ftpUserController.php';

use controller\ftpUserController\ftpUserController as ftpUserController;

$user = new ftpUserController;
return $user->deletedFtpUserDataController($_POST);
exit();
?>