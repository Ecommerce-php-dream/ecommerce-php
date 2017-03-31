<?php

function setUserSession($userData) {

    // Log l'utilisateur
    $_SESSION['user'] = $userData;

    // redirige vers la page streamer
    header("location: ?page=20");
    exit;
}

?>
