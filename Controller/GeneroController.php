<?php

require_once ('./Helper/AuthHelper.php');
require_once ('./Model/GenerosModel.php');

class GenerosController{ 
    private $model;
    private $auth;

    function __construct(){
        $this->model=new GenerosModel();
        $this->auth=new AuthHelper();
    }
    
    function addGenero(){
        $this->auth->checkLogginIn();
        $this->model->addGenero($_POST['nombre-gen']);
        $this->auth->locacionModificar();
    }

    function editarGenero(){
        $this->auth->checkLogginIn();
        $this->model->editGenero($_POST['genero'],$_POST['id-genero']);
       $this->auth->locacionModificar();
    }

      function deleteGen($id){
        $this->auth->checkLogginIn();
        if($this->auth->isAdmin()){
            $this->model->deleteGenero($id);
        }
        $this->auth->locacionModificar();
    }
}