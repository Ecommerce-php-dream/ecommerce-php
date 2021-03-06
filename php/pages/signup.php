<?php

$login = null;
$email = null;
$password = null;
$role = null;

// Vérifie l'envoi du formulaire en POST
if (!empty($_POST)) {

  // Récupère les données de $_POST
  $login = formatString($_POST['login']);
  $email = formatString($_POST['email']);
  $password = formatString($_POST['password']);
  $role = 'customer';

  // Cryptage du mot de passe
  $crypt_password = password_hash($password, PASSWORD_DEFAULT);

  // Création du tableau d'erreur
  $error = [];

  // Contrôle du nom d'utilisateur
  if (strlen($login) < 2) {
    array_push($error, array(
      "field" => "login",
      "message" => "Votre login doit contenir au moins 2 caractères"
    ));
  }

  if (strlen($password) < 2) {
    array_push($error, array(
      "field" => "password",
      "message" => "Votre mot de passe doit contenir au moins 2 caractères"
    ));
  }

  // Contrôle de l'adresse email
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          array_push($error, array(
              "field" => "email",
              "message" => "Vous devez saisir une adresse email valide."
          ));
  }

  // Contrôle du captcha
  if($_POST['captcha'] != $_SESSION['captcha']) {
    array_push($error, array(
        "field" => "captcha",
        "message" => "Le captcha n'est pas correct."
    ));
  }

  // Enregistrement de l'utilisateur dans la base de données
  if (empty($error)) {
      $user_id = setUser($login, $email, $crypt_password, $role);

      // On log l'utilisateur et on le redirige vers sa page profil
      if ($user_id > 0) {

          // Log l'utilisateur
          setUserSession(array(
              "id" => $user_id,
              "login" => $login,
              "email" => $email,
              "role" => $role
          ));
      }

      // Si l'enregistrement à échoué on affiche un message d'erreur
      else {
          setFlashbag("L'enregistrement en BD à échoué");
      }
  }
}

$flashbag = getFlashbag();

if (strlen($flashbag) > 0) {
    echo "<div class=\"alert alert-danger\">$flashbag</div>";
}

?>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-lg-push-4">
      <h2 class="text-center">Inscription</h2>
      <form class="" action="" method="post">
        <div class="form-group">
          <label for="login">Votre pseudo :</label>
          <input id="login" name="login" type="text" class="form-control" placeholder="Pseudo" value="<?php echo $login; ?>">
          <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "login")."</span>"; ?>
        </div>

        <div class="form-group">
          <label for="email">Votre adresse email :</label>
          <input id="email" name="email" type="text" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
          <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "email")."</span>"; ?>
        </div>

        <div class="form-group">
          <label for="password">Votre mot de passe :</label>
          <input id="password" name="password" type="password" class="form-control" placeholder="Mot de passe">
          <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "password")."</span>"; ?>
        </div>

        <div class="form-group">
          <label for="captcha">Recopiez le mot : <img src="php/model/captcha.php" alt="Captcha" /></label>
          <input id="captcha" name="captcha" type="text" class="form-control" />
          <?php if (isset($error)) echo "<span class=\"text-danger\">".printError($error, "captcha")."</span>"; ?>
        </div>

        <button class="btn btn-primary center-block" type="submit" name="button">S'inscrire</button>
      </form>
    </div>
  </div>
</div>
