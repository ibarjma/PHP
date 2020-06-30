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
}
?>