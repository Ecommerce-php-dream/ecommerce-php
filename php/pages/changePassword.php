<?php

// On vérifie l'envoi du formulaire via la méthode POST
if (!empty($_POST)) {

  // On récupère les données du fomulaire
  $password = $_POST['password'];
  $login = $_SESSION['user']['login'];
  $actual_password = $_POST['actual_password'];
  $repeat_password = $_POST['repeat_password'];

  // On définit $bdd en tant que variable globale
  global $bdd;

  // Préparation de la requete de MAJ des infos utilisateurs
  $update_query = $bdd->prepare("UPDATE user SET password=:password WHERE login=:login");

  // BindValue
  $update_query->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
  $update_query->bindValue(":login", $login, PDO::PARAM_STR);

  // Si son mot de passe actuel rentré dans le POST correspond à son mot de passe stocké en base de données ET le mot de de passe répété est le même
  if (password_verify($actual_password, $_SESSION['user']['password']) && $password === $repeat_password && strlen($password) > 2) {

    // On execute la requete
    $update_query->execute();

    // On indique à l'utilisateur que son mot de passe a été changé
   setFlashbag("Votre mot de passe à été modifié");
   // Affiche le Flashbag
   $flashbag = getFlashbag();
   if (strlen($flashbag) > 0) {
       echo "<div class=\"alert alert-success\">$flashbag</div>";
    }
  //header('location: ?page=1');
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
