<?php

    include("loadClass.php");
    
    Authentification::disconnect();
    
    header("Location: ../index.php");

