<?php

class GenerosModel{

    private $db;
    
    function __construct()  {
        $this->db=new PDO('mysql:host=localhost;'.'dbname=blogserie;charset=utf8','root','');
    }
    //trae todos los generos
    function getGeneros(){
        $sentencia=$this->db->prepare("SELECT * FROM genero ORDER BY genero.nombreGen");
        $sentencia->execute();
        $generos=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $generos;
    }
    //trae genero segun su id
    function getGenero($id){
        $sentencia=$this->db->prepare("SELECT * FROM genero WHERE id_genero=? ORDER BY genero.nombreGen");
        $sentencia->execute(array($id));
        $genero=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $genero;
    }

    //inserta genero
    function addGenero($nombre){
        $sentencia=$this->db->prepare("INSERT INTO genero(nombreGen) VALUE (?)");
        $sentencia->execute(array($nombre));
        return $this->db->lastInsertId();
    }

    //elimina genero por id
    function deleteGenero($id){
        $sentencia=$this->db->prepare("DELETE FROM genero WHERE id_genero=?");
        $sentencia->execute(array($id));

    }

    function editGenero($nombre,$id){
        $sentencia=$this->db->prepare("UPDATE genero SET nombreGen=? WHERE id_genero=?");
        $sentencia->execute(array($nombre,$id));
    }


}