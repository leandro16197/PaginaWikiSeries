
<?php


class AuthHelper{



    public function __construct() {
        
    }

    public function checkLogginIn(){
        session_start();
        if(!isset($_SESSION['user'])){
            header("Location: " . LOGIN_URL);
            die();
        }else{ 
            header("Location: " . BASE_URL);
        }

    }
    public function isAdmin(){
        session_start();
        if($_SESSION['isAdmin'] ==true){
            header("Location: " . MODIFICAR_URL);
            die();
        }else{
            header("Location: " . BASE_URL);
        }  
    }

    public function Admin(){
        session_name();
        return $_SESSION['isAdmin'];
    }

    public function Logout(){
        session_start();
        session_destroy();
        header("Location: " . BASE_URL);
    }

    public function locacionModificar(){
     header("Location: " . MODIFICAR_URL);
    }

    public function locacionUsuario(){
        header("Location: " . USUARIO_URL);
    }

    public function locacionBase(){
        header("Location: " . BASE_URL);
    }
    
    function User(){
        session_start();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $user;
        }
        return null;
    }

}
