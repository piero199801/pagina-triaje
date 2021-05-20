<?php 
  $host = "localhost";
  $usuario = "root";
  $clave = "HHHHh943610462";
  $bd = "triaje-diario-colaboradores";

  $conexion = mysqli_connect($host,$usuario,$clave,$bd);
 	if (!$conexion) {
 		echo "Actualmente estamos presentando problemas: Estamos solucionando el problema";
 	}else{

 	 $Nom = $_POST["txtusuario"]; 
 	 $Con = $_POST["txtpassword"];
 	 $query	= mysqli_connect($conexion,"SELECT * FROM usuarios");

 	 $num = mysqli_num_rows($query);
 	 if ($num == 1) {
 	 	echo "Bienvenido";
 	 }else{
        echo "algo salio mal";
 	 }
 	}
 ?>
 
 
 
 

 