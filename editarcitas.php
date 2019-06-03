
<?php
session_start();
include 'persona.php';
?>


<?php

if (isset($_SESSION["admin"])) {
include("administrador.php");
}elseif(isset($_SESSION["usuario"])){
  include("cliente.php");
}else{
header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="utf-8">
    	<meta sharset="iso-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="html5, css3, Javascript">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	    <title>Plantilla</title>
	    
	   <!--este codigo ayuda para que cuando ingresemos datos al formulario ya apretemos el boton ingresar este tome los dato y haga la coneccion correcta con la base de datos--->
	    <script type="text/javascript">
            function cargar(nombres,telefono,fecha,hora,tipo,doctor){
                document.frmpersona.textnombres.value=nombres;
                document.frmpersona.texttelefono.value=telefono;
                document.frmpersona.textfecha.value=fecha;
                document.frmpersona.texthora.value=hora;
                document.frmpersona.texttipo.value=tipo;
                document.frmpersona.textdoctor.value=doctor;
            }
        </script>
        
       <!--link para estilos-->
	    <link rel="stylesheet" href="css/estilos.css">
       
<style>

/* Esto es el cuerpo y se le da un color de fondo gris*/
body{
margin: 0 auto;
background-color:white;

background
}

/*Este es el header y le damos un fondo de imagen se fondo*/
.header1{
background-image: url("1.jpg");
background-repeat: no-repeat;
background-size: 100% 720px;
width:auto;
background-color: darkslateblue;
height:50px;
}

    /*Este header2 esta dentro del header principal 1 y este contiene una imagen como color chicle con un ancho de 250 y altura de 50 px*/
.header2{
background-color: mediumblue;
background-repeat: no-repeat;
background-size: 100% 720px;
width:250px;

height:50px;
color:white;
display: inline-block;
border-color:cyan;
text-align:center;



}

    
/*Estos son estilos de parrafos*/
.p1{
font-family:Impact;
content:center;
text-align:center;
padding:0px 0px 0px 0px;
}

/*En esta seccion1 se encuentra el menu principal del siste,a el cual tiene fondo color negro con un ancho de 251 y una altura de 607 px*/

.seccion1{
width:251px;
background-color:steelblue;
height:607px;
float: left;
display: block;

}

/*Este es el que contiene el formulario .Esta seccion esta a la par del menu y este contiene un formulario para ingresar datos*/
.seccion2{
width:1098px;
background-color:white;
height:607px;
float: right;
box-shadow: 4px 1px 1px 1px rgba(,0,0,0.3); 
display: block;
    border-color: black;

}
    
    
    
/*El formulario lo hemos colocado en una tabla para que asi este se observe de una manera ordenada*/
.table1{
border-spacing:6px;
    width: 1030px;
    border:1px;
}
    
    


    
    
/*estilos para los botones*/
.btn1{
border:none;
padding: 20px 85px;
text-decoration: none;
text-shadow: 0 1px 0 rgba(255,255,255,0.3);
width: 250px;
font-size: 20px;
font-family: Agency FB;
}

    
/*estilos de los botones que contiene el menu principal*/    
.btn-greenmenu{
color: white;
background-color:steelblue;
}
.btn-greenmenu:hover{
background-color: darkred;	
}

    
    
.none{

}

/*estilo del formulario principal en donde colocaremos los datos */
.form1{
background-color: white;

color:darkslategray;
font-size: 15px;
padding: 20px;
font-family: sans-serif;
justify-content: center;
width: 1050px;

}
    
 /*el field es una clase que emos creado para que se le de estilos a las cajas de textos correspondientes*/   
.field{
border: solid 1px whitesmoke;
padding: 10px;
background-color: whitesmoke;
width:400px; 
    height: 8px;
    box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0,0,0,0.3);
}
    
    /*este fielnacimiento es especial para una sola caja de texto y es a la de la fecha de nacimiento .Se utilizo para agrandr la caja de texto*/
    .fieldnacimiento{
border: solid 1px whitesmoke;
padding: 10px;
background-color: whitesmoke;
width:700px; 
height: 8px;
box-shadow: 0.5px 0.5px 0.5px 0.5px rgba(0,0,0,0.3);
        
    }
    
    /*estilos decaja de texto y es que sirve que para cuando nos posicionemos en la caja de texto este se de un borde color azul*/
.field:focus{
border-color:darkblue;
}

