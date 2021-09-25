<?php
require_once './Model/SeriesModel.php';
require_once './Model/GenerosModel.php';
require_once './Views/ModificarView.php';

class ModificarController{
    private $serieModel;
    private $generoModel;
    private $modificarView;

    function __construct(){
        $this->serieModel=new SeriesModel();   
        $this->generoModel=new GenerosModel();
        $this->modificarView=new ModificarView();

    }
    //trae todas las series
    function getSeries(){
        $series=$this->serieModel->getSerieGenro();
        $generos=$this->generoModel->getGeneros();
        $this->modificarView->DisplaySeries($series,$generos);

    }
    //ABM SERIE

    //agrega una serie
    function addSerie(){    
        $this->serieModel->addSerie($_POST['nombre'],$_POST['sinopsis'],$_POST['actor'],$_POST['genero']);
        header("Location: ". MODIFICAR_URL);
       
    }
    //elimina serie segun id
    function deleteSerie($id){
        $this->serieModel->deleteSerie($id);
        header("Location: ". MODIFICAR_URL);
    }
    //edita serie
    public function editarSerie(){
        $id = $_POST['id-serie'];
        $this->serieModel->editSerie( $_POST['nombreSerie'], $_POST['sinopsis'], $_POST['actor'], $_POST['genero-editar'], $id);
        header("Location: " . MODIFICAR_URL);
    }

    //ABM GENEROS

    //agregar un genero
    function addGenero(){
        $this->generoModel->addGenero($_POST['nombre-gen']);
        header("Location: ". MODIFICAR_URL);
    }

    //edita nombre genero
    function editarGenero(){
        $this->generoModel->editGenero($_POST['genero'],$_POST['id-genero']);
        header("Location: ". MODIFICAR_URL);
    }
    //eliminar genero
    function deleteGen($id){
        $this->generoModel->deleteGenero($id);
        header("Location: ". MODIFICAR_URL);
    }
}