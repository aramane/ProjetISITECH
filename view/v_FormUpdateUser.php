<!-- Modal -->
<div class="modal fade" id="updateUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">MODIFIER UN UTILISATEUR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="updateUserForm">
                    <div class="row">
                        <div class="col">
                            <label></label>
                            <input type="text" id="updateUserName" class="form-control" name="updateUserName" placeholder="Nom">
                        </div>
                        <div class="col">
                            <label></label>
                            <input type="text" id="updateUserFirstName" class="form-control" name="updateUserFirstName" placeholder="Prenom">
                        </div>
                    </div>                 
                    <br />
                    <div class="row">
                        <div class="form-group col">
                            <label></label>
                            <input type="text" class="form-control" id="updateUserAddress" id="validationDefault03" name="updateUserAddress" placeholder="Adresse">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label></label>
                            <input type="text" class="form-control" id="updateUserPhone" name="updateUserPhone" placeholder="Téléphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input type="email" class="form-control" id="updateUserEmail" name="updateUserEmail" aria-describedby="emailHelp" placeholder="Adresse e-mail">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input type="password" class="form-control" id="updateUserPassword" name="updateUserPassword" placeholder="Mot de passe">
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <select class="form-control" id="updateUserType" name="updateUserType">
                                <option value="C">Client</option>
                                <option value="DC">Direction Commerciale</option>
                                <option value="A">Administrateur</option>
                            </select>
                        </div>
                    </div><br />

                    <div class="form-group">
                        <label>Carte Abonnement (Tarif préferenciel)</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" checked id="updateUserRadio1" value="1" name="updateUserAbo" class="custom-control-input">
                            <label class="custom-control-label" for="newUserRadio1">OUI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="updateUserRadio2" value="0" name="updateUserAbo" class="custom-control-input">
                            <label class="custom-control-label" for="newUserRadio2">NON</label>
                        </div>
                    </div>
                    <div id="updateErrMess" style="color: red;"></div>
                    <input id="idUser" hidden />
                    <br />
                    <button type="submit" class="btn btn-secondary btn-block text-white" id="updateUserBtn" name="valider" value="valider">Modifier l'utilisateur</button>
                </form>
            </div>

        </div>
    </div>
</div>