<?php
//Start a PHP session if not already started
if(!isset($_SESSION)){ 
    session_start(); 
}

//Load DB Init if you want to request something in db about path
$userConfigFile = false;
if($userConfigFile)
    require 'config.php';

//Handle Paths
switch ($_SERVER['REDIRECT_URL']) {
    //Handle by the frontend
    case '/':
    case '' :
    case '/login' :
    case '/register' :
    case '/logout' :
        require __DIR__ . '/views/index.php';
        break;
    //Not handle by the frontend (ex. Direct files /css, /js)
    case '/css' :
        require __DIR__ . '/css';
        break;
    case '/js' :
        require __DIR__ . '/js';
        break;
    case '/icons' :
        require __DIR__ . '/icons';
        break;
    case '/api/1' :
        require __DIR__ . '/api/1';
        break;
    default:
        require __DIR__ . '/views/404.php';
        break;
}