<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class LoginView {
    private $smarty;
    function __construct(){
        $this->smarty=new Smarty();
    }

    public function showLoggin($mensajeError){
       
        $this->smarty->assign('titulo', "Login");
        $this->smarty->assign('URL_LOGIN',LOGIN_URL);
        $this->smarty->assign('error', $mensajeError);
        $this->smarty->display('templates/login.tpl');
    }

    public function DisplayLogin(){
    
       
        $this->smarty->assign('titulo', "Login");
        $this->smarty->assign('URL_LOGIN',LOGIN_URL);
        $this->smarty->display('templates/login.tpl');
    }
}

?>
