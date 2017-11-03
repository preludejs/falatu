<?php
include 'lock.php';

	$_SESSION['id_para'] = $_GET['usuario'];
?>
<div id="content">
	<div id="lista">
		<?php
		include_once("sys/lista.php")
		?>
	</div>
	<hr/>

	<form id="form-chat" action="" method="POST" enctype="multipart/form-data">
		<div class="col-lg-12">
			<div class="input-group">
				<input type="text" name="mensagem" id="mensagem" placeholder="Digite sua mensagem" class="form-control" />
				<span class="input-group-btn">
					<input type="submit" value="&rang; &rang;" class="btn btn-success">
					<input type="hidden" name="env" value="envMsg">
				</span>
			</div>
		</div>
	</form>
	<?php
		if(isset($_POST['env']) && $_POST['env'] == 'envMsg'){
			$mensagem = $_POST['mensagem'];
			$id_para = $_GET['usuario'];
			$id_de = $usuarioAtual;

			if(empty($mensagem)){
				print "<code>Digite sua mesagem.</code>";
			}else{
				if(mysqli_query($con, "INSERT INTO mensagens(id, id_de, id_para, mensagem) VALUES (null, '$id_de', '$id_para', '$mensagem')")){
				}else{
					print "<code>Erro ao enviar a mensagem</code>";
				}
			}
		}
	?>
	<br><br/>
</div>