<?php
include_once ("v_headB.php");
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light" style=" padding-right: 5%;  padding-left: 30%; height: 75px;" >
    <a class="navbar-brand" href="#"><img src="./media/img/01.png" style="height: 75%; margin-right: 25px;"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">
                <a class="nav-link" href="#">Abonnement</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="./ReservationType.php">Réservation</a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="#"></a>
            </li>

        </ul>
        
        <?php
        
        if(!Access::connected())
        {                    
            include("v_FormConnect.php");
        
            include("v_FormInscription.php");
        }
        else
        {
        ?>

        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                MON COMPTE
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#" style=" color: #757171"><b><span style="text-transform: uppercase;"><?php echo $_SESSION['name'] . ' ' . $_SESSION['firstName']; ?></b>

                    <a class="dropdown-item" style="background-color: #37c8ab; color:#fff; ">Tableau de bord</a>
                    <?php if(Access::admin())
                    {
                    ?>
                        <a class="dropdown-item" href="#">Gestion Utilisateur</a>
                    <?php
                    }
                    if(Access::adminOrSalesManager())
                    {
                    ?>
                        <a class="dropdown-item" href="#">Gestion Voiture </a>
                        <a class="dropdown-item" href="#">Gestion Facturation</a>
                        <a class="dropdown-item" href="#">Gestion Contrat</a>
                    <?php
                    }
                    ?>
                    <div class="dropdown-divider"></div>
                    <?php if(Access::client())
                    {
                    ?>
                        <a class="dropdown-item" href="#">Mes Réservation</a>
                        <a class="dropdown-item" href="#">Mes Contrat</a>
                        <a class="dropdown-item" href="#">Mes Facture</a>
                    <?php
                    }
                    ?>
                    <a class="dropdown-item" href="model/disconnect.php">Déconnexion</a>
            </div>
        </div
        <?php
        }
        ?>

    </div>
</nav>