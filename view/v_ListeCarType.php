<div class="col-3">
    <div class="card">
        <img src="./media/img/berline.png" style="height: 250px; ">
        <div class="card-body" style="text-align: center;">
            <h5 class="card-title"><?php echo $car->brand().' '.$car->model(); ?></h5>
            <div class="row container">
                <div class="col-6 " style="text-align: center;">
            <p><div style="height: 40px;width: 40px; background-color:<?php echo $car->color();?>; border-radius: 20px "></div></p>
                </div>
                <div class="col-6 ">
            <p><div style="height: 40px;width: 40px;"><?php echo $car->price();?></div></p>
                </div>
            </div>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="./ReservationCar.php?category=1" class="btn btn-secondary  btn-block">CHOISIR</a>
        </div>
    </div>
</div>