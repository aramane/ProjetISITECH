<?php

session_start();

include("../loadClass.php");

if(Access::admin())   
{
    $usermanager = new UserManager();

    $user = new User(array(
        'id' => $_POST['id']
    ));
    
    $usermanager->delete($user);
}