function accion(accion){ //BuscarRequerimiento_21_Listar
	 alert('accion=>'+accion);
	var spltaccion=accion.split('_');
	var controlador = spltaccion[0];
	// alert(spltaccion[0]);
	if(spltaccion[1]!='null'){
		var id = spltaccion[1];
	}else{
		var id = 'null';
	}
	var funcion = spltaccion[2];



	$('#accion').val(controlador);
	$('#funcion').val(funcion);
	$('#regid').val(id);


	$('#f1').attr('method','post');
	$('#f1').attr('action','index.php');
	$('#f1').submit();
}