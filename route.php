<?php
require_once "./Controller/SeriesController.php";


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');


if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action='home';
}

$params=explode('/',$action);
$SerieController = new SeriesController();

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
    case 'addSerie':
        $SerieController->addSerie();
    case 'seriePorGenero':
        $SerieController->getSeriesPorGenro($params[1]);
}

?>