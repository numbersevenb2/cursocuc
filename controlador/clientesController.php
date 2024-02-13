<?php
    require_once("../modelos/Conexion.php");
    require_once("../modelos/clientesModelos.php");
    
    $opc = $_GET['opc'];
    switch($opc){
        case 1: // Registrar comentarios de los clientes
            $nombre = $_POST['txtNombre'];
            $email  = $_POST['txtEmail'];
            $tel    = $_POST['txtTelefono'];
            $coment = $_POST['txtComentarios'];

            $clientes = new clientesModelos();
            $res = $clientes->insert($nombre,$email,$telefono,$comentario);
            echo $res;
            break;
        case 2:

        case 4: 
            $clientes = new clientesModelos();
            $getComments = $clientes->select();
            if($getComments){
                while($fila = $getComments->fetch_assoc()){
                    echo $fila["nombre"].'<br>';
                    echo $fila["email"].'<br>';
                    echo $fila["telefono"].'<br>';
                    echo $fila["comentario"].'<br>';
                }
            }
            //echo $mysqli->host_info . "\n";
    }
?>