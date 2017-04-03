<?php

// Supprime la session
session_destroy();

// Redirige l'utilisateur vers la page d'accueil
header("location: ?page=0");
exit;

?>
