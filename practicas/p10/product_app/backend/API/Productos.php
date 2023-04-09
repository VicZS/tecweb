<?php

require_once 'API/DataBase.php';

class Productos extends DataBase{
    private $response;

    public function __construct($database='marketzone'){
        parent::__construct($database);
        $this->response = array();
    }

    public function add($jsonOBJ){
        $this->response = array(
            'status'  => 'Error',
            'message' => 'Ya existe un producto con ese nombre'
        );

        if(isset($jsonOBJ->nombre)){
            $sql = "SELECT * FROM productos WHERE nombre = '{$jsonOBJ->nombre} AND eliminado = 0";
            $result = $this->conexion->query($sql);

            if($result->num_rows == 0){
                $this->conexion->set_charset("utf8");
                $sql = "INSERT INTO productos VALUES (null,'{$jsonOBJ->nombre}',{$jsonOBJ->marca}','{$jsonOBJ->modelo}',{$jsonOBJ->precio},'{$jsonOBJ->detalles}',{$jsonOBJ->unidades},'{$jsonOBJ->imagen}',0)";
                if($this->conexion->query($sql)){
                    $this->response['status'] = "Exitoso";
                    $this->response['message'] = "Producto agregado";
                }else{
                    $this->response['message'] = "Error, no se ejecuto el query:". mysqli_error($this->conexion);
                }
            }
            $result->free();
            $this->conexion->close();
        }

    }

    public function delete($id){
        $this->response = array(
            'status'  => 'Error',
            'message' => 'Fallo la consulta'
        );

        if(isset($id)){
            $sql="UPDATE productos SET elminado = 1 WHERE id = {$id}";
            if($this->conexion->query($sql)){
                $this->response['status'] = "Exitoso";
                $this->response['message'] = "Producto eliminado correctamente";
            }else{
                $this->response['message'] = "Error, no se ejecuto el query:". mysqli_error($this->conexion);
            }
            $this->conexion->close();
        }
    }

    public function edit($jsonOBJ){
        $this->response = array(
            'status'  => 'Error',
            'message' => 'Fallo la consulta'
        );

        if(isset($jsonOBJ->id)){
            $sql = "UPDATE produtos SET nombre ='{$jsonOBJ->nombre}', marca ='{$jsonOBJ->marca}', modelo = '{$jsonOBJ->modelo}', precio = {$jsonOBJ->precio}, detalles = '{$jsonOBJ->detalles}', unidades = {$jsonOBJ->unidades}, imagen = '{$jsonOBJ->imagen}' WHERE id = {$jsonOBJ->id}";
            $this->conexion->set_charset("utf8");
            if($this->conexion->query($sql)){
                $this->response['status'] = "Exitoso";
                $this->response['message'] = "Producto actualizado correctamente";
            }else{
                $this->response['message'] = "Error, no se ejecuto el query:". mysqli_error($this->conexion);
            }
            $this->conexion->close();
        }
    }

    public function list(){
        if($result = $this->conexion->query("SELECT * FROM productos WHERE eliminado = 0")){
            $rows = $result->fetch_all(MYSQLI_ASSOC);

            if(!is_null($rows)){
                foreach($rows as $num => $row){
                    foreach($row as $key => $value){
                        $this->response[$num][$key] = utf8_encode($value);
                    }
                }
            }
            $result->free();
        }else{
            die('Error, no se ejecuto el query:'. mysqli_error($this->conexion));
        }
        $this->conexion->close();
    }

    public function search($search){
        if(isset($search)){
            $sql = "SELECT * FROM productos WHERE (id = '{$search}' OR nombre LIKE '{$search}%' OR marca LIKE '{$search}%' OR detalles LIKE '%{$search}%') AND eliminado = 0";
            if($result = $this->conexion->query($sql)){
                $rows = $result->fetch_all(MYSQLI_ASSOC);

                if(!is_null($rows)){
                    foreach($rows as $num => $row){
                        foreach($row as $key => $value){
                            $this->response[$num][$key] = utf8_encode($value);
                        }
                    }
                }
                $result->free();
            }
            else{
                die('Error, no se ejecuto el query:'. mysqli_error($this->conexion));
            }
            $this->conexion->close();
        }
    }

    public function single($id){
        if(isset($id)){
            if($result->$this->conexion->query("SELECT * FROM productos WHERE id={$id}")){
                $row = $result->fetch_assoc();

                if(!is_null($row)){
                    foreach($row as $key => $value){
                        $this->response[$key] = utf8_encode($value);
                    }
                }
                $result->free();
            }else{
                die('Error, no se ejecuto el query:'. mysqli_error($this->conexion));
            }
            $this->conexion->close();
        }
    }

    public function singleByName($name){
        if(isset($name)){
            if($result->$this->conexion->query("SELECT * FROM productos WHERE nombre = '{$name}'")){
                $row = $result->fetch_assoc();

                if(!is_null($row)){
                    foreach($row as $key => $value){
                        $this->response[$key] = utf8_encode($value);
                    }
                }
                $result->free();
            }else{
                die('Error, no se ejecuto el query:'. mysqli_error($this->conexion));
            }
            $this->conexion->close();
        }
    }

    public function getResponse(){
        return json_encode($this->response, JSON_PRETTY_PRINT);
    }
}

?>