<?php
include '../controller/ftpUserController.php';

use controller\ftpUserController\ftpUserController as ftpUserController;
$_SESSION["hostName"] = $_GET["host"];
$_SESSION["user"] = $_GET["user"];
$_SESSION["userP"] = $_GET["userP"];
$user = new ftpUserController;
return $user->getDirectorytFtp();
exit();
?>