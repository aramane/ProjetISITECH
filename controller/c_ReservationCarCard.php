

<style>
    body{
        background-image: url("http://gipsypixel.com/wp-content/uploads/2018/01/full-hd-wallpaper-in-road-of-smartphone-pretty.jpg") ;
        background-repeat: no-repeat, repeat;
        background-position: center;
    }

</style>
<?php

session_start();

include("model/loadClass.php");
include("view/v_header.php");
echo '<div style="height: 20%;"></div>';

if (isset($_GET['id'])){

    $idCar=$_GET['id'];



    $CarManager= new CarManager();

    $car = $CarManager->get($idCar);

    echo '<div class="container card" style="padding:25px; box-shadow: 0px 3px 20px 10px #0e0e0e85;">

    <div class="row">';


        include("./view/v_ReservationCarCardId.php");

    $CaroptionManager= new CaroptionManager();

    $option = $CaroptionManager->get($car->id_option());

     include("./view/v_ReservationCarCardOption.php");


echo '</div></div>';










}
?>



<script type="text/javascript" src="js/index.js"></script>