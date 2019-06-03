<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="utf-8">
    	<meta sharset="iso-8859-1">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="keywords" content="html5, css3, Javascript">
        <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
	    <title>Plantilla</title>
	    <link rel="stylesheet" href="css/estilos.css">
       <link href="css/bootstrap.min.css" rel="stylesheet">
        <style>
   

		        body{
	margin: 0 auto;
	background-image: url("1.jpg");
	background-repeat: no-repeat;
	background-size: 100% 720px;
        background
}

		form{
			background-color: white;
			border-radius: 10px;
			color:white;
			font-size: 20px;
			padding: 20px;
			margin: 0 auto;
			width: 400px;
            background-color: rgba(44, 62, 80,0.7);
		}

		input, textarea{
			border: 0;
			outline: none;

			width: 280px;
		}

		.field{
			border: solid 1px cadetblue;
			padding: 10px;

			
		}

		.field:focus{
			border-color:darkblue;
		}

		.center-content{
			text-align: center;
		}
        
            .btn{
	border-radius: 3px;
	display: inline-block;
	padding: 20px 15px;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(255,255,255,0.3);
	box-shadow: 0 1px 1px rgba(0,0,0,0.3); 
}

.btn-green{
	color: white;
	background-color: #3CC93F;
}
.btn-green:hover{
	background-color: cadetblue;	
}
.btn-green:active{
	background-color: #29962A;
}
.btn-red{
	color: white;
	background-color: red;
}
.btn-red:hover{
	background-color: cadetblue;	
}
.btn-red:active{
	background-color: red;
}
            

	</style>
        
        
	</head>
    
   <body>   
       
       

       
       <BR>
      <BR><BR><BR><BR><BR><BR><BR>
           
           
           
<form  action="acceso.php" method="post">


<center>INICIAR SESSION</center>
<hr color=cadetblue>
<br><br>
<table>
<tr>
<td >Usuario</td>
<td><input type="text" class="field" required name="nombre"></td> 
</tr>

<tr>
<td>Pasword:</td>
<td ><input type=password class="field" required name="clave"></td>
</tr>
</table>


<br/>

<p class="center-content"><a href="www.gmail.com"><input type="submit" class="btn btn-green" value="Enviar Datos" name=btnIngresar></a></p>
               
</form>
<BR> <BR> <BR>
   
   
<




</body>
</html>

