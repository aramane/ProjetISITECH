<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" title="Ajouter un utilisateur" id="addUser" data-toggle="modal" data-target="#addUserModal">
    <i class="fa fa-plus-circle"></i> Nouveau
</button>

<!-- Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">AJOUTER UN UTILISATEUR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addUserForm">
                    <div class="row">
                        <div class="col">
                            <label></label>
                            <input type="text" id="newUserName" class="form-control" name="newUserName" placeholder="Nom">
                        </div>
                        <div class="col">
                            <label></label>
                            <input type="text" id="newUserFirstName" class="form-control" name="newUserFirstName" placeholder="Prenom">
                        </div>
                    </div>                 
                    <br />
                    <div class="row">
                        <div class="form-group col">
                            <label></label>
                            <input type="text" class="form-control" id="newUserAddress" id="validationDefault03" name="newUserAddress" placeholder="Adresse">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label></label>
                            <input type="text" class="form-control" id="newUserPhone" name="newUserPhone" placeholder="Téléphone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input type="email" class="form-control" id="newUserEmail" name="newUserEmail" aria-describedby="emailHelp" placeholder="Adresse e-mail">
                    </div>
                    <div class="form-group">
                        <label></label>
                        <input type="password" class="form-control" id="newUserPassword" name="newUserPassword" placeholder="Mot de passe">
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <select class="form-control" id="newUserType" name="newUserType">
                                <option value="C">Client</option>
                                <option value="DC">Direction Commerciale</option>
                                <option value="A">Administrateur</option>
                            </select>
                        </div>
                    </div><br />

                    <div class="form-group">
                        <label>Carte Abonnement (Tarif préferenciel)</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" checked id="newUserRadio1" value="1" name="newUserAbo" class="custom-control-input">
                            <label class="custom-control-label" for="newUserRadio1">OUI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="newUserRadio2" value="0" name="newUserAbo" class="custom-control-input">
                            <label class="custom-control-label" for="newUserRadio2">NON</label>
                        </div>
                    </div>
                    <div id="createErrMess" style="color: red;"></div>
                    <br />
                    <button type="submit" class="btn btn-secondary btn-block text-white" id="addUserBtn" name="valider" value="valider">Créer l'utilisateur</button>
                </form>
            </div>

        </div>
    </div>
</div>

