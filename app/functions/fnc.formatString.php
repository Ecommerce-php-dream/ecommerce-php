<?php
function formatString ($string) {
    $string = trim($string);
    $string = addslashes($string);
    return $string;
}

?>
