<?php
require_once "./Model/UsuarioModel.php";
require_once "./Views/LoginView.php";
class LoginController{
    private $model;
    private $view;

    public function __construct(){
        $this->model=new UsuarioModel();
        $this->view=new LoginView();
    }

    public function IniciarSesion(){
            $password = $_POST['pass'];
            $usuario=$this->model->GetPassword($_POST['user']);
            if ($usuario != null && password_verify($password,$usuario->pass)){
                session_start();
                $_SESSION['user'] = $usuario;
                $_SESSION['isAdmin'] = false;
                if($usuario->admin == 1){
                    session_start();
                    $_SESSION['isAdmin'] = true;
                    header("Location: " . MODIFICAR_URL);
                }else {
                    header("Location: " . URL_SERIES);
                }
            }else{
                $this->view->showLoggin("*** Usuario y/o contraseña incorrectos ***");
            }
        }

    public function GetLogin(){
        $this->view->DisplayLogin(); 
    }
    

}