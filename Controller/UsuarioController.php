<?php
require_once ('./Model/UsuarioModel.php');
require_once('./Views/UsuarioView.php');
require_once('./Helper/AuthHelper.php');

class UsuarioController{
    private $model;
    private $view;
    private $auth;

    function __construct(){
        $this->model=new UsuarioModel();
        $this->view=new UsuarioView();
        $this->auth=new AuthHelper();;
    }

    function getUsuarios(){
        session_start();
        $user=$_SESSION['user'];
        $usuario=$this->model->getUsuarios();
        $this->view->Display($usuario,$user);
    }

    function ModificarPerfil($valor,$id){
        $this->auth->checkLogginIn();
        if($this->auth->Admin()){
            $this->model->ModificarPerfil($valor,$id);
            $this->auth->locacionUsuario();
        }else{
            $this->auth->locacionBase();
        }
        
        
    }
    function EliminarUsuario($id){
        $this->auth->checkLogginIn();
        if($this->auth->Admin()){
            $this->model->deleteUsuario($id);
            $this->auth->locacionUsuario();
        }else{
            $this->auth->locacionBase();
        }
       
    }   





}