<?php

// On détecte l'envois du formulaire
if (!empty($_POST)) {

    // On récupère les champs
    $login     = $_POST['login'];
    $password   = $_POST['password']; //AZERdfghj2132!!

    // On crypte le mot de passe
    // ...

    // Création du tableau d'erreur
    $error = [];
    // On récupère les données de l'utilisateur dans la base de
    // données grace à sont adresse email
    $user = getUserBylogin($login);

    // On compare le mot de passe de $_POST avec le mot de passe
    // de la BDD
    // Si les MDP correspondent, on log l'utilisateur
    if ($user && password_verify($password, $user->password)) {
        setUserSession(array(
            "id" => $user->id,
            "login" => $user->login,
            "email" => $email
        ));
    } elseif ($user && $login === $user->login) {
    array_push($error, array(
      "field" => "login",
      "message" => "Votre mot de passe n'est pas correct"
    ));
  }
  else {
    array_push($error, array(
			"field" => "login",
			"message" => "Votre Login n'est pas correct"
		));
  }
}



    // Sinon on ré-affiche le formulaire avec un message d'erreur
    // dans le flashbag
    // on remet l'adresse email saisie dans le champs email.
// if (empty($_POST)) {
//   setFlashbag("les id");
// }


?>
<div class="row no_marge">
    <div class="col-md-4 col-md-offset-4">

        <h2 class="text-center">Connexion</h2>



        <form method="post">

          <div class="form-group">
            <label for="login">LOGIN</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <!--si c'est faux on affiche un message d'erreur-->
          <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "login")."</span>"."</br>"; ?>

          <button type="submit" class="btn btn-primary center-block">Connexion</button>
        </form>

    </div>
</div>
