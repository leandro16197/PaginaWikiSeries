<?php
require_once './Controller/SeriesController.php';
require_once './Controller/ModificarController.php';
require_once './Controller/LoginController.php';
require_once './Controller/RegistroController.php';


define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("MODIFICAR_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/modificar');
define("LOGIN_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("REGISTRO_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registro');

if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action='home';
}

$params=explode('/',$action);

$SerieController = new SeriesController();
$ModificarController=new ModificarController();
$LoginController=new LoginController();
$RegistroController=new RegistroController();

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
    case'registro':
        $RegistroController->GetRegistro();
        break;   
    case 'registrarusuario':
        $RegistroController->Registro();
        break;
    case 'login':
        $LoginController->GetLogin();
        break;
    case'iniciarSesion':
        $LoginController->IniciarSesion();
        break;
    case 'logout':
        $LoginController->Logout();        
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