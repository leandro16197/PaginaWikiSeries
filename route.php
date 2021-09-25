<?php
require_once './Controller/SeriesController.php';
require_once './Controller/ModificarController.php';


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("MODIFICAR_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/modificar');

if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action='home';
}

$params=explode('/',$action);
$SerieController = new SeriesController();
$ModificarController=new ModificarController();

switch($params[0]){
    case 'home':
        $SerieController->getSeries();
        break;
    case 'infoSerie':
        $SerieController->getInfoSeries($params[1]);
        break;
    case 'showSeries':
        $SerieController->getSerieGenero();
        break;
    case 'genero':
        $SerieController->getSeriesPorGenro($params[1]);
        break;
    case 'modificar':
        $ModificarController->getSeries();
        break;
    case 'addSerie':
        $ModificarController->addSerie();
        break;
    case 'eliminarSerie':
        $ModificarController->deleteSerie($params[1]);
        break;
    case 'editarSerie':
        $ModificarController->editarSerie();
        break;
    case 'agregarGenero':
        $ModificarController->addGenero();
        break;
    case 'editarGenero':
        $ModificarController->editarGenero();
        break;
    case 'borrarGenero':
        $ModificarController->deleteGen($params[1]);
}

?>