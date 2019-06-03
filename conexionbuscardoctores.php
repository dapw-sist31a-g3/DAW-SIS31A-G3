<?php
	$servername = "localhost";
    $username = "root";
  	$password = "";
  	$dbname = "basepacientes";

	$conn = new mysqli($servername, $username, $password, $dbname);
      if($conn->connect_error){
        die("Conexión fallida: ".$conn->connect_error);
      }




 

    $salida = "";

    $query = "SELECT * FROM doctores WHERE NOMBRES NOT LIKE '' ORDER By ID LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM doctores WHERE ID LIKE '%$q%' OR NOMBRES LIKE '%$q%' OR DUI LIKE '%$q%' OR ESPECIALIDAD LIKE '%$q%' OR EDAD LIKE '$q' OR DIRECCION LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if($resultado->num_rows>0) {
    	$salida.="
    			
    				<table class=table align=center >
<tr class=tr>
<th class=th>Codigo</th>
<th class=th>Nombres</th> 
<th class=th>Dui</th>
<th class=th>Edad</th>  
<th class=th>Especialidad</th>
<th class=th>Direccion</th>
<th class=th>Editar</th>
<th class=th>Eliminar</th>   
<th class=th>Ver</th>
</tr>";

    	while ($fila = $resultado->fetch_assoc()) {
$salida.="
<tr class=tr>
<td class=td > ".$fila["ID"]."</td><td class=td>".$fila["NOMBRES"]."</td><td class=td>".$fila["DUI"]."</td><td class=td>".$fila["EDAD"]."</td><td class=td>".$fila["ESPECIALIDAD"]."</td><td class=td>".$fila["DIRECCION"]."</td><td class=td><form method=post action=editardoctores.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$fila[ID]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30 ><input type=hidden value='$fila[ID]' class='btn11 btn-green22' name=btneliminar></form></form></td><td class=td><form action=pdfreporteunodoctores/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$fila[ID]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>
</td>
</tr>";

    	}
    	$salida.="</table>";
    }else{
    	$salida.="NO HAY DATOS :(";
    }


    echo $salida;




    $conn->close();



?>






<?php
/*************************
include 'conexion.php';
class persona{
    
    protected $c;
    public function persona(){
        //iniciar lo necesario
        $this->c=new conexion();
        
    }
    
   
    /*enlasamos el id con el boton de eliminar
    public function eliminar($id){
        $sql="delete from doctores where id='$id'";
        $this->c->ejecutar($sql);
    }
}
*/
?>