


<div style="height: 200px;">
</div>


<div class="row" >

    <div class="col">


        <div class="card">
            <img src="./media/img/berline.png" style="height: 200px; ">
            <div class="card-body" style="text-align: center;">


                <h4 class="card-title">Berline </h4>

                <p><?php $cars = $carManager->getByCategory(1);
                echo '<div style="background-color: #815817;height: 40px;width: 40px;border-radius: 20px; margin-left:45%;margin-right: 45%; padding-top: 8px;color: #fff;">x<b>' .count($cars).'</b></div> ';
                ?></p>


                <p class="card-text" style="color:#815817;font-size: 25px; ">A partir de <b> <?php $array = [];

                    foreach($cars as $car)
                    {
                        array_push($array, $car->price());
                    }
                    echo min($array).' €'; ?></b></p>

                <a href="./ReservationCar.php?category=1" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <img src="./media/img/citadine.png" style="height: 200px;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Citadine</h5>
                <p><?php $cars = $carManager->getByCategory(2);
                    echo '<div style="background-color: #815817;height: 40px;width: 40px;border-radius: 20px; margin-left:45%;margin-right: 45%; padding-top: 8px;color: #fff;">x<b>' .count($cars).'</b></div> ';
                    ?></p>
                <p class="card-text" style="color:#815817;font-size: 25px; ">A partir de <b> <?php $array = [];

                        foreach($cars as $car)
                        {
                            array_push($array, $car->price());
                        }
                        echo min($array).' €'; ?></b></p>
                <a href="./ReservationCar.php?category=2" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <img src="./media/img/utilitaire.png" style="height: 200px;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">Utilitaire</h5>
                <p><?php $cars = $carManager->getByCategory(3);
                    echo '<div style="background-color: #815817;height: 40px;width: 40px;border-radius: 20px; margin-left:45%;margin-right: 45%; padding-top: 8px;color: #fff;">x<b>' .count($cars).'</b></div> ';


                    ?></p>
                <p class="card-text" style="color:#815817;font-size: 25px; ">A partir de <b> <?php $array = [];

                        foreach($cars as $car)
                        {
                            array_push($array, $car->price());
                        }
                        echo min($array).' €'; ?></b></p>
                <a href="./ReservationCar.php?category=3" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <img src="./media/img/suv.png" style="height: 200px;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">SUV</h5>
                <p><?php $cars = $carManager->getByCategory(4);
                    echo '<div style="background-color: #815817;height: 40px;width: 40px;border-radius: 20px; margin-left:45%;margin-right: 45%; padding-top: 8px;color: #fff;">x<b>' .count($cars).'</b></div> ';


                    ?></p>
                <p class="card-text" style="color:#815817;font-size: 25px; ">A partir de <b> <?php $array = [];

                        foreach($cars as $car)
                        {
                            array_push($array, $car->price());
                        }
                        echo min($array).' €'; ?></b></p>
                <a href="./ReservationCar.php?category=4" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

    <div class="col" >
        <div class="card">
            <img src="./media/img/4x4.png" style="height: 200px;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">4 X 4</h5>
                <p><?php $cars = $carManager->getByCategory(5);
                    echo '<div style="background-color: #815817;height: 40px;width: 40px;border-radius: 20px; margin-left:45%;margin-right: 45%; padding-top: 8px;color: #fff;">x<b>' .count($cars).'</b></div> ';


                    ?></p>
                <p class="card-text" style="color:#815817;font-size: 25px; ">A partir de <b> <?php $array = [];

                        foreach($cars as $car)
                        {
                            array_push($array, $car->price());
                        }
                        echo min($array).' €'; ?></b></p>
                <a href="./ReservationCar.php?category=5" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

</div>
