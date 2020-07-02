<?php

require_once 'Conexion.php';

class Users extends Conexion{
    
    public function registUser($usr, $name, $lastname, $mail, $pass, $pic, $picFormat){
        // INSERT INTO usuarios VALUES ($lastname, $name, $mail, $usr, $pass, $pic, $picFormat)
        try{
            $res = NULL;
            $query = "INSERT INTO usuarios VALUES ('', '$lastname', '$name', '$mail', '$usr', '$pass', \"".addslashes(file_get_contents($pic))."\", \"".$picFormat."\")";
            $res = $this->conection->query($query);
        }catch (Exception $e){
            echo '<script>console.log("'.$e->getMessage().'");</script>';
        }finally{
            return $res;
        }
    }

    public function loginUser($usr, $pass){
        echo "<script>console.log('=======".$usr."=======".$pass."')</script>";
        try{
            $query = "SELECT id from usuarios WHERE nombreusuario='$usr' AND contrasenia='$pass'";
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

    public function updateSome($id, $campo, $actualizacion){
        try{
            $res = NULL;
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

}