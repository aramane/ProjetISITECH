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



                <form id="inscription">

                    <div class="row">

                        <div class="col">
                            <label></label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                        </div>



                        <div class="col">
                            <label></label>
                            <input type="text" class="form-control" name="prenom" placeholder="Prenom" required>
                        </div>

                    </div>
                    
                    <br />

                    <div class="row">

                    <div class="form-group col">
                        <label></label>
                        <input type="text" class="form-control" id="validationDefault03" name="adresse" placeholder="Adresse" required>
                    </div>

                    </div>



                    <div class="row">

                        <div class="form-group col">
                            <label></label>
                            <input type="text" class="form-control" name="phone" placeholder="Téléphone" required>
                        </div>


                    </div>

                    <div class="form-group">
                        <label></label>
                        <input type="email" class="form-control"  name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
                    </div>

                    <div class="form-group">
                        <label></label>
                        <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required>



                    </div><br />

                    <div class="form-group">
                        <label>Carte Abonement (Tarif préferenciel)</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="cardabo" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline1">OUI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="cardabo" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">NON</label>
                        </div>

                    </div>
                    
                    <br />

                    <button type="submit" class="btn btn-secondary btn-block text-white" name="valider" value="valider">S'inscrire</button>

                </form>


            </div>

        </div>
    </div>
</div>