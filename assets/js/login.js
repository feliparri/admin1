function ingresaLogin(){
	sw =1;	
	//alert("login");
	/*$('#msgUser').html('');
	$('#msgPasswd').html('');
	$('#msgErrorLogin').html('');*/
	if ($.trim($('#inputEmail').val())==''){
		$('#msgUser').html('Debe ingresar usuario');
		sw =0;
	}
	if ($.trim($('#inputPassword').val())==''){
		$('#msgPasswd').html('Debe ingresar password');
		sw =0;
	}
	//$('#f1').attr('action','./validar/validarLogin.php');
	//$('#f1').attr('method','post');
	//$('#f1').submit();	
	//$('#f1').redirect('./validar/validarLogin.php', {'arg1': 'value1', 'arg2': 'value2'});
	if (sw==1){
		$('#f1').attr('action','./validar/validarLogin.php');
		$('#f1').attr('method','post');
		console.log($('#f1'));
		//$('#f1').submit();			
	}
	f.submit();
}

