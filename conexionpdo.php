<?php  
	$user = "root";
	$password = "";

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=gkuv',$user,$password);
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
	}



?>