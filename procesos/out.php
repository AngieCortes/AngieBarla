<?php
session_start();
include '../class/securityClass.php';

use barlaKarime\securitySystem as security;

$security = new security\securityClass();
$security->login();

header('Location: ../index.php');
