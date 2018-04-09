<?php

session_start();

include("../loadClass.php");

if(Access::admin())
    
{

    $usermanager = new UserManager();

    $user = new User(array(
        'address' => $_POST['newUserAddress'],
        'email' => $_POST['newUserEmail'],
        'name' => $_POST['newUserName'],
        'firstName' => $_POST['newUserFirstName'],
        'type' => $_POST['newUserType'],
        'phone' => $_POST['newUserPhone'],
        'premium' => $_POST['newUserAbo'],
        'password' => $_POST['newUserPassword']
    ));


    if($usermanager->userExists($user))
    {
        $response = 0;
    }
    else
    {
        $id = $usermanager->add($user);
        $user->setId($id);
        $response = 1;
    }

    echo json_encode($response);
    
}


