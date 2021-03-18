<?php
require "conexion.php";

class Consulta{
    private $_db;
    private  $lista_usuarios;

    public function __construct(){
        $this->_db = new Conexion();
    }

    public function buscar(){
        
        $this->_db->conectar();

        $consulta = $this->_db->cnx->prepare("SELECT * FROM fCiudadano");

        $consulta->execute();

        while($row = $consulta->fetch(PDO::FETCH_OBJ)){
            $this->lista_usuarios[] =$row;
        }

        $this->_db->desconectar();
        return $this->lista_usuarios;

    }

}