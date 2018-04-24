<?php
//require_once('../class/datos/UsuarioDatos.class.php');
	session_start();
	$usuario = htmlentities($_POST['inputEmail']); 
	$passwd = htmlentities($_POST['inputPassword']);
	
	/*$Usuario = new UsuarioDatos;
	$rsUsuario = $Usuario->validaLogin($usuario,$passwd);*/
	//var_dump($rsUsuario);exit;
	
	
	/*if ($rsUsuario!=false) {
		$rsCcosto= $Usuario->getCentroCostoUsuario($rsUsuario['usu_rut']);
		//var_dump($rsCcosto)	;exit;
		$_SESSION['entroOkLogin']='1';
		$_SESSION['usu_id']=$rsUsuario['usu_id'];
		$_SESSION['usu_nombre']=$rsUsuario['usu_nombre'];
		$_SESSION['rol_descripcion']=$rsUsuario['rol_descripcion'];
		$_SESSION['usu_rol_id']=$rsUsuario['usu_rol_id'];
		$_SESSION['user_id']=$rsUsuario['usu_user'];
		$_SESSION['user_rut']=$rsUsuario['usu_rut'];
		$_SESSION['user_empresa']=$rsUsuario['usu_empresa'];
		$_SESSION['user_iniContrato']=$rsUsuario['fecha_contrato'];
		$_SESSION['cod_centro_costo']=$rsUsuario['centro_de_costo'];
		$_SESSION['user_centro_costo']=$rsCcosto['dato'][0]['ccosto'];
		$_SESSION['user_centro_costo_desc']=$rsUsuario['centro_de_costo_desc'];
		$_SESSION['ip_bd']='192.168.2.130';
		header('Location: ../index.php');
		exit;
	}else{
		$_SESSION['msgError']="Usuario no existe";
		header('Location: ../login.php?error=33');
		exit;
	}		*/

	if ($usuario=='demo' and $passwd=='demo') {
		$_SESSION['entroOkLogin']='1';
		header('Location: ../index.php');
		exit;
	}else{
		$_SESSION['msgError']="Usuario no existe";
		header('Location: ../login.php?error=33');
		exit;
	}		
?>