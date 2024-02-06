<?php
    class clientesModelos{
        function __construct(){}

        function insert(){}
        function update(){}
        function delete(){}

        function select(){
            $conexion = new Conexion(); 
            $mysqli = $conexion->crearConexion;
            if($mysqli !=0){   
                $getComments = $mysqli->query("select * from Coments");
            }
            return $getComments;
        }
        
    }
?>    
