<?php
session_start();
include("model/loadClass.php");
include("view/v_header.php");

$carManager= new CarManager();




include("view/v_ReservationType.php");

?>
