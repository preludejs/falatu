<?php
	include ("lock.php"); ///VALIDAÇÃO DA PAGINA

	///SELECIONA TODOS OS USUARIOS DO BANCO DE DADOS
	$seleciona = mysqli_query($con, "SELECT * FROM usuarios");
	$conta = mysqli_num_rows($seleciona);

	///SE NÃO HOUVER USUAIOS:
	if($conta <= 0){
		print "Usuario não encontrado";
	}else{
		///CASO TENHA, SELECIONA ALGUNS DADOS DELES:
		$row = mysqli_fetch_array($seleciona);

		$nome = $row['nome'];
		$usuario = $row['user'];
		$foto = $row['foto'];
	}


?>

<link rel="stylesheet" type="text/css" href="css/user.css">
<script type="text/javascript" src="js/js_user.js"></script>


	<div class="accordion">
		<a href="#" class="active"><i class="fa fa-user"></i> Perfil</a>
		<div class="sub-nav active">
			<div class="html about-me">
				<div class="photo">
					<div class="photo-overlay">
						<img src="<?php print $foto; ?>" class="foto-user">
						<span class="plus">+</span>
					</div>
				</div>
				<h4>@<?php print $usuario; ?></h4>
				<a href="U/sair.php">Chapar o coco</a>
				<p>STATUS</p>
				<div class="social-link">
					<a class="link link-twitter" href="https://twitter.com/khadkamhn/" target="_blank"><i class="fa fa-twitter"></i></a>
					<a class="link link-codepen" href="https://codepen.io/khadkamhn/" target="_blank"><i class="fa fa-codepen"></i></a>
					<a class="link link-facebook" href="https://facebook.com/khadkamhn/" target="_blank"><i class="fa fa-facebook"></i></a>
					<a class="link link-dribbble" href="http://dribbble.com/khadkamhn" target="_blank"><i class="fa fa-dribbble"></i></a>
				</div>
			</div>
		</div>
		<a href="#"><i class="fa fa-comments"></i> Chat</a>

			<!--<a href="?F=chat&usuario=<?php print $usuario; ?>" class="btn btn-info">Iniciar</a>-->

		<div class="sub-nav">
			<div class="html chat">
				<div class="user user-khadkamhn clearfix">
					<span class="text-msg pull-right">mensagem enviada</span>
				</div>
				<div class="user user-dribble clearfix">
					<span class="photo pull-left" data-username="dribbble"><i class="fa fa-dribbble"></i></span>
					<span class="text-msg">mensagem recebida</span>
				</div>
			</div>
		</div>
		<a href="#"><i class="fa fa-envelope"></i> Mensagens <span class="pull-right alert-numb"><?php print $totalMsg = 23; ?></span></a>
		<div class="sub-nav">
			<a href="#">Enviadas <span class="pull-right alert-numb">11</span></a>
			<a href="#">Recebidas <span class="pull-right alert-numb">10</span></a>
			<a href="#">Conversações <span class="pull-right alert-numb">2</span></a>
		</div>
		<a href="#"><i class="fa fa-dribbble"></i> Link de confição</a>
		<div class="sub-nav">
			<div class="html invite">
				<p>Copie e envie para um cumpadi</p>
				<p><?php print "localhost/falatu/?F=$usuario"; ?></p>
				<a class="btn" href="?F=<?php print $usuario;?>" target="_blank">Me mande para lá</a>
			</div>
		</div>
	</div>
