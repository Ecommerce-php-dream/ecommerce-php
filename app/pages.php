<?php

// Définit la page par défaut
if (isLogged())
{
  $page = 1;
}
else
{
  $page = 0;
}


// Définit la page courante
if (isset($_GET['page'])) {

    // Si l'index de page n'existe pas dans le tableaux des routes
    // On redirige vers la 404
    if (array_key_exists($_GET['page'],$_ROUTES)) {
        $page = $_GET['page'];
    } else {
        $page = 404;
    }
}

?>
