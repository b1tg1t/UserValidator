<?php
    require_once('Core/UserValidator.php');

    $validator = new UserValidator();
    $email = 'u53r.n4m3@s0m3.3x4mp7e.com';
    $password = 'P4$$W0rd';

    if ($validator->validateEmail($email)) {
        echo "Email is valid.<br>";
    } else {
        echo "Email is invalid.<br>";
    }

    if ($validator->validatePassword($password)) {
        echo "Password is valid.<br>";
    } else {
        echo "Password is invalid.<br>";
    }
?>