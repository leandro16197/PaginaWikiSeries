<?php
require_once('./Model/GenerosModel.php');
require_once('./Model/SeriesModel.php');
require_once('./Views/SeriesView.php');


class SeriesController{
    private $genModel;
    private $seriesModel;
    private $seriesView;

    function __construct(){
        $this->genModel=new GenerosModel();
        $this->seriesModel=new SeriesModel();
        $this->seriesView=new SeriesView();
    }
    function User(){
        session_start();
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $user;
        }
    }

    function getSeries(){
        $series=$this->seriesModel->getSeries();
        $generos=$this->genModel->getGeneros();
        $this->seriesView->DisplaySeries($series,$generos,$this->User());

    }

    function getInfoSeries($id){
        $serie=$this->seriesModel->getSerie($id);
        $this->seriesView->infoSerie($serie,$this->User());
    }

    function getSerieGenero(){
        $genero=$this->seriesModel->getSerieGenro();
        $this->seriesView->showSeries($genero,$this->User());
    }
    function getSeriesPorGenro($genero){
        $series=$this->seriesModel->getSerieGen($genero);
        $this->seriesView->showSeries($series,$this->User());
    }
}