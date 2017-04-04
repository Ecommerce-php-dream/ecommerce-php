<?php

session_name("E-commerce");
session_start();

// Inclure le fichier de Faker
require_once 'vendor/autoload.php';

// Inclure le fichier de config
include_once 'app/config.php';

// Inclure les fonctions
include_once 'app/functions/autoload.php';

// Inclure le fichier de routes
include_once 'app/routes.php';

// Inclure le fichier de pages
include_once 'app/pages.php';

// Inclure le fichier de fonctions pour les users
include_once 'php/model/users.php';

// Inclure le fichier de fonctions pour les produits
include_once 'php/model/products.php';


// -- Connexion à la base de données
// --
try {
    $bdd = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $pass);
}
catch(Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

// -- Inclure les pages communes
// --
include_once 'php/common/header.php';
include_once $_ROUTES[$page][1];
include_once 'php/common/footer.php';

 ?>
