<?php

session_start();

include("model/loadClass.php");
include("view/v_header.php");
echo '<div style="height: 10%;"></div>';

if (isset($_GET['category'])){

    $type=$_GET['category'];



    $carManager= new CarManager();

    $cars = $carManager->getByCategory($type);

    echo '<div class="row" >';

    foreach($cars as $car)


    {

        $userManager= new UserManager();
        $userPremium = $userManager->getListPremium();

        foreach($userPremium as $Premium)
        {


            $Premium->premium();


        include("./view/v_ListeCarType.php");

        }

    }





    echo '</div>';






}
?>