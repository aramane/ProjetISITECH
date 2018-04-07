<?php
session_start();
include("model/loadClass.php");
include("view/v_header.php");

$userManager = new UserManager();
$row = $userManager->getFullList();

include("view/v_UserManagement.php");

?>

<script type="text/javascript" src="js/index.js"></script>

