
<!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#connectmodal" style="margin-right: 25px;">
    Connexion
</button>

<!-- Modal -->
<div class="modal fade" id="connectmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">CONNEXION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form id="connect">
              <div class="form-group">
                  <label>Adresse e-mail</label>
                  <input type="text" class="form-control" name="login" placeholder="Adresse e-mail">
              </div>
              <div class="form-group">
                  <label >Mot de passe :</label>
                  <input type="password" class="form-control" name="password" placeholder="Mot de passe">
              </div>
              
              <div id="errMess" style="color: red; display:none;">Vos identifiants n'ont pas été reconnus. <a href="" id="subscribe">Inscrivez-vous.</a></div>
              
              <br />

              <button type="submit" class="btn btn-secondary btn-block text-white" id="connexionBtn" name="valider" value="valider">Se connecter</button>

          </form>
      </div>

    </div>
  </div>
</div>