<?php

require_once 'Conexion.php';

class Users extends Conexion{
    
    public function registUser($usr, $name, $lastname, $mail, $pass, $pic, $picFormat){
        try{
            $query = "INSERT INTO usuarios VALUES ($lastname, $name, $mail, $usr, $pass, $pic, $picFormat)";
            $res = $this->$conection->query($query);
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }finally{
            return $res;
        }
    }

    public function loginUser($usr, $pass){
        echo "<script>console.log('=======".$usr."=======".$pass."')</script>";
        try{
            $query = "SELECT id from usuarios WHERE nombreusuario='$usr' AND contrasenia='$pass'";
            echo "<script>console.log('********".$query."')</script>";
            $res = $this->conection->query($query);
            if ($res->num_rows > 0){
                while($row = $res->fetch_assoc()) {
                    echo "<script>console.log('~~~~~~~~~".$row["id"]."')</script>";
                    return $row["id"];
                }
            } else {
                return NULL;
            }
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }

    public function updateSome($id, $campo, $actualizacion){
        try{
            $query = "UPDATE usuarios SET $campo=$actualizacion where id=$id";
            $res = $conection->query($query);
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }finally{
            return $res;
        }
    }

    public function idByCamp($campo, $elemento){
        try{
            $query = "SELECT id from usuarios WHERE ".$campo."='".$elemento."'";
            echo '<script>console.log("``````'.$query.'");</script>';
            $res = $this->conection->query($query);
            if ($res->num_rows > 0){
                while($row = $res->fetch_assoc()) {
                    return $row["id"];
                }
            } else {
                return NULL;
            }
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
    public function contenidoById ($id){
        try{
            $query = "SELECT nombreusuario, apellido, nombre, foto_contenido, foto_tipo from usuarios WHERE id ='".$id."'";
            echo '<script>console.log("``````'.$query.'");</script>';
            $res = $this->conection->query($query);
            if ($res->num_rows > 0){
                while($row = $res->fetch_assoc()) {
                    return $row;
                }
            } else {
                return NULL;
            }
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }
    }
}