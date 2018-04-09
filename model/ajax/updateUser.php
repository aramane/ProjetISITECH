<?php

session_start();

include("../loadClass.php");

if(Access::admin())
    
{
    $usermanager = new UserManager();

    $user = new User(array(
        'id' => $_POST['id'],
        'address' => $_POST['updateUserAddress'],
        'email' => $_POST['updateUserEmail'],
        'name' => $_POST['updateUserName'],
        'firstName' => $_POST['updateUserFirstName'],
        'type' => $_POST['updateUserType'],
        'phone' => $_POST['updateUserPhone'],
        'premium' => $_POST['updateUserAbo'],
        'password' => $_POST['updateUserPassword']
    ));

    $usermanager->update($user);   
}