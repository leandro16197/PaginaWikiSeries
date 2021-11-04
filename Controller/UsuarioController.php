<?php
require_once ('./Model/UsuarioModel.php');
require_once('./Views/UsuarioView.php');

class UsuarioController{
    private $model;
    private $view;

    function __construct(){
        $this->model=new UsuarioModel();
        $this->view=new UsuarioView();
    }

    function getUsuarios(){
        session_start();
        $user=$_SESSION['user'];
        $usuario=$this->model->getUsuarios();
        $this->view->Display($usuario,$user);
    }

    function ModificarPerfil($valor,$id){
        $this->model->ModificarPerfil($valor,$id);
        header("Location: " . USUARIO_URL);
    }
    function EliminarUsuario($id){
        $this->model->deleteUsuario($id);
        header("Location: " . USUARIO_URL);
    }   





}