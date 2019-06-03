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

    $query = "SELECT * FROM paciente WHERE NOMBRES NOT LIKE '' ORDER By ID LIMIT 25";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM paciente WHERE ID LIKE '%$q%' OR NOMBRES LIKE '%$q%' OR DUI LIKE '%$q%' OR TELEFONO LIKE '%$q%' OR DIRECCION LIKE '$q' OR NACIMIENTO LIKE '$q' ";
    }

    $resultado = $conn->query($query);

    if($resultado->num_rows>0) {
    	$salida.="<table class=table>
    			
    				<tr class=tr>
                        <th class=th>ID</th>
    					<th class=th>NOMBRES</th>
    					<th class=th>DUI</th>
    					<th class=th>EDAD</th>
    					<th class=th>DIRECCION</th>
    					<th class=th>TELEFONO</th>
                        <th class=th>NACIMIENTO</th>
                        <th class=th>EDITAR</th>
                        <th class=th>ELIMINAR</th>
                        <th class=th>VER</th>
    				</tr>

    			
    			

    	";

    	while ($fila = $resultado->fetch_assoc()) {
$salida.="<tr class=tr>
<td class=td > ".$fila["ID"]."</td><td class=td>".$fila["NOMBRES"]."</td><td class=td>".$fila["DUI"]."</td><td class=td>".$fila["EDAD"]."</td><td class=td>".$fila["DIRECCION"]."</td><td class=td>".$fila["TELEFONO"]."</td><td class=td>".$fila["NACIMIENTO"]."</td><td class=td><form method=post action=editarpaciente.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$fila[ID]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30><input type=hidden value='$fila[ID]' class='btn11 btn-green22' name=btneliminar></form></form></td><td class=td><form action=pdfreporteunopacientes/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$fila[ID]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>
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
/**************************
include 'conexion.php';
class persona{
    
    protected $c;
    public function persona(){
        //iniciar lo necesario
        $this->c=new conexion();
        
    }
    
   
    /*enlasamos el id con el boton de elimina
    public function eliminar($id){
        $sql="delete from paciente where id='$id'";
        $this->c->ejecutar($sql);
    }
}
r*/
    ?>