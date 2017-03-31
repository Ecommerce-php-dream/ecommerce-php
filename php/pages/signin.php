<?php


// On détecte l'envois du formulaire
if (!empty($_POST)) {

    // On récupère les champs
    $login     = $_POST['login'];
    $password   = $_POST['password']; //AZERdfghj2132!!

    // On crypte le mot de passe
    // ...

    // On récupère les données de l'utilisateur dans la base de
    // données grace à sont adresse email
    $user = getUserBylogin($login);

    // On compare le mot de passe de $_POST avec le mot de passe
    // de la BDD
    // Si les MDP correspondent, on log l'utilisateur
    if ($password === $user->password) {
        setUserSession(array(
            "id" => $user->id,
            "login" => $user->login,
            "email" => $email
        ));
    }

    // Sinon on ré-affiche le formulaire avec un message d'erreur
    // dans le flashbag
    // on remet l'adresse email saisie dans le champs email.


}
?>
<div class="row">
    <div class="col-md-4 col-md-offset-4">

        <h3>Connexion</h3>

        <form method="post">

          <div class="form-group">
            <label for="login">LOGIN</label>
            <input type="text" class="form-control" id="login" name="login" placeholder="Login">
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          </div>

          <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>
</div>
