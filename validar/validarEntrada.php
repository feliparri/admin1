<?php

if (isset($_SESSION['entroOkLogin'])) {
	if ($_SESSION['entroOkLogin']=='1') {
		if (isset($_POST['accion'])) {
			$accion = htmlentities($_POST['accion']);
		}
		else {
			$accion = 'formInicio';
		}
	}
	else {
		$accion='login';
		header("Location: ./index.php?error=1");
		exit;
	}
}
else {
	header("Location: ./login.php");
	exit;
}

?>