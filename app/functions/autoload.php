<?php
// Define the "fnclib" path name
$fncFolder = "app/functions/";

// Scan the "fnclib" folder
$fncFiles = scandir($fncFolder);

// Include each files of "fnclib" folder if file name
// is prefixed by "fnc."
foreach ($fncFiles as $fileName) {
    if (preg_match("/^fnc\./", $fileName)) {
        include_once $fncFolder.$fileName;
    }
}

?>
