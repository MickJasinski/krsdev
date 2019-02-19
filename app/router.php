<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require 'views/home.php';
        break;
    case '/o-nas' :
        require 'views/about.php';
        break;
    case '/kontakt' :
        require 'views/contact.php';
        break;
    default: 
        require 'views/404.php';
        break;
}