<?php

require_once 'Conexion.php';

class Siguiendo extends Conexion{
    
    public function SeguidosPor($usuario){
        //Devuelve un array con las personas a las que sigue el $usuario
        try{
            $query = "SELECT siguiendo.usuarioseguido_id AS id FROM siguiendo WHERE siguiendo.usuarios_id = '".$usuario."' ";
            $res = $this->conection->query($query);
            $listSeguidos = array();
            if ($res->num_rows > 0){
                while($temp = $res->fetch_assoc()){
                    $listSeguidos[] = $temp['id'];
                }
                return $listSeguidos;
            } else {
                return NULL;
            }
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function getDatosSeguidos($seguidos){
        $query = "SELECT * FROM usuarios WHERE ";
        foreach($seguidos as $seguido){
            $query = $query."id = '".$seguido."' OR ";
        }
        $query = substr($query, 0, -3);
        $query = $query."ORDER BY usuarios.id DESC LIMIT 50";
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
}

?>