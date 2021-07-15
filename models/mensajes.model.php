<?php
require 'conexion.php';
date_default_timezone_set("America/Guayaquil");
class ModelMensajes{
    public static function mdlGetMensajes(){
        try{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM mensajes");
            $stmt->execute();
            return $stmt->fetchAll();
        }catch(PDOException $e){
            return [];
        }
    }
    public static function mdlGetMensaje($idMensaje){
        try{
            $stmt = Conexion::conectar()->prepare("SELECT * FROM mensajes WHERE id=:idMensaje");
            $stmt->execute(["idMensaje" =>$idMensaje]);
            return ($stmt->rowCount() > 0) ? $stmt->fetch() : [];
        }catch(PDOException $e){
            return [];
        }
    }
    public static function mdlDeleteMensaje($idMensaje){
        try{
            $stmt = Conexion::conectar()->prepare("DELETE FROM mensajes  WHERE id=:idMensaje");
            $stmt->execute(["idMensaje" =>$idMensaje]);
            return ($stmt->rowCount() > 0) ? true : false;
        }catch(PDOException $e){
            return false;
        }
    }
    public static function mdlAgregarMensajes($datos){
        try{
            $stmt = Conexion::conectar()->prepare("INSERT INTO mensajes VALUES(0,:nombres,:telefono,:email,:mensaje,:fecha)");
            $stmt->execute([
                "nombres" => $datos["regNombreDist"],
                "telefono" => $datos["regTelefonoDist"],
                "email" => $datos["regEmailDist"],
                "mensaje" => $datos["regMensajeDist"],
                "fecha" => date("Y-m-d H:i:s")
            ]);
            return ($stmt->rowCount() > 0) ? true : false;
        }catch(PDOException $e){
            return false;
        }
    }
}