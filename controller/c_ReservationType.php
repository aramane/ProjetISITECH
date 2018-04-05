<?php
session_start();
include("model/loadClass.php");
include("view/v_header.php");

$carManager= new CarManager();



include("view/v_ReservationType.php");

?>

<script type="text/javascript" src="js/index.js"></script>
