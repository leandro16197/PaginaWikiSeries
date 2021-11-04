<?php

require_once('./libs/smarty-3.1.39/libs/Smarty.class.php');

class UsuarioView {

    function __construct(){
    }

    public function Display($usuarios, $user){
        $smarty = new Smarty();
        $smarty->assign("lista_usuarios", $usuarios);
        $smarty->assign("user", $user);
        $smarty->display('templates/listaUsuarios.tpl');
    }
}

