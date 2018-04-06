<?php
    include("../model/loadclass.php"); 
    $user = new User($_POST);
    $user->setId($_GET['id']);
    $user2 = new User(array(
        'id' => 2,
        'name' => 'test'
    ));
    print_r($user);
    print_r($user2);
    $userManager = new UserManager();
    $userManager->update($user);
    $userManager->update($user2);

?> 
<!DOCTYPE html>
<html>
    <head>
        <title>ISILOC</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
        
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

        
    </head>

    <body>
        <p>Votre demande a bien été prise en compte <a href="v_UserTable.php">retour</a></p>
    </body>
</html>