<?php
//M19's Basic-PHP-Router

//Show PHP errors
$showErrors = false;

if($showErrors){
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

require 'router.php';