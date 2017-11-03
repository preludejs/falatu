<?php
	session_start();

	$_SESSION['nome'] = array();
	$_SESSION['usuario'] = array();

	if (session_destroy()) {
		session_unset();
		session_set_cookie_params(1);
		header("location: ../index.php?out");
		exit();
	}
?>