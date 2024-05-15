<?php

$uri_route = $_SERVER['REQUEST_URI'];

switch ($uri_route){
    case 'dynamic/CodeFiles/templates/':
        require 'index.php';
        break;
    case 'dynamic/CodeFiles/templates/admin':
        require '../templates/admin-panel.php';
        break;
    default: 
      echo '404 Not Found';
      break;
}



?>