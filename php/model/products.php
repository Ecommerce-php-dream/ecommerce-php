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
   return $query->fetchAll();

}


?>
