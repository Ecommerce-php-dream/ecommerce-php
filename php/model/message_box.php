<?php
/**
 * setMessage
 * Ajoute un utilisateur en base de deonnées et retourne l'id de la nouvelle insertion.
*/
function setMessage($firstname, $lastname, $email, $message)
{
  // On définit $bdd en tant que variable globale
  global $bdd;

  // Préparation de la requête
  $query = $bdd->prepare("INSERT INTO message_box (firstname, lastname, email, message, send_at)
                                    VALUES (:firstname, :lastname, :email, :message, NOW())");

  // BindValue
  $query->bindValue(':firstname', $firstname, PDO::PARAM_STR);
  $query->bindValue(':lastname', $lastname, PDO::PARAM_STR);
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->bindValue(':message', $message, PDO::PARAM_STR);

  // Execution de la requête
  $query->execute();

  // Récupération de l'utilisateur à l'aide du dernier enregistrement d'id
  return $bdd->lastInsertId();
}
 ?>
