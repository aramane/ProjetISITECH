<?php
    include("../model/loadclass.php"); 
    $user = new User($_POST);
    $user->setId($_GET['id']);
    $userManager = new UserManager();
    $userManager->update($user);
    header('Location: v_UserTable.php');
    exit();
?>