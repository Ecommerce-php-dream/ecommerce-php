<?php
function printError ($error, $field) {
    foreach ($error as $data) {
         if ( $data['field'] == $field ) {
             return $data['message'];
         }
    }
}

?>
