<?php
session_start();
include 'persona.php';
?>
<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="utf-8">
    	<meta sharset="iso-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="html5, css3, Javascript">
       <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	    <title>Plantilla</title>
	     <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

	   <!--este codigo ayuda para que cuando ingresemos datos al formulario ya apretemos el boton ingresar este tome los dato y haga la coneccion correcta con la base de datos--->
	    <script type="text/javascript">
            function cargar(id,nombre,dui,edad,direccion,telefono,nacimiento){
                document.frmpersona.textid.value=id;
                document.frmpersona.textnombre.value=nombre;
                document.frmpersona.textdui.value=dui;
                document.frmpersona.textedad.value=edad;
                document.frmpersona.textdireccion.value=direccion;
                document.frmpersona.texttelefono.value=telefono;
                document.frmpersona.textnacimiento.value=nacimiento;
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

background-repeat: no-repeat;
background-size: 100% 720px;
width:100%;
background-color: #051376;
height:80px;
position: fixed;
left:0;
top:0;
    
    
}

    /*Este header2 esta dentro del header principal 1 y este contiene una imagen como color chicle con un ancho de 250 y altura de 50 px*/
.header2{
background-image: url("2.jpg");
background-repeat: no-repeat;
background-size: 100% 720px;
width:250px;
background-color:darkred;
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
background-color:black;
height:607px;
float: left;
display: block;

}

/*Este es el que contiene el formulario .Esta seccion esta a la par del menu y este contiene un formulario para ingresar datos*/
.seccion2{
width:1300px;
background-color:white;
height:auto;
margin-left: 40px;
float: left;
box-shadow: 4px 1px 1px 1px rgba(,0,0,0.3); 
    border-color: black;
    margin-top: 80px;

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
height: 80px;

width: 110px;
font-size: 15px;
font-family: Agency FB;
     text-align: left;

}

    
/*estilos de los botones que contiene el menu principal*/    
.btn-greenmenu{
color: white;
background-color:#051376;
}
.btn-greenmenu:hover{
background-color: darkred;	
}

    
    
.none{
float: left;
}

/*estilo del formulario principal en donde colocaremos los datos */
.form1{
background-color: white;

color:darkslategray;
font-size: 15px;
padding: 30px;
font-family: sans-serif;
justify-content: center;
width: 500px;
border-top-color: black;
box-shadow: 0.5px 4px 0.5px 0.5px rgba(0.3,0.3,0.3,0.3);
text-shadow: 2px;
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
padding: 8px 50px;
text-decoration: none;
text-shadow: 0 1px 0 rgba(255,255,255,0.3);
box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
}    

    /*estilos del boton agregar color rojo*/
.btn-green{
	color: white;
	background-color: darkred;
    border-color: darkred;
}
.btn-green:hover{
	background-color: black;
    border-color:black;
}

        /*estilos del boton agregar color azul*/
.btn-green2{
	color: white;
	background-color: midnightblue;
      border-color:midnightblue;
}
.btn-green2:hover{
	background-color: black;
     border-color:black;
}

    
.btn-green3{
	color: white;
	background-color:darkorange;
      border-color:darkorange;
}
.btn-green3:hover{
	background-color: black;
     border-color:black;
}

    
    
    
 /*estilos para botones de los datos de la base de datos*/   
    
 .btn11{
border-radius: 3px;
display: inline-block;
padding: 2px 50px;
text-decoration: none;
text-shadow: 0 1px 0 rgba(255,255,255,0.3);
box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
}    

    /*estilos del boton agregar color rojo*/
.btn-green11{
	color: white;
	background-color: lightgreen;
    border-color: lightgreen;
}
.btn-green11:hover{
	background-color: black;
    border-color:black;
}

       
.btn-green22{
	color: white;
	background-color: lightskyblue;
      border-color:lightskyblue;
}
.btn-green22:hover{
	background-color: black;
     border-color:black;
}

    
.btn-green33{
	color: white;
	background-color:mediumpurple;
      border-color:mediumpurple;
}
.btn-green33:hover{
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
    
     .categoriabtn2{
        color:darkslategray;
font-size: 15px;
    border-radius: 3px;
display: inline-block;
padding: 25px 15px;
text-decoration: none;
color: white;
border-color:#3CC93F; 
background-color: #3CC93F;
    }
  


/*estilos de tabla ,el cual no hemos utilizado.Este sirve para que cuando nosotros pasemos el mouse encima de una celda este cambie de color o etc*/ 

    
    
    .table{
        
       
     
      border-spacing:6px;
    width: 1080px;
    border:1px;
        
        border-radius:20px;
        border-spacing: 30px;
      
    }
    
    .th, .td{
        padding:30px ; 
        
        font-size: 12px;  
        border-spacing: 30px   
    }
    
    .tr{
        background-color:#faf2cc;  
        color: black;
         border-spacing: 30px
    }
    
    .tr, .td{
        transition: .4s ease-in;
         border-spacing: 40px
    }
    
    .tr:first-child{
        background-color:white;
        border:1px;
         border-spacing: 30px
    }
   
    
    .tr:hover{
    background-color:lightblue;
    pointer-events: visible;
    }
    

    .seccion3{
        float: right;
        height: auto;
        width: auto;
    } 
    

</style>

</head>

<body>   
 
 
       
 
 <!--header principal-->      
<header class="header1">
  
  <!--lheader secundario que esta arriba del menu-->
 <form action="inicio.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="inicio"></form>
      <form action="agregarpacientes.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Agregar Pacientes"> </form>
      <form action="agregardoctores.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Agregar Doctores"></form>
      <form action="agregarcitas.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Realizar Una sita"></form>
       <form action="buscarcitas.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Consulta de citas"></form>
       <form action="buscarpaciente.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Consulta de Pacientes"></form>
       <form action="buscardoctores.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Consulta de Doctores"></form>
       <form action="servicios.php" class="none"><input type="submit" class="btn1 btn-greenmenu" value="Servicios de Pacientes"></form>
    
   
</header>

<!--seccion donde se emcuentra el menu con sus respectivos enlaces-->


<!--seccion dos donde se encuentra el formulario y sus botonew -->
<section class=seccion2>


<br><br>
   
  <!--Bbotton de categoria Desabilitado-->   
<b><p>Categoria<input type="submit" value="Agregar Pacientes" class="categoriabtn" disabled></p></b>
    
      

    <!-- Aqui estan los link para agregar pacientes  -->
   <section class=seccion3>
       <p class="categoriabtn2">Nuevo Paciente</p>

<img src=iconos/agregar.png width="100px" data-toggle="modal" data-target=".bs-example-modal-sm" role=button>
     
    </section>
      <!--Formulario de ingresar pacientes-->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      
     
       <form action='#' method="post" name="frmpersona" class=form1>
         
         <b>
          <p>Categoria<input type="submit" value="Agregar Pacientes" class="categoriabtn" disabled>
           </p>
           

ID:
<input type="text" name=txtid class="form-control"><br>


NOMBRES:
<input type="text" name=txtnombre class="form-control"><br>


DUI:
<input type="text" name=txtdui class="form-control"><br>


EDAD 
<input type="number" name=txtedad class="form-control"><br>


DIRECCION:
<input type="text" name=txtdireccion class="form-control"><br>


TELEFONO:
<input type="text" name=txttelefono class="form-control"><br>



NACIMIENTO:
<input type="date" name=txtnacimiento class="form-control"><br>


<input type="submit" name=btningresar value=Agregar class="btn btn-green">
<input type="submit" name=btncancelar value=Cancelar class="btn btn-green2">



</form> 
                  
          
  
        </div>
    </div>
  </div>
 
     


 <br> <br>  <br>  <br>  
<?php
$per=new persona();

if(isset($_REQUEST["btningresar"])){
$per->agregar($_REQUEST["txtid"],$_REQUEST["txtnombre"],$_REQUEST["txtdui"],$_REQUEST["txtedad"],$_REQUEST["txtdireccion"],$_REQUEST["txttelefono"],$_REQUEST["txtnacimiento"]);

print $per->mostrar22();

    
}elseif(isset($_REQUEST["btneliminar"])){

$per->eliminar($_REQUEST["btneliminar"]);


print $per->mostrar22();

}else{
   print $per->mostrar22();
 
}



?>
 <form action=pdfreportegeneral/index.php method=post> <input type="submit" value="Ver Reportes" class="btn btn-green3"></form>
 
</section>

   

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>


