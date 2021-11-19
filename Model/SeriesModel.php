<?php

class SeriesModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=blogserie;charset=utf8','root','');
    }
    //trae todas las series
    function getSeries(){
        $sentencia=$this->db->prepare("SELECT * FROM serie ORDER BY serie.nombre");
        $sentencia->execute();
        $series=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $series;
    }
    
    //lista las series ordenada por gen
    function getSerieGenro(){
        $sentencia=$this->db->prepare("SELECT * FROM serie INNER JOIN genero on serie.id_genero=genero.id_genero ORDER BY genero.nombreGen,serie.nombre");
        $sentencia->execute();
        $series=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $series;
    }
    //agrega una serie
    function addSerie($nombre,$sinopsis,$actor,$destino,$genero){
        $sentencia=$this->db->prepare("INSERT INTO serie(nombre,sinopsis,actor_principal,id_genero,img) VALUES (?,?,?,?,?)");
        $sentencia->execute(array($nombre,$sinopsis,$actor,$genero,$destino));
        return $this->db->lastInsertId();
    }
    //borra una serie segun el id
    function deleteSerie($id){
        $sentencia=$this->db->prepare("DELETE FROM serie WHERE id_serie=? ");
        $sentencia->execute(array($id));
    }

    //busca una serie segun el id
    function getSerie($id){
        $sentencia=$this->db->prepare("SELECT * FROM serie INNER JOIN genero ON serie.id_genero=genero.id_genero WHERE id_serie=? ");
        $sentencia->execute(array($id));
        $serie=$sentencia->fetch(PDO::FETCH_OBJ);
        return $serie;
    }

    //modifica una serie
    function editSerie($nombre,$sinopsis,$actor,$genero,$id){
        $sentencia=$this->db->prepare("UPDATE serie SET nombre=? , sinopsis=? , actor_principal=? , id_genero=? WHERE id_serie=? ");
        $sentencia->execute(array($nombre,$sinopsis,$actor,$genero,$id));
    }
    //busca todas las series por un genero
    function getSerieGen($genero){
        $sentencia=$this->db->prepare("SELECT * FROM serie INNER JOIN genero ON serie.id_genero=genero.id_genero WHERE genero.nombreGen=?");
        $sentencia->execute(array($genero));
        $series=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $series;
    }


}