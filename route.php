<?php
require_once './Controller/SeriesController.php';
require_once './Controller/LoginController.php';
require_once './Controller/RegistroController.php';
require_once './Controller/UsuarioController.php';
require_once './Controller/GeneroController.php';
require_once './Helper/AuthHelper.php';

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
define("URL_SERIES", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/showSeries');
define("MODIFICAR_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/modificar');
define("LOGIN_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
define("REGISTRO_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/registro');
define("USUARIO_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/usuarios');

if(!empty($_GET["action"])){
    $action = $_GET["action"];
}else{
    $action='home';
}

$params=explode('/',$action);

$SerieController = new SeriesController();
$LoginController=new LoginController();
$RegistroController=new RegistroController();
$UsuarioController=new UsuarioController();
$GeneroController=new GenerosController();
$authHelper=new AuthHelper();

switch($params[0]){
    case 'home':
        $SerieController->getHome();
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
    case 'usuarios':
        $UsuarioController->getUsuarios();
        break;
    case 'modificarperfil':
        $UsuarioController->ModificarPerfil($params[2],$params[1]);
        break;
    case 'eliminarusuario':
       $UsuarioController->EliminarUsuario($params[1]);
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
        $authHelper->Logout();        
        break;
    case 'modificar':
        $SerieController->getSeries();
        break;
    case 'addSerie':
        $SerieController->addSerie();
        break;
    case 'eliminarSerie':
        $SerieController->deleteSerie($params[1]);
        break;
    case 'editarSerie':
        $SerieController->editarSerie();
        break;
    case 'agregarGenero':
        $GeneroController->addGenero();
        break;
    case 'editarGenero':
        $GeneroController->editarGenero();
        break;
    case 'borrarGenero':
        $GeneroController->deleteGen($params[1]);
        break;
}

?>