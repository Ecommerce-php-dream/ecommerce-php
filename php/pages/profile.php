<?php

// On vérifie l'envoi du formulaire via la méthode POST
if (!empty($_POST)) {

  // On récupère les données du fomulaire
  $password = $_POST['password'];
  $login = $_SESSION['user']['login'];

  // On définit $bdd en tant que variable globale
  global $bdd;

  // Préparation de la requete de MAJ des infos utilisateurs
  $update_query = $bdd->prepare("UPDATE user SET password=:password WHERE login=:login");

  // BindValue
  $update_query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
  $update_query->bindValue(":login", $login, PDO::PARAM_STR);

  // Si son mot de passe actuel rentré dans le POST correspond à son mot de passe stocké en base de données ET le mot de de passe répété est le même
  if (password_verify($password, $_SESSION['user']['password']) && strlen($password) > 2) {

    // On execute la requete
    $update_query->execute();

    // On indique à l'utilisateur que son mot de passe a été changé
   setFlashbag("Votre mot de passe à été modifié");
   // Affiche le Flashbag
   $flashbag = getFlashbag();
   if (strlen($flashbag) > 0) {
       echo "<div class=\"alert alert-success\">$flashbag</div>";
    }
    //header('location: ?page=32');
  }
  // Sinon on indique à l'utilisateur qu'il y a une erreur
  else {
    setFlashbag("Vous avez fait erreur");
    // Affiche le Flashbag
    $flashbag = getFlashbag();
    if (strlen($flashbag) > 0) {
        echo "<div class=\"alert alert-danger\">$flashbag</div>";
    }
  }
}

?>

<div class="container-fluid">
  <div class="row">
      <div class="col-lg-8 col-lg-push-4">
        <h3>Changer le mot de passe</h3>
        <br>
        <form action="?page=33" method="post">
          <div class="col-lg-4">
            <!-- <div class="form-group">
              <input class="form-control" name="actual_password" type="password" placeholder="Mot de passe actuel">
            </div> -->
            <div class="form-group">
              <input class="form-control" name="password" type="password" placeholder="Nouveau mot de passe">
            </div>
            <!-- <div class="form-group">
              <input class="form-control" name="repeat_password" type="password" placeholder="Confirmez le nouveau mot de passe">
            </div> -->
            <div class="form-group">
              <input class="btn center-block" type="submit" value="Confirmer">
            </div>
          </div>
        </form>
      </div>

      <div class="col-lg-8 col-lg-push-4">
        <h3>Changer d'adresse e-mail</h3>
        <br>
        <form action="?page=34" method="post">
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
