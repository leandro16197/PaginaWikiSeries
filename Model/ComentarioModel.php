<?php

class ComentarioModel{

    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=blogserie;charset=utf8','root','');
    }
    function getComentarioSerie($id_serie){
        $sentencia=$this->db->prepare("SELECT comentario.id_comentario,comentario.comentario,comentario.fecha,comentario.puntaje,comentario.id_usuario,comentario.id_serie,usuario.nombre FROM comentario JOIN usuario on comentario.id_usuario=usuario.id_usuario WHERE comentario.id_serie=?  ORDER BY comentario.puntaje DESC , comentario.puntaje DESC");
        $sentencia->execute(array($id_serie));
        $comentarios=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $comentarios;

    }


    //llamado por el eliminar controller
    function getComentario($id){
        $sentencia=$this->db->prepare("SELECT * FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id));
        $comentario=$sentencia->fetch(PDO::FETCH_OBJ);
        return $comentario;
    }

    function deleteComentario($id){
        $sentencia=$this->db->prepare("DELETE FROM comentario WHERE id_comentario=?");
        $sentencia->execute(array($id));
    }
    function insertComentario($comentario,$puntaje,$fecha,$id_usuario,$id_serie){
       $sentencia=$this->db->prepare("INSERT INTO comentario(comentario,puntaje,id_usuario,id_serie,fecha) VALUES(?,?,?,?,?)");
       $sentencia->execute(array($comentario,$puntaje,$id_usuario,$id_serie,$fecha));
       return $this->db->lastInsertId();
    }
}