/*estilos de los botones agregar y cancelar*/
.btn{
border-radius: 3px;
display: inline-block;
padding: 8px 90px;
text-decoration: none;
text-shadow: 0 1px 0 rgba(255,255,255,0.3);
box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
}    

    /*estilos del boton agregar color rojo*/


    
.btn-green3{
	color: white;
	background-color:purple;
      border-color:purple;
}
.btn-green3:hover{
	background-color: black;
     border-color:black;
}

 

/*estilos del boton que esta a la par de la letra categoria*/
    .categoriabtn{
        color:darkslategray;
font-size: 15px;
    border-radius: 3px;
display: inline-block;
padding: 8px 15px;
text-decoration: none;
color: white;
border-color:#3CC93F; 
background-color: #3CC93F;
    }
    
 
  


/*estilos de tabla ,el cual no hemos utilizado.Este sirve para que cuando nosotros pasemos el mouse encima de una celda este cambie de color o etc*/ 

    

    
    

</style>

</head>

<body>   
      
 

<!--seccion dos donde se encuentra el formulario y sus botonew -->
<section class=seccion2>
 <br>
    
    
    
    
    
    
    

    
     <form action='#' method="post" class=form1 name=form1>
         
         <b>
          <p>Categoria<input type="submit" value="Editar Citas" class="categoriabtn" disabled>
           </p>
           
           <br><br><br>
<?php

$servername="localhost";
$username="root";
$password="";
$dbname="basepacientes";
    
$conn=new mysqli($servername,$username,$password,$dbname);
 
    
if($conn->connect_error){
    
die("connection failed:". $conn->connect_error);
}
    
 
             
$opcion=$_POST["opcion"];
    
$sql="select nombres,telefono,fecha,hora,tipo,doctor from citas where telefono=$opcion";  
$resultado=$conn->query($sql);
    
if($resultado->num_rows>0){
    $row=$resultado->fetch_assoc();
}else{
    echo"cero resultados";
}

             
if(isset($_REQUEST["btnmodificar"])){
$nombres=$_POST["txtnombres"];
$telefono=$_POST["txttelefono"];;
$fecha=$_POST["txtfecha"];
$hora=$_POST["txthora"];
$tipo=$_POST["txttipo"];
$doctor=$_POST["txtdoctor"];
$estado=$_POST["txtestado"];
  
$sql="update citas set nombres='$nombres',telefono='$telefono',fecha='$fecha',hora='$hora',tipo='$tipo',doctor='$doctor',estado='$estado' where nombres='$nombres'";
    
if($conn->query($sql)===TRUE){
    echo"Registro Actualizado";
}else{
    echo"error".$sql."<br>".$conn->error;
}
}

?>

<table class=table1 >
<tr>
<td>NOMBRES:</td>
<td> TELEFONO:</td>
</tr>

<tr>
<td> <input type="text" id="txtnombres" name="txtnombres" class="field" value="<?php echo $row["nombres"]?>"></td>

<td><input type="text" id="txttelefono" name="txttelefono" class="field" value="<?php echo $row["telefono"]?>"></td>
</tr>

<tr>
<td>FECHA:</td>
<td>HORA: </td>
</tr>


<tr>
<td><input type="text" id=txtfecha name=txtfecha class="field" value="<?php echo $row["fecha"]?>"></td>
<td><input type="text" id=txthora name=txthora class="field" value="<?php echo $row["hora"]?>"></td>
</tr>

<tr>
<td>TIPO:</td>
<td>DOCTOR:</td>
</tr>

<tr>
<td><input type="text" id=txttipo name=txttipo class="field" value="<?php echo $row["tipo"]?>"></td>
<td><input type="text" id=txttdoctor name=txtdoctor class="field" value="<?php echo $row["doctor"]?>"></td>
</tr>

<tr>
<td> ESTADO</td>
<TD><Select name="txtestado"  >
<option value=Pendiente>Pendiente</option>
<option value=Realizada>Realizada</option>
</Select></TD>
</tr>


</table>




</b>
<br><br><br>

                 <a href="agregarcitas.php" onchange="document.form1.btnmodificar.value=''; return false"></a>

         <input type="submit" name=btnmodificar value="Actualizar Dato" class="btn btn-green3" onclick="controlar()"  title="modifique">
         

    
</form>

<br>

<?php
    $conn->close();
            ?>
            
            

<script languaje=javascript>
    function controlar(){
        
        
       
            alert('Registro Modificado Exitosaemtne');
        
        
    }
    
    </script>

</section>

</body>
</html>


