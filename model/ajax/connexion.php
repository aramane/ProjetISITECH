<?php

include("../loadClass.php");

$usermanager = new UserManager();

$user = new User(array(
    'email' => $_POST['login'],
    'password' => $_POST['password']
));

if($usermanager->checkConnexion($user))
{
    $userToConnect = $usermanager->getByEmail($_POST['login']);
    Authentification::connect($userToConnect);
    $response = 1;
}
else
{
    $response = 0;
}

echo json_encode($response);
