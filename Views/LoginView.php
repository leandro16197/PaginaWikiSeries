<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class LoginView {

    function __construct(){
    }

    public function showLoggin($mensajeError){
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',LOGIN_URL);
        $smarty->assign('error', $mensajeError);
        $smarty->display('templates/login.tpl');
    }

    public function DisplayLogin(){
    
        $smarty = new Smarty();
        $smarty->assign('titulo', "Login");
        $smarty->assign('URL_LOGIN',LOGIN_URL);
        $smarty->display('templates/login.tpl');
    }
}

?>
