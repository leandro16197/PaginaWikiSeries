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

    function getSeries(){
        $series=$this->seriesModel->getSeries();
        $generos=$this->genModel->getGeneros();
        $this->seriesView->DisplaySeries($series,$generos);

    }

    function getInfoSeries($id){
        $serie=$this->seriesModel->getSerie($id);
        $this->seriesView->infoSerie($serie);
    }

    function getSerieGenero(){
        $genero=$this->seriesModel->getSerieGenro();
        $this->seriesView->showSeries($genero);
    }
    function getSeriesPorGenro($genero){
        $series=$this->seriesModel->getSerieGen($genero);
        $this->seriesView->showSeries($series);
    }
}