


<div style="height: 200px;">
</div>


<div class="row" >

    <div class="col">


        <div class="card">
            <img src="./media/img/berline.png" style="height: 200px; ">
            <div class="card-body" style="text-align: center;">

                <div class="row">
                    <div class="col">
                <h4 class="card-title">Berline </h4>
                    </div>
                    <div class="col">
                <?php $cars = $carManager->getByCategory(1);
                echo '<div style="background-color: #37c8ab;height: 30px;width: 30px;border-radius: 15px;">'.count($cars).'</div> ';
                ?>
                    </div>
                </div>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

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
                    echo count($cars);

                    ?></p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    echo count($cars);

                    ?></p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
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
                    echo count($cars);

                    ?></p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="./ReservationCar.php?category=4" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

    <div class="col">
        <div class="card">
            <img src="./media/img/4x4.png" style="height: 200px;">
            <div class="card-body" style="text-align: center;">
                <h5 class="card-title">4 X 4</h5>
                <p><?php $cars = $carManager->getByCategory(5);
                    echo count($cars);

                    ?></p>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="./ReservationCar.php?category=5" class="btn btn-secondary  btn-block">CHOISIR</a>
            </div>
        </div>
    </div>

</div>
