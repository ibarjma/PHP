<?php

require 'Conexion.php';

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
        try{
            $query = "SELECT id from usuarios WHERE nombreusuario='$usr' AND contrasenia='$pass'";
            $res = $this->conection->query($query);
            $this->cerrar();
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

    public function selectSome($id, $campo){
        try{
            $query = "SELECT $campo from usuarios WHERE id=$id";
            $res = $conection->query($query);
        }catch (Exception $e){
            echo 'Excepción capturada: ',  $e->getMessage(), "\n";
        }finally{
            return $res;
        }
    }

}