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

    $query = "SELECT * FROM citas ";

    if (isset($_POST['consulta'])) {
    	$q = $conn->real_escape_string($_POST['consulta']);
    	$query = "SELECT * FROM citas WHERE nombres LIKE '%$q%' OR telefono LIKE '%$q%' OR fecha LIKE '%$q%' OR hora LIKE '%$q%' OR tipo LIKE '%$q%' OR doctor LIKE '%$q%' ";
    }

    $resultado = $conn->query($query);

    if($resultado->num_rows>0) {
    	$salida.="<table class=table>
    			
    				<tr class=tr>
                        <th class=th>Nombres</th>
    					<th class=th>Telefono</th>
    					<th class=th>Fecha</th>
    					<th class=th>Hora</th>
    					<th class=th>Tipo</th>
    					<th class=th>Doctor</th>
                       <th class=th>Estado</th>
                       
                        <th class=th>Editar</th>
                        <th class=th>Eliminar</th>
                        <th class=th>Ver</th>
    				</tr>

    			
    			

    	";

    	while ($fila = $resultado->fetch_assoc()) {
$salida.="<tr class=tr>
<td class=td > ".$fila["nombres"]."</td><td class=td>".$fila["telefono"]."</td><td class=td>".$fila["fecha"]."</td><td class=td>".$fila["hora"]."</td><td class=td>".$fila["tipo"]."</td><td class=td>".$fila["doctor"]."</td><td class=td>".$fila["estado"]."</td><td class=td><form method=post action=editarcitas.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$fila[telefono]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30><input type=hidden value='$fila[nombres]' class='btn11 btn-green22' name=btneliminar></form></form></td><td class=td><form action=pdfreporteunocitas/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$fila[nombres]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>
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