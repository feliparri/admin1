<?php


$error_login='';

if (isset($_GET['error'])){
	$error_login='Usuario o Password incorrectos';	
}
include_once('./tpl/tpl-login.php');
?>