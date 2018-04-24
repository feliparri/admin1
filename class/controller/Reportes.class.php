<?php
class Reportes {
	public function ListarReportes()  {
		/*$ModuloDatos = new Modulo;
		$rsModulos=$ModuloDatos->listarModulosByUserId($_SESSION['usu_id']);
		
		$ParametroDatos = new ParametrosDatos;
		$rsCampana = $ParametroDatos->listarCampanas($_SESSION['usu_id']);
		$rsMonitores = $ParametroDatos->listarMonitores($_SESSION['usu_id']);*/
		$template='./tpl/tpl-reportes.php';
		
		if (isset($_POST['accion'])){
			$accion = $_POST['accion'];	
		}
		else {
			$accion = '';	
		}
		$parametro = array('accion' =>'formInicio',
							'template'=>$template,
							//'parametroDatos'=>$ParametroDatos,
							);
		require_once('./tpl/tpl-inicio.php');
	}
}
?>