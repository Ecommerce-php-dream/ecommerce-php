<?php

$login = null;
$email = null;
$password = null;

// Vérifie l'envoi du formulaire en POST
if (!empty($_POST)) {

  // Récupère les données de $_POST
  $login = $_POST['login'];
  $email = $_POST['email'];
  $password = $_POST['password'];
}

var_dump($_POST);

// Création du tableau d'erreur
$error = [];





?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-lg-push-4">
      <h2 class="text-center">Inscription</h2>
      <form class="" action="" method="post">
        <div class="form-group">
          <label for="login">Votre pseudo :</label>
          <input id="login" name="login" type="text" class="form-control" placeholder="Pseudo">
        </div>

        <div class="form-group">
          <label for="email">Votre adresse email :</label>
          <input id="email" name="email" type="text" class="form-control" placeholder="Email">
        </div>

        <div class="form-group">
          <label for="password">Votre mot de passe :</label>
          <input id="password" name="password" type="password" class="form-control" placeholder="Mot de passe">
        </div>

        <button class="btn btn-primary center-block" type="submit" name="button">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
