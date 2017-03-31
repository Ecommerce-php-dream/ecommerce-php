<?php

function isLogged()
{
  return isset($_SESSION['user']['id']) && !empty($_SESSION['user']['id']);
}

?>
