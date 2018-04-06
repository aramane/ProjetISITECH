<?php

session_start();

include("model/loadClass.php");
include("view/v_header.php");
echo '<div style="height: 10%;"></div>';

if (isset($_GET['id'])){

    $idCar=$_GET['id'];



    $carManager= new CarManager();

    $car = $carManager->get( $idCar);





        include("./view/v_ReservationCarCard.php");














}
?>


<script type="text/javascript" src="js/index.js"></script>