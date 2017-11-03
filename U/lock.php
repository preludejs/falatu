<?php
	///VERIFICA SE AS SESSÕES ESTÃO VAZIAS
	if(empty($_SESSION['nome']) || empty($_SESSION['usuario'])){
		///REDIRECIONA PARA O LOGIN
		header("location: ../index.php?login");
		exit();
	}else{
		///SE EXISTIR SESSÕES ESTÁ TUDO OK!
	}
?>