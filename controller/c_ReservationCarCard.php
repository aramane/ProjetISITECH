
<?php

session_start();

include("model/loadClass.php");
include("view/v_header.php");
echo '<div style="height: 10%;"></div>';

if (isset($_GET['id'])){

    $idCar=$_GET['id'];



    $CarManager= new CarManager();

    $car = $CarManager->get($idCar);

    echo '<div class="container card" style="padding:25px;">

    <div class="row">';


        include("./view/v_ReservationCarCardId.php");

    $CaroptionManager= new CaroptionManager();

    $option = $CaroptionManager->get($car->id_option());

     include("./view/v_ReservationCarCardOption.php");


echo '</div></div>';










}
?>



<script type="text/javascript" src="js/index.js"></script>