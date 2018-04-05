<?php

include("../loadClass.php");

$usermanager = new UserManager();

$user = new User(array(
    'address' => $_POST['Saddress'],
    'email' => $_POST['Semail'],
    'name' => $_POST['Sname'],
    'firstName' => $_POST['SfirstName'],
    'type' => 'C',
    'phone' => $_POST['Sphone'],
    'password' => $_POST['Spassword']
));

if($usermanager->userExists($user))
{
    $response = 0;
}
else
{
    $usermanager->add($user);
    $response = 1;
}

echo json_encode($response);
        


