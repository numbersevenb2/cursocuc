<?php
    class Conexion{
        $HOST = "localhost";
        $BD = "cursocuc";
        $USER = "AlbertoSP";
        $PWD = "28032005";

        function __construct(){}
        function crearConexion(){
            $mysqli = new mysqli($this->HOST,$this->USER,$this->PWD,$this->BD);
            if($mysqli->connect_errno){
                return 0;
            }
            return $mysqli;
        }
    }
?>