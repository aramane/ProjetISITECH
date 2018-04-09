




        <div class="col-7">
            <div class="card">
                    <h5 style="text-align: center">OPTION</h5>
                <div class="row">
                    <div class="col" style="text-align: center">
                         <?php

                         if($option->airbag()==1){

                             echo 'oui';

                         }else{
                             echo 'non';
                         }

                         ?>
                    </div>



                    <div class="col" style="text-align: center">
                        <?php echo $option->conditioner(); ?>
                    </div>


                    <div class="col" style="text-align: center">
                        <?php echo $option->passenger(); ?>
                    </div>





                    <div class="col" style="text-align: center">
                        <?php echo $option->boardcpu(); ?>
                    </div>


                    <div class="col" style="text-align: center">
                        <?php echo $option->cam(); ?>
                    </div>

                    <div class="col" style="text-align: center">
                        <?php echo $option->wheel(); ?>
                    </div>

                    <div class="col" style="text-align: center;">
                        <?php echo $option->radar(); ?>
                    </div>

</div>

            </div>
        </div>

