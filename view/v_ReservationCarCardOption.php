




        <div class="col-7">
            <div class="card">
                    <h3 style="text-align: center">OPTION</h3><br/>
                <div class="row" style="color: #757171;">
                    <div class="col" style="text-align: center">
                        <p style="font-size: 15px; "><b>Airbag</b></p>
                         <?php
                         if($option->airbag()==1){
                             echo 'oui';
                         }else{
                             echo 'non';
                         }
                         ?>
                    </div>



                    <div class="col" style="text-align: center">
                        <p style="font-size: 15px;"><b>Airconditioné</b></p>
                        <?php
                        if( $option->conditioner()==1){
                            echo 'oui';
                        }else{
                            echo 'non';
                        }

                        ?>
                    </div>


                    <div class="col" style="text-align: center">
                        <p style="font-size: 15px;"><b>Place</b></p>
                        <?php echo $option->passenger(); ?>
                    </div>


                    <div class="col" style="text-align: center">
                        <p style="font-size: 15px;"><b>Ordinateur</b></p>
                        <?php
                        if( $option->boardcpu()==1){
                            echo 'oui';
                        }else{
                            echo 'non';
                        }
                        ?>
                    </div>


                    <div class="col" style="text-align: center">
                        <p style="font-size: 15px;"><b>cam</b></p>
                        <?php
                        if( $option->cam()==1){
                            echo 'oui';
                        }else{
                            echo 'non';
                        }
                        ?>


                    </div>

                    <div class="col" style="text-align: center">
                        <p style="font-size: 15px;"><b>Roue</b></p>
                        <?php
                        if( $option->wheel()==1){
                            echo 'oui';
                        }else{
                            echo 'non';
                        }
                        ?>
                    </div>

                    <div class="col" style="text-align: center;">
                        <p style="font-size: 15px;"><b>radar</b></p>
                        <?php
                        if($option->radar()==1){
                            echo 'oui';
                        }else{
                            echo 'non';
                        }
                        ?>
                    </div>

</div>

            </div>
        </div>

