<?php
    require_once("../modelos/Conexion.php");
    require_once("../modelos/clientesModelos.php");
    
    $opc = $_GET['opc'];
    switch($opc){
        case 1: // Registrar comentarios de los clientes
            $nombre = $_POST['txtNombre'];
            $email  = $_POST['txtEmail'];
            $telefono    = $_POST['txtTelefono'];
            $comentario = $_POST['txtComentarios'];

            $clientes = new clientesModelos();
            $res = $clientes->insert($nombre,$email,$telefono,$comentario);
            echo $res;
            break;
        case 2: // Actualizar Registros
            $idComentario = $_POST['hddIdComentario'];
            $nombre = $_POST['txtNombre'];
            $email  = $_POST['txtEmail'];
            $telefono    = $_POST['txtTelefono'];
            $comentario = $_POST['txtComentarios'];

            $clientes = new clientesModelos();
            $res = $clientes->update($idComentario,$nombre,$email,$telefono,$comentario);
            echo $res;
            break;
        case 3: // Eliminar Registros
            $idComentario = $_POST['idComentario'];
            $clientes = new clientesModelos();
            $res = $clientes->delete($idComentario);
            echo $res;
            break;
        case 4: 
            $clientes = new clientesModelos();
            $getComments = $clientes->select();
            if($getComments){
                while($fila = $getComments->fetch_assoc()){
                    echo "<tr>";
                        echo "<th scope='row'>1</th>";
                        echo "<td>".$fila["nombre"].'</td>';
                        echo "<td>".$fila["email"].'</td>';
                        echo "<td>".$fila["telefono"].'</td>';
                        echo "<td>".$fila["comentario"].'</td>';
                        echo "<td>
                        <button type='submit' class='btn btn-primary' onClick='actualizar(".$fila['idComentario'].",\"".$fila['nombre']."\",\"".$fila['email']."\",\"".$fila['telefono']."\",\"".$fila['comentario']."\")' >Actualizar</button>
                        <button type='button' class='btn btn-danger' onClick='eliminar(".$fila['idComentario'].")' >Eliminar</button>
                        </td>";
                        echo "</tr>";
                }
            }
            //echo $mysqli->host_info . "\n";
    }
?>