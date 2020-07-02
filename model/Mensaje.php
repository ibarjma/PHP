<?php

require_once 'Conexion.php';

class Mensaje extends Conexion{
    public function getPubSeguidos($seguidos){
        //SELECT mensaje.id, mensaje.texto, mensaje.imagen_contenido, mensaje.imagen_tipo, mensaje.fechayhora, usuarios.apellido, usuarios.nombre, usuarios.nombreusuario, usuarios.foto_contenido FROM mensaje INNER JOIN usuarios ON mensaje.usuarios_id = usuarios.id WHERE mensaje.usuarios_id = '1' OR mensaje.usuarios_id = '3' ORDER BY mensaje.fechayhora DESC LIMIT 50
        $query = "SELECT mensaje.id, mensaje.texto, mensaje.imagen_contenido, mensaje.imagen_tipo, mensaje.fechayhora, usuarios.apellido, usuarios.nombre, usuarios.nombreusuario, usuarios.foto_contenido FROM mensaje INNER JOIN usuarios ON mensaje.usuarios_id = usuarios.id WHERE ";
        foreach($seguidos as $seguido){
            $query = $query."mensaje.usuarios_id = '".$seguido."' OR ";
        }
        $query = substr($query, 0, -3);
        $query = $query."ORDER BY mensaje.fechayhora DESC LIMIT 50";
        try{
            $res = $this->conection->query($query);
            if ($res->num_rows > 0){
                    return $res;
            } else {
                return NULL;
            }
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function publicar($usuario, $mensaje, $imagen=NULL, $tipo_imagen=NULL){
        //INSERT INTO mensaje VALUES('', $mensaje, $imagen, NULL, '3', now())
        $query = 'INSERT INTO mensaje VALUES("", "'.$mensaje.'", "'.addslashes(file_get_contents($imagen)).'", "'.$tipo_imagen.'", "'.$usuario.'", now())';
        try{
            $res = $this->conection->query($query);
            if ($res){
                    return $res;
            } else {
                return NULL;
            }
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}
?>