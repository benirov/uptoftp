<?php
include '../controller/ftpUserController.php';

use controller\ftpUserController\ftpUserController as ftpUserController;

$user = new ftpUserController;
// var_dump($_POST);
// exit();
return $user->testConection($_POST);
exit();
?>