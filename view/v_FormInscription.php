<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Inscripmodal">
    Inscription
</button>

<!-- Modal -->
<div class="modal fade" id="Inscripmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">INSCRIVEZ-VOUS</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">



                <form id="subscribeForm">

                    <div class="row">

                        <div class="col">
                            <label></label>
                            <input type="text" id="Sname" class="form-control" name="Sname" placeholder="Nom">
                        </div>



                        <div class="col">
                            <label></label>
                            <input type="text" id="Sfirstname" class="form-control" name="SfirstName" placeholder="Prenom">
                        </div>

                    </div>
                    
                    <br />

                    <div class="row">

                    <div class="form-group col">
                        <label></label>
                        <input type="text" class="form-control" id="Saddress" id="validationDefault03" name="Saddress" placeholder="Adresse">
                    </div>

                    </div>



                    <div class="row">

                        <div class="form-group col">
                            <label></label>
                            <input type="text" class="form-control" id="Sphone" name="Sphone" placeholder="Téléphone">
                        </div>


                    </div>

                    <div class="form-group">
                        <label></label>
                        <input type="email" class="form-control" id="Semail" name="Semail" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label></label>
                        <input type="password" class="form-control" id="Spassword" name="Spassword" placeholder="Mot de passe">



                    </div><br />

                    <div class="form-group">
                        <label>Carte Abonnement (Tarif préferenciel)</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" checked id="customRadioInline1" value="1" name="cardabo" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">OUI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" value="0" name="cardabo" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">NON</label>
                        </div>

                    </div>
                    
                    <div id="sErrMess" style="color: red;"><span id="sErrMessText"></span><a href="" id="connectLink">Connectez-vous.</a></div>
                    
                    <br />

                    <button type="submit" class="btn btn-secondary btn-block text-white" id="subscribeBtn" name="valider" value="valider">S'inscrire</button>

                </form>


            </div>

        </div>
    </div>
</div>