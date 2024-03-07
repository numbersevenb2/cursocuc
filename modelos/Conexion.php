<?php
    class Conexion{
        private $HOST = "localhost";
        private $BD = "cursocuc";
        private $USER = "AlbertoSP";
        private $PWD = "28032005";

        function __construct(){}
        function crearConexion(){
            $mysqli = new mysqli($this->HOST,$this->USER,$this->PWD,$this->BD);
            if($mysqli->connect_errno){
                return null;
            }
            return $mysqli;
        }
    }
?>