<?php
include 'conexion.php';
class persona{
    
    protected $c;
    public function persona(){
        //iniciar lo necesario
        $this->c=new conexion();
        
    }
    
   /*funciones para agregar modificar y eliminar PACIENTES------------------------------------------------------------------------------------------------*/ 
    public function agregar($nombre,$dui,$edad,$direccion,$telefono,$nacimiento){
        $sql="insert into paciente values('','$nombre','$dui','$edad','$direccion','$telefono','$nacimiento')";
        
        
        $this->c->ejecutar($sql);
        }
    
    public function modificar($id,$nombre,$dui,$edad,$direccion,$telefono,$nacimiento){
        
        $sql="update paciente set NOMBRES='$nombre',DUI='$dui',EDAD='$edad',DIRECCION='$direccion',TELEFONO='$telefono',NACIMIENTO='$nacimiento' where id='$id'";
        $this->c->ejecutar($sql); 
    }
    
    
    /*enlasamos el id con el boton de eliminar*/
    public function eliminar($id){
        $sql="delete from paciente where id='$id'";
        $this->c->ejecutar($sql);
    }
    

    
    
    
    public function contarpacientes(){

}

 
 /***********  
  $sql = "SELECT COUNT(*) total FROM avisos";
$result = mysql_query($sql);
$fila = mysql_fetch_assoc($result);
echo 'Número de total de registros: ' . $fila['total'];
 
$num=mysql_num_fields($resultado);
    
echo $num*/



    
    
    
    
    
    
    
    
    
    
    
    
  /***************************************************************************************************************************************************/  
    
   /*funciones para agregar modificar y eliminar DOCTORES------------------------------------------------------------------------------------------------*/ 
    public function agregardoctores($nombre,$dui,$edad,$especialidad,$direccion){
        $sql="insert into doctores values('','$nombre','$dui','$edad','$especialidad','$direccion')";
        
        
        $this->c->ejecutar($sql);
        }
    
    public function modificardoctores($id,$nombre,$dui,$edad,$especialidad,$direccion){
        
        $sql="update doctores set NOMBRES='$nombre',DUI='$dui',EDAD='$edad',ESPECIALIDAD='$especialidad',DIRECCION='$direccion' where id='$id'";
        $this->c->ejecutar($sql); 
    }
    
    
    /*enlasamos el id con el boton de eliminar*/
    public function eliminardoctores($id){
        $sql="delete from doctores where id='$id'";
        $this->c->ejecutar($sql);
    }
    
    
    

    
    
    public function mostrardoctor(){

$sql="select * from doctores";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    
echo"<h1>Reporte De Doctores</h1>";
echo"<table class=table align=center >";
echo"<tr class=tr>";
echo"<th class=th>Codigo</th><th class=th>Nombres</th><th class=th>Dui</th><th class=th>Edad</th><th class=th>Especialidaf</th><th class=th>Direccion</th><th class=th>Editar</th><th class=th>Eliminar</th><th class=th>Ver</th>";

echo"</tr>";

while($row=$resultado->fetch_assoc()){


echo"<tr class=tr>";
echo"<td class=td > ".$row["ID"]."</td><td class=td>".$row["NOMBRES"]."</td><td class=td>".$row["DUI"]."</td><td class=td>".$row["EDAD"]."</td><td class=td>".$row["ESPECIALIDAD"]."</td><td class=td>".$row["DIRECCION"]."</td><td class=td><form method=post action=editardoctores.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$row[ID]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30><input type=hidden value='$row[ID]' class='btn11 btn-green22' name=btneliminar></form></td><td class=td><form action=pdfreporteunodoctores/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$row[ID]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>";
echo"</td>";
echo"</tr>";


}
echo"</table>";
}else{
echo"ningun result";
}

}
    
/***************************************************************************************************************************************************************/   
/*esta funcion queda descartada por el momento
    
    public function mostrar(){
        
        $sql="select * from paciente";
        $resultado=$this->c->consultar($sql);
        $ncampos=mysqli_num_fields($resultado);
        $tabla="<table  class=table2>";
        $tabla.="<tr class=td1>";
        
        while($encabezado=mysqli_fetch_field($resultado)){
            $tabla.="<td><b>".$encabezado->name."</td></b>";
            
        }//columna extra para las acciones sobre los datos
        $tabla.="<td><b>Acciones </td></b></tr>";
        //imprimiendo el resto de la tabla
        
        for($i=0; $i<$ncampos; $i++){
            
        while($fila=mysqli_fetch_row($resultado)){
            
            $tabla.="<tr  class=td1>";
            for($col=0; $col<$ncampos; $col++){
                $tabla.="<td>".$fila[$col]."</td>";   
            }//enlace para cargar la fila al formulario
            
            $tabla.="<td><b>
                
                <a href=\"javascript:cargar('$fila[0]','$fila[1]','$fila[2]','$fila[3]','$fila[4]')\">
                cargar</a></td></b>";
            //hasta aqui
            $tabla.="</tr>";
        }
        }
        $tabla.="</table>";
        return $tabla;
    }*/
    
 
/*este codigo es para mostrar los resultados de tablas de PACIENTES*/
public function mostrar22(){

$sql="select * from paciente";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    
    
    
    
echo"<h1>Reporte De Pacientes</h1>";
echo"<table class=table align=center >";
echo"<tr class=tr>";
echo"<th class=th>Codigo</th><th class=th>Nombres</th><th class=th>Dui</th><th class=th>Edad</th><th class=th>Direccion</th><th class=th>Telefono</th><th class=th>Nacimiento</th><th class=th>Editar</th><th class=th>Eliminar</th><th class=th>Ver</th>";

echo"</tr>";

while($row=$resultado->fetch_assoc()){


echo"<tr class=tr>";
echo"<td class=td > ".$row["ID"]."</td><td class=td>".$row["NOMBRES"]."</td><td class=td>".$row["DUI"]."</td><td class=td>".$row["EDAD"]."</td><td class=td>".$row["DIRECCION"]."</td><td class=td>".$row["TELEFONO"]."</td><td class=td>".$row["NACIMIENTO"]."</td><td class=td><form method=post action=editarpaciente.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$row[ID]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30><input type=hidden value='$row[ID]' class='btn11 btn-green22' name=btneliminar></form></td><td class=td><form action=pdfreporteunopacientes/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$row[ID]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>";
echo"</td>";
echo"</tr>";
    if((isset($_SESSION['cont']))){
    $_SESSION['cont']=1;    
    }else{
      echo  $_SESSION['cont']= $_SESSION['cont']+ 1;   
    }
}


echo"</table>";
}else{
echo"ningun result";
}

    
   
}

    
  


public function mostraruncampo(){
$sql="select * from paciente where id='$id'";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){

$row=$resultado->fetch_assoc();
}else{
echo"ningun result";
}

}

    
    
    



/***************************************************************************************************************************************************/  
    
   /*funciones para agregar modificar y eliminar CITAS------------------------------------------------------------------------------------------------*/ 
    public function agregarcitas($nombres,$telefono,$fecha,$hora,$tipo,$doctor,$estado){
        $sql="insert into citas values('$nombres','$telefono','$fecha','$hora','$tipo','$doctor','$estado')";
        
        
        $this->c->ejecutar($sql);
        }
    
    public function modificarcitas($nombres,$telefono,$fecha,$hora,$tipo,$doctor){
        
        $sql="update citas set nombres='$nombres',telefono='$telefono',fecha='$fecha',hora='$hora',tipo='$tipo',doctor='$doctor' where nombres='$nombres'";
        $this->c->ejecutar($sql); 
    }
    
    
    /*enlasamos el id con el boton de eliminar*/
    public function eliminarcitas($nombres){
        $sql="delete from citas where nombres='$nombres'";
        $this->c->ejecutar($sql);
    }
    
    
    

    
    
public function mostrarcitas(){

$sql="select * from citas";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    
echo"<h1>Reporte De Citas</h1>";
echo"<table class=table align=center >";
echo"<tr class=tr>";
echo"<th class=th>Nombres</th><th class=th>Telefono</th><th class=th>Fecha</th><th class=th>Hora</th><th class=th>Tipo</th><th class=th>Doctor</th><th class=th>Estado</th><th class=th>Editar</th><th class=th>Eliminar</th><th class=th>Ver</th>";

echo"</tr>";

while($row=$resultado->fetch_assoc()){


echo"<tr class=tr>";
echo"<td class=td > ".$row["nombres"]."</td><td class=td>".$row["telefono"]."</td><td class=td>".$row["fecha"]."</td><td class=td>".$row["hora"]."</td><td class=td>".$row["tipo"]."</td><td class=td>".$row["doctor"]."</td></td><td class=td><p class=estado>".$row["estado"]."</p></td><td class=td><form method=post action=editarcitas.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$row[telefono]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30><input type=hidden value='$row[nombres]' class='btn11 btn-green22' name=btneliminar></form></td><td class=td><form action=pdfreporteunocitas/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$row[nombres]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>";
echo"</td>";
echo"</tr>";


}
echo"</table>";
}else{
echo"ningun result";
}

}


  /******Esta parte es para validar fecha y hora de citas*****/  
  
 public function validarhora(){

$sql="select hora from citas";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    


while($row=$resultado->fetch_assoc()){


echo"<input type=hidden value='$row[hora]' name=validarhora id=validarhora ></form></td>";

}
}
     
}   
 
 /******Esta parte es para BUSCAR LOS NOMBRES DE LOS PACIENTES CON UN SELECT OOPCION EN LA PARTE DE AGREGAR CITAS****/      
  
  public function buscarnombres(){

$sql="select NOMBRES from paciente";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    
echo"<br><br>NOMBRES<br><input type='search' name='txtnombres' list='listamodelos' class='form-control' autocomplete='on'>";
 
echo"<datalist id='listamodelos'>";

while($row=$resultado->fetch_assoc()){

echo"<option value='$row[NOMBRES]'>";

}
echo"</datalist>";
}
     
}   
    
/******Esta parte es para BUSCAR LOS NOMBRES DE LOS DOCTORES CON UN SELECT OOPCION EN LA PARTE DE AGREGAR CITAS****/      
      
    
  public function buscarnombresdoctor(){

$sql="select NOMBRES from doctores";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    
echo"DOCTOR<br><input type='search' name='txtdoctor' list='listamodelos' class='form-control' autocomplete='on'>";
 
echo"<datalist id='listamodelos'>";

while($row=$resultado->fetch_assoc()){

echo"<option value='$row[NOMBRES]'>";

}
echo"</datalist>";
}
     
}
    
/******Esta parte es para contar registros de pacientes****/ 
    
public function countpacientes(){
    

$sql="select * from paciente";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){

while($row=$resultado->fetch_assoc()){

$a[]=$row['ID'];


}
echo count($a);
}
     
}


    /******Esta parte es para contar registros de doctores****/ 
public function countdoctores(){
    

$sql="select * from doctores";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){

while($row=$resultado->fetch_assoc()){

$a[]=$row['ID'];


}
echo count($a);
}
     
}
    
    
  /******Esta parte es para contar registros de citas****/   
public function countcitas(){
    

$sql="select * from citas";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){

while($row=$resultado->fetch_assoc()){

$a[]=$row['nombres'];


}
echo count($a);
}
     
}
    
    
/******Esta parte es para contar registros de citas actuales   esto es para sumar o restar dias,strtotime("-1 days")* ***/       
    
public function countcitasactuales(){
$b=date("Y-m-d");
$sql="select * from citas where fecha='$b'";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){


while($row=$resultado->fetch_assoc()){
$a[]=$row['nombres'];

}
echo count($a);
}else{
echo"<p class=etiketapcontar>No hay  Citas<p>";
}

}
    
/******Esta parte es para mostrar citas actuales para fechas actuales****/    

public function mostrarcitasactuales(){
$b=date("Y-m-d");
$sql="select * from citas where fecha='$b'";
$resultado=$this->c->consultar($sql);

if($resultado->num_rows>0){
    

echo"<table class=table align=center >";
echo"<tr class=tr>";
echo"<th class=th>Nombres</th><th class=th>Telefono</th><th class=th>Fecha</th><th class=th>Hora</th><th class=th>Tipo</th><th class=th>Doctor</th><th class=th>Estado</th><th class=th>Editar</th><th class=th>Eliminar</th><th class=th>Ver</th>";

echo"</tr>";

while($row=$resultado->fetch_assoc()){


echo"<tr class=tr>";
echo"<td class=td > ".$row["nombres"]."</td><td class=td>".$row["telefono"]."</td><td class=td>".$row["fecha"]."</td><td class=td>".$row["hora"]."</td><td class=td>".$row["tipo"]."</td><td class=td>".$row["doctor"]."</td></td><td class=td><p class=estado>".$row["estado"]."</p></td><td class=td><form method=post action=editarcitas.php><input type=image src=iconos/aa.jpg width=30px><input type=hidden value='$row[telefono]' class='btn11 btn-green11' name=opcion id=opcion></form></td><td class=td><form><input type=image src=iconos/eliminar.jpg width=30><input type=hidden value='$row[nombres]' class='btn11 btn-green22' name=btneliminar></form></td><td class=td><form action=pdfreporteunocitas/index.php method=post><input type=image src=iconos/reporte.png width=30><input type=hidden value='$row[nombres]' class='btn11 btn-green33' name=opcion id=opcion ></form></td>";
echo"</td>";
echo"</tr>";


}
echo"</table>";
}else{
echo"ningun result";
}

}
    
    
    
    
}


    

?>


    






