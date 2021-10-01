<?php
require_once './Model/UsuarioModel.php';
require_once './Views/RegistroView.php';

class RegistroController{
    private $model;
    private $view;

    function __construct(){
        $this->model = new UsuarioModel();
        $this->view = new RegistroView();
    }

    function locacionLogin(){
        header("Location: ". LOGIN_URL);
    }

    function GetRegistro(){
        $this->view->Display(null);
    }

    function Registro(){
            $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
            $this->model->addUser($_POST['nombre'],$_POST['user'],$hash);
            $this->locacionLogin();
    }
}