<?php

/**
 * getProduct
 * Récupére la liste des produits
*/
function getProduct() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT id, name, image, description FROM product");

   // Retourne un tableau avec le résultat de ma requête
   $product = $query->fetchAll();

   return $product ;
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
