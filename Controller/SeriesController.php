<?php
require_once('./Model/GenerosModel.php');
require_once('./Model/SeriesModel.php');
require_once('./Views/SeriesView.php');
require_once('./Helper/AuthHelper.php');


class SeriesController{
    private $genModel;
    private $seriesModel;
    private $seriesView;
    private $authHelper;

    function __construct(){
        $this->genModel=new GenerosModel();
        $this->seriesModel=new SeriesModel();
        $this->seriesView=new SeriesView();
        $this->authHelper = new AuthHelper();
    }
    

    function getHome(){
        $series=$this->seriesModel->getSeries();
        $generos=$this->genModel->getGeneros();
        $this->seriesView->DisplaySeriesGen($series,$generos,$this->authHelper->User());

    }

    function getInfoSeries($id){
        $serie=$this->seriesModel->getSerie($id);
        $this->seriesView->infoSerie($serie,$this->authHelper->User());
    }

    function getSerieGenero(){
        $genero=$this->seriesModel->getSerieGenro();
        $this->seriesView->showSeries($genero,$this->authHelper->User());
    }
    function getSeriesPorGenro($genero){
        $series=$this->seriesModel->getSerieGen($genero);
        $this->seriesView->showSeries($series,$this->authHelper->User());
    }
    
    //ABM SERIE
    
    //trae todas las series
    function getSeries(){
        session_start();
        $series=$this->seriesModel->getSerieGenro();
        $generos=$this->genModel->getGeneros();
        
       if(isset($_SESSION['user'])){
        $user=$_SESSION['user'];
        $this->seriesView->DisplaySeries($series,$generos,$user);
        $this->authHelper->locacionModificar();
       }else{
        $this->seriesView->DisplaySeries($series,$generos,null);
        $this->authHelper->locacionModificar();
       }
       
    
    }
    //agrega una serie
    function addSerie(){  
        $this->authHelper->checkLogginIn();
        if(($_FILES["img"]["type"]=="image/png") || ($_FILES["img"]["type"]=="image/jpg")){
            $img=$_FILES["img"];
            $origen=$img["tmp_name"];
            $destino="publico/images/".uniqid().$img["name"];
            copy($origen,$destino);
            $this->seriesModel->addSerie($_POST['nombre'],$_POST['sinopsis'],$_POST['actor'],$destino,$_POST['genero']);
            $this->authHelper->locacionModificar();
        }
    }

    //elimina serie segun id
    function deleteSerie($id){
        $this->authHelper->checkLogginIn();
        $this->seriesModel->deleteSerie($id);
        $this->authHelper->locacionModificar();
    }
    //edita serie
     function editarSerie(){
        $this->authHelper->checkLogginIn();
        $id = $_POST['id-serie'];
        $this->seriesModel->editSerie( $_POST['nombreSerie'], $_POST['sinopsis'], $_POST['actor'], $_POST['genero-editar'], $id);
        $this->authHelper->locacionModificar();
    }

}