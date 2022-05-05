<?php

require('models/database.php');
require('models/loginRegister.php');

$info = new LoginRegister();

$id = isset($_SESSION['id']) ? $_SESSION['id'] : '';

$details = $info->userInfo($id);
$name = $details['firstName'] . ' ' . $details['lastName'];
$email = $details['email'];
