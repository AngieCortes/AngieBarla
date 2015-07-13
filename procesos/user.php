<?php
session_start();

include '../class/userClass.php';
include '../class/securityClass.php';

use barlaKarime\userSystem as user;
use barlaKarime\securitySystem as security;

$user = filter_input(INPUT_POST, 'user');
$pass = filter_input(INPUT_POST, 'pass');

$userSystem = new user\userClass();
if($userSystem ->validate($user, $pass) === true) {
    //clase instanciada
    $security = new security\securityClass();
    $security->login();
    
  header('Location: ../menuPrincipal.php');
} else {
  header('Location: ../index.php?user=false');
}



