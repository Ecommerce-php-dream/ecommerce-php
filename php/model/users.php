<?php

/**
 * setUser
 * Ajoute un utilisateur en base de deonnées et retourne l'id de la nouvelle insertion.
*/
function setUser($login, $email, $password, $role, $registered_at)
{
  // On définit $bdd en tant que variable globale
  global $bdd;

  // Préparation de la requête
  $query = $bdd->prepare("INSERT INTO user (login, email, password, role, registered_at)
                                    VALUES (:login, :email, :password, :role, NOW())");

  // BindValue
  $query->bindValue(':login', $login, PDO::PARAM_STR);
  $query->bindValue(':email', $email, PDO::PARAM_STR);
  $query->bindValue(':password', $password, PDO::PARAM_STR);
  $query->bindValue(':role', $role, PDO::PARAM_STR);

  // Execution de la requête
  $query->execute();

  // Récupération de l'utilisateur à l'aide du dernier enregistrement d'id
  return $bdd->lastInsertId();
}

?>
