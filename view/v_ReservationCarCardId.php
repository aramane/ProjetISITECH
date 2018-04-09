


<div class="col-5">
    <div class="card" style="    box-shadow: 0px 3px 13px 0px #0e0e0e85;border: none;">
        <img src="<?php echo $car->url(); ?>" style="height: 250px;width: 420px; ">
        <div class="card-body" style="text-align: center;">
            <h5 class="card-title"><?php echo $car->brand().' '.$car->model(); ?></h5>
            <div class="row container">
                <div class="col-5 " style="text-align: center;">
                    <p><div style="height: 40px;width: 40px; background-color:<?php echo $car->color();?>; border-radius: 20px;margin-left: 80px;box-shadow: 0px 0px 4px 0px; "></div></p>
                </div>

                <div class="col-7 ">
                    <p><div style="font-size: 25px; color: #815817;"><b><?php echo $car->price().' € par jour';?></b></div></p>
                </div>
            </div>

            <?php

            if (isset($_SESSION['premium'])==1){

                echo '<div class="card btn" style="background-color: #815817; border: none; height: 5%;padding-top: 2%;"><p  style="color: #fff"><b> Tarif premium  ' .($car->price()*(0.80)).' € ( économie '.($car->price()-($car->price()*(0.80))).' €)  </b></p></div>';
            }else{

                echo '<div class="card btn" style="background-color: #815817; border: none; height: 5%;padding-top: 2%;"><p  style="color: #fff"><b>Devenez Premium pour profier de -20% </b></p></div>';
            }
            ?>

        </div>
    </div>
</div>

