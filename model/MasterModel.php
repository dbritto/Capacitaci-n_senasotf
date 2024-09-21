<?php

include_once "../lib/conf/connection.php";

class MasterModel extends Connection{
    public function insertar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }

    public function consultar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }

    public function editar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        if(!$respuesta){
            echo mysqli_error($this->getConnect());
        }
        return $respuesta;
    }

    public function eliminar($sql){
        $respuesta=mysqli_query($this->getConnect(),$sql);
        return $respuesta;
    }

    public function autoincrement($table,$field){
        $sql="SELECT MAX($field) FROM $table";
        $respuesta=$this->consultar($sql);
        $contador=mysqli_fetch_row($respuesta);

        return $contador[0]+1;

    }
    
    
    public function lastid($table,$field){
        $sql="SELECT MAX($field) FROM $table";
        $respuesta=$this->consultar($sql);
        $contador=mysqli_fetch_row($respuesta);

        return $contador[0] ;

    }
    
    
}




?>