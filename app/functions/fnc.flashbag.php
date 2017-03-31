<?php

// Création du message flash
function setFlashbag($message)
{
  // On définit si $_SESSION['flashbag'] est un tableau, si ce n'est pas le cas on le crée
  if(!isset($_SESSION['flashbag']))
    $_SESSION['flashbag'] = array();

  // On ajoute les messages à la session flashbag
  array_push($_SESSION['flashbag'], $message);
}

// Retourne et supprime le message flash
function getFlashbag()
{
  $output = "";
  if (isset($_SESSION['flashbag']))
  {
    $output = implode("<br>", $_SESSION['flashbag']);

    // Suppression du message flashbag de la $_SESSION
    unset($_SESSION['flashbag']);
  }
  return $output;
}

?>
