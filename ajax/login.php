<?php
include '../controller/userController.php';

use controller\userController\userController as userController;

$user = new userController;
$user->getUserController($_POST['email'], $_POST['password']);
?>