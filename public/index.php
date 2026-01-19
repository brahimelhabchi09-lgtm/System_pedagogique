<?php

use Core\Router\Router;

require_once __DIR__ ."/../vendor/autoload.php";
$router = new  Router() ; 
$router->get("/", "HomeController@index");
$router->get("/login", "AuthController@login");
$router->get("/admin", "AdminController@index");
$router->get("/Formateur", "FormateurController@index");
$router->get("/Student", "StudentController@index");

$router->dispatch();