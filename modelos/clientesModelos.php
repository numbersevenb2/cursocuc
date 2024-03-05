<?php
    class clientesModelos{
        function __construct(){}

        function insert($nombre, $email, $telefono, $comentario){
            $conexion = new Conexion();
            $mysqli = $conexion->crearConexion();
            $sql = "INSERT INTO coments (nombre,email,telefono,comentario)
                values('".$nombre."','".$email."','".$telefono."','".$comentario."')";
            if($mysqli->query($sql) == TRUE){
                return "Registro Insertado";
            }else{
                return "Ocurrio un error al insertar";
            }
            $mysqli->close();
        }

        function update($idComentario, $nombre, $email, $telefono, $comentario){
            $conexion = new Conexion();
            $mysqli = $conexion->crearConexion();
            $sql = "UPDATE coments SET nombre = '".$nombre."', email = '".$email."', 
            telefono = '".$telefono."', comentario = '".$comentario."' 
            WHERE idComentario = ".$idComentario;
            if($mysqli->query($sql) == TRUE){
                return "Se actualizo correctamente el registro";
            }else{
                return "Ocurrio un error al actualizar";
            }
            $mysqli->close();
        }
        
        function delete($idComentario){
            $conexion = new Conexion();
            $mysqli = $conexion->crearConexion();
            $sql = "DELETE FROM coments WHERE idComentario = ".$idComentario;
            if($mysqli->query($sql) == TRUE){
                return "Borrado Exitoso";
            }else{
                return "Ocurrio un error al borrar el registro";
            }
            $mysqli->close();
        }

        function select(){
            $conexion = new Conexion(); 
            $mysqli = $conexion->crearConexion();
            if($mysqli !=null){   
                $getComments = $mysqli->query("select * from Coments");
            }
            return $getComments;
        }
        
    }
?>    
