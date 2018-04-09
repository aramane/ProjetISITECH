<?php

session_start();

include("../loadClass.php");

if(Access::admin())   
{
    $usermanager = new UserManager();
    
    $user = $usermanager->get($_POST['id']);
    
    $response['name'] = $user->name();
    $response['firstName'] = $user->firstName();
    $response['address'] = $user->address();
    $response['phone'] = $user->phone();
    $response['email'] = $user->email();
    $response['password'] = $user->password();
    $response['type'] = $user->type();
    $response['premium'] = $user->premium();
    
    echo json_encode($response);
    
}
