<?php

require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class ModificarView{

    function __construct(){
    }

    public function DisplaySeries($series,$generos,$user){
        $smarty = new Smarty();
        $smarty->assign('titulo',"Mostrar Series");
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_generos',$generos);
        $smarty->assign('user',$user);
        $smarty->display('templates/modificar.tpl');
    }
}