<?php
include '../controller/ftpUserController.php';

// print_r($_POST["hostName"])

use controller\ftpUserController\ftpUserController as ftpUserController;

$user = new ftpUserController;
return $user->updateFtpUserDataController($_POST);
exit();
?>