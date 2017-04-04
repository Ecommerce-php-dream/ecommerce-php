<?php

// On vérifie l'envoi du formulaire via la méthode POST
if (!empty($_POST)) {

  // On récupère les données du fomulaire
  $email = $_POST['email'];
  $login = $_SESSION['user']['login'];

  // On définit $bdd en tant que variable globale
  global $bdd;

  // Préparation de la requete de MAJ des infos utilisateurs
  $update_query = $bdd->prepare("UPDATE user SET email=:email WHERE login=:login");

  // BindValue
  $update_query->bindValue(':email', $email, PDO::PARAM_STR);
  $update_query->bindValue(":login", $login, PDO::PARAM_STR);

  // Si l'adresse email est valide
  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //header('location: ?page=1');
    // On execute la requete
    $update_query->execute();
    setUserSession(array(
      "id" => $user->id,
      "login" => $_SESSION['user']['login'],
      "email" => $_POST['email'],
      "password" => $_SESSION['user']['password']
    ));

    // On indique à l'utilisateur que son adresse email à été modifiée
   setFlashbag("Votre adresse email à été modifiée");
   // Affiche le Flashbag
   $flashbag = getFlashbag();
   if (strlen($flashbag) > 0) {
       echo "<div class=\"alert alert-success\">$flashbag</div>";
    }

  }

  // Sinon on indique à l'utilisateur qu'il y a une erreur
  else {
    //header('location: ?page=32');
    setFlashbag("Votre adresse email n'est pas valide");
    // Affiche le Flashbag
    $flashbag = getFlashbag();
    if (strlen($flashbag) > 0) {
        echo "<div class=\"alert alert-danger\">$flashbag</div>";
    }
  }
}
?>
