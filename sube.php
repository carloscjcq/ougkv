<?php  


$nombre=$_FILES['archivo']['name'];
$guardado=$_FILES['archivo']['tmp_name'];

if(!file_exists('archivos')){
	mkdir('archivos>',0777,true);
	if (move_uploaded_file($guardado,'archivos/'.$nombre)){
		echo "archivo guardado con exito";
	}else{
		echo "archivo no se pudo guardar";
	}
}else{
	if (move_uploaded_file($guardado,'archivos/'.$nombre)){
		echo "archivo guardado con exito";
		require("admin.php");
	}else{
		echo "archivo no se pudo guardar";
	}
}
?>