<?php
include 'credenciales.php';
class conexion{  
    protected $conn;
    
    public function conexion(){
         $this->conn=new mysqli(SERVIDOR,USUARIO,CONTRA,BASEDATOS);
    }
    
    public function desconectar(){
        $this->conn->close();
    }
    
    public function consultar($sql){
        $this->conexion();
        $res=$this->conn->query($sql);
        $this->desconectar();
        return $res;
    }    
    
    public function ejecutar($sql){
        $this->conexion();
        $this->conn->query($sql);
        $this->desconectar();
        return true;
        
    }
}
?>
    
