<?php

/**
 * getProduct
 * Récupére la liste des produits
*/
function getProduct() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT id, name, image, year, price FROM product ORDER BY name");

   // Executiuon de la requete
   $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}

function getProductName() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT name FROM product ORDER BY name");

   // Executiuon de la requete
   $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}

function getProductYear() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT year FROM product ORDER BY year");

   // Executiuon de la requete
   $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}

function getProductPrice() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT price FROM product ORDER BY price");

   // Executiuon de la requete
   $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}

function getCategory() {

   // On définit $bdd comme étant une variable globale
   global $bdd;

   // Préparation de la requête
   $query = $bdd->query("SELECT name FROM category ORDER BY name");

   // Executiuon de la requete
   $query->execute();

   // Execute et retourne le resultat de la requête
   return $query->fetchAll(PDO::FETCH_OBJ);
}

?>
