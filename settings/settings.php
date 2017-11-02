<?php
	$host = "localhost";
	$user = "root";
	$senha = "";
	$banco = "chat";

	//conexão
	$con = mysqli_connect($host, $user, $senha, $banco);

	if (!$con) {
		print "ERRO AO CONECTAR COM O BANCO DE DADOS";
	}

	//OUTRAS CONFIGURAÇÕES
	date_default_timezone_set('America/Sao_Paulo');
	$globalData = date('d/m/Y');
	$globalHora = date('H:i');
	$showNome = false;

	//SE EXISTIR SESSÃO E SE FOR DIFERENTE DE NULO
	if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != null){
		$nomeAtual = $_SESSION['nome'];
		$usuarioAtual = $_SESSION['usuario'];
		$showNome = true;
	}
?>