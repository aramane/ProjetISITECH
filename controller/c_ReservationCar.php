<?php

session_start();

include("model/loadClass.php");
include("view/v_header.php");


if (isset($_GET['category'])){

    $type=$_GET['category'];

    echo $type;

    $carManager= new CarManager();

    $cars = $carManager->getByCategory($type);

    echo '<div class="row" >';

    foreach($cars as $car)
    {


        include("./view/v_ListeCarType.php");



    }
    echo count($cars);
    echo '</div>';






}
?>