<?php

require_once './libs/Router/Router.php';
require_once './api/ApiComentarioController.php';

// crea el router
$router = new Router();

// define la tabla de ruteo
$router->addRoute('comentario/:ID','GET','ApiComentarioController','getComentariosSerie');
$router->addRoute('comentario/:ID','DELETE','ApiComentarioController','deleteComentario');
$router->addRoute('comentario','POST','ApicomentarioController','addComentario');
// rutea
$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);