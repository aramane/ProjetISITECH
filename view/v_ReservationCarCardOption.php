




        <div class="col-7">
            <div class="card" style="padding: 15px;box-shadow: 0px 3px 13px 0px #0e0e0e85;border: none;">
                <div class="card" style="padding: 15px;" >
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
<br/>
                <div class="card" style="padding: 15px;">
                <h3 style="text-align: center;">RÉSERVATION</h3>
                <br/>

                <form>
                    <div class="row">
                        <div class="col">
                            <input type="text" id="datepicker" class="form-control" placeholder="DÉBUT DE LOCATION">
                        </div>
                        <div class="col">
                            <input type="text" id="datepickerArriver" class="form-control" placeholder="FIN DE LOCATION">
                        </div>
                    </div><br/>
                    <button type="submit" class="btn btn-block">RÉSERVEZ</button>
                </form>

                <script>
                    $( function(){
                        $.datepicker.regional['fr'] = {
                            closeText: 'Fermer',
                            prevText: 'Précédent',
                            nextText: 'Suivant',
                            currentText: 'Aujourd\'hui',
                            monthNames: ['Janvier','Février','Mars','Avril','Mai','Juin','Juillet','Août','Septembre','Octobre','Novembre','Décembre'],
                            monthNamesShort: ['Janv.','Févr.','Mars','Avril','Mai','Juin','Juil.','Août','Sept.','Oct.','Nov.','Déc.'],
                            dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
                            dayNamesShort: ['Dim.','Lun.','Mar.','Mer.','Jeu.','Ven.','Sam.'],
                            dayNamesMin: ['D','L','M','M','J','V','S'],
                            weekHeader: 'Sem.',
                            dateFormat: 'dd/mm/yy',
                            firstDay: 1,
                            isRTL: false,
                            showMonthAfterYear: false,
                            yearSuffix: ''
                        };
                        $.datepicker.setDefaults($.datepicker.regional['fr']);

                        $( "#datepicker" ).datepicker();
                        $( "#datepickerArriver" ).datepicker();
                    } );
                </script>



</div>

            </div>
        </div>

