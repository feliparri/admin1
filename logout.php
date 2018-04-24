<?php
	session_start();
	unset($_SESSION['entroOkLogin']);
	session_destroy();
	session_unset();
    header('Location: ./login.php');
	exit;

?>