<?php

require('../models/database.php');
require('../models/loginRegister.php');

$information = new LoginRegister();

if (isset($_POST['create'])) {
    $data = array(
        'firstName'         => $_POST['firstName'],
        'middleName'        => isset($_POST['middleName']) ? $_POST['middleName'] : '',
        'lastName'          => $_POST['lastName'],
        'email'             => $_POST['email'],
        'password'          => $_POST['password']
    );

    echo $information->registerAccount($data);
}

if (isset($_POST['login'])) {
    $data = array(
        'email'             => $_POST['email'],
        'password'          => $_POST['password']
    );

    echo $information->loginAccount($data);
}
