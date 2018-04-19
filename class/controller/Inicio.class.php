<?php
class FormularioInicio {
	public function formMostrar()  {
		$ModuloDatos = new Modulo;
		$rsModulos=$ModuloDatos->listarModulosByUserId($_SESSION['usu_id']);
		
		$ParametroDatos = new ParametrosDatos;
		$rsCampana = $ParametroDatos->listarCampanas($_SESSION['usu_id']);
		$rsMonitores = $ParametroDatos->listarMonitores($_SESSION['usu_id']);
		if (isset($_POST['accion'])){
			$accion = $_POST['accion'];	
		}
		else {
			$accion = '';	
		}
		$parametro = array('accion' =>'formInicio',
							'parametroDatos'=>$ParametroDatos,
							);
		require_once('./tpl/tpl-inicio.php');
	}
}
?>