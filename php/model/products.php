<?php

/**
 * getProduct
 * Récupére la liste des produits
*/
function getProduct() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT id FROM product");

   // Executiuon de la requete
   $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}

function getProds($id_user){

	global $bdd;
    // Préparation de la requete
    $query = $bdd->prepare("SELECT * FROM product  WHERE id=:idUser");

    $query->bindValue(":idUser", $id_user, PDO::PARAM_INT);
    $query->execute();

    $result = $query->fetch(PDO::FETCH_OBJ);
    $query->closeCursor();

    //return $result;
}


?>
