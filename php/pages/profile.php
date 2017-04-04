<div class="container-fluid">
  <div class="row">
      <div class="col-lg-8 col-lg-push-4">
        <h3>Changer le mot de passe</h3>
        <br>
        <form action="?page=4" method="post">
          <div class="col-lg-4">
            <div class="form-group">
              <input class="form-control" name="actual_password" type="password" placeholder="Mot de passe actuel">
            </div>
            <div class="form-group">
              <input class="form-control" name="password" type="password" placeholder="Nouveau mot de passe">
            </div>
            <div class="form-group">
              <input class="form-control" name="repeat_password" type="password" placeholder="Confirmez le nouveau mot de passe">
            </div>
            <div class="form-group">
              <input class="btn center-block" type="submit" value="Confirmer">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-8 col-lg-push-4">
        <h3>Changer d'adresse e-mail</h3>
        <br>
        <form action="?page=5" method="post">
        <div class="col-lg-4">
          <div class="form-group">
            <input class="form-control" type="text" name="email" placeholder="Nouvelle adresse e-mail">
          </div>
          <div class="form-group">
            <input class="btn center-block" type="submit" value="Confirmer">
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>
