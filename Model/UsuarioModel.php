<?php


class UsuarioModel{
    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;'.'dbname=blogserie;charset=utf8','root','');
    }

    function getPassword($user){
        $sentencia=$this->db->prepare("SELECT * FROM usuario WHERE user=?");
        $sentencia->execute(array($user));
        $usuario=$sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
    function getUsuarios(){
        $sentencia=$this->db->prepare("SELECT * FROM usuario");
        $sentencia->execute();
        $usuarios=$sentencia->fetchAll(PDO::FETCH_OBJ);
        return $usuarios;

    }

    function GetUsuario($user){
        $sentencia = $this->db->prepare( "SELECT user FROM usuario WHERE user = ?");
        $sentencia->execute(array($user));
        $usuario = $sentencia->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }

    function addUser($nombre,$user,$pass){
        $sentencia=$this->db->prepare("INSERT INTO usuario (nombre,user,pass) VALUE (?,?,?)");
        $sentencia->execute(array($nombre,$user,$pass));
    }

    function ModificarPerfil($valor,$id){
        $sentencia=$this->db->prepare("UPDATE usuario SET admin=? WHERE id_usuario=?");
        $sentencia->execute(array($valor,$id));
    }

    function deleteUsuario($id){
        $sentencia=$this->db->prepare("DELETE FROM usuario WHERE id_usuario=?");
        $sentencia->execute(array($id));
    }
}