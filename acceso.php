<?php
session_start();
	include ("credenciales.php");
		if (isset($_POST['nombre']) and isset($_POST['clave'])){
		
    
       $nomusuario=$_POST['nombre'];
		$password=$_POST['clave'];
		
     $conexion = new mysqli(SERVIDOR, USUARIO, CONTRA, BASEDATOS);
	
     	$consultaBD= "SELECT * from usuario where nom_usuario='$nomusuario' and clave_usuario='$password' and tipo='1' ";
		$admin= "SELECT * from usuario where nom_usuario='$nomusuario' and clave_usuario='$password' and tipo='0' ";
		$comprobacion=$conexion->query($consultaBD);
		$com2=$conexion->query($admin);  
     
 
		  if($comprobacion->num_rows > 0){  
		    
					
						$_SESSION['usuario']=$_POST['nombre'];
						header("location: cliente.php");
              header('location: inicio.php');
						exit();
					
			}else{
				echo "<script> alert('Usuario o contraseña no coinciden'); </script><br>";
				include('index.php');
			}
			if ($com2->num_rows > 0) {
				$_SESSION['admin']=$_POST['nombre'];
				header('location: administrador.php');
                header('location: inicio.php');
				exit();
			}
	}else{
		header('location:index.php');
	}



						
?>