function confirmacion(e){
	if (confirm("esta seguro que desea eliminar este registro?")){
		return true;
	}else{
		e.preventDefault();
	}

}

let linkdelete = document.querySelectorAll(".link-delete");

for (var i = 0; i < linkdelete.length; i++) {
	linkdelete[i].addEventListener('click', confirmacion);
}