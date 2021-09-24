<?php
require_once('libs/smarty-3.1.39/libs/Smarty.class.php');

class SeriesView{


    function __construct(){}

    function DisplaySeries($series,$generos){
        $smarty=new Smarty();
        $smarty->assign('titulo','Mostrar Series');
        $smarty->assign('tituloNav','Generos');
        $smarty->assign('lista_series',$series);
        $smarty->assign('lista_generos',$generos);
        $smarty->display('templates/ver_series.tpl');
    }

    function infoSerie($serie){
        $smarty=new Smarty();
        $smarty->assign('titulo','informacion de la serie');
        $smarty->assign('serie',$serie);
        $smarty->display('templates/serie.tpl');
    }

    function showSeries($series){
        $smarty=new Smarty();
        $smarty->assign('titulo','Series Disponibles');
        $smarty->assign('lista',$series);
        $smarty->display('templates/listaSeries.tpl');
    }
}
