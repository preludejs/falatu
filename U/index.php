<div id="content">
	<form action="" method="POST" enctype="multipart/form-data">
		<label>Usuario</label>
		<p><input type="text" name="usuario" id="usuario" class="form-control"></p>

		<label>Senha</label>
		<p><input type="password" name="senha" id="senha" class="form-control"></p>

		<p><input type="submit" name="entrar" class="btn btn-primary btn-lg btn-block"></p>
		<input type="hidden" name="env" value="login">
	</form>
	<?php
		if (isset($_POST['env']) && $_POST['env'] == 'login') {
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];

			//VALIDAÇÃO DO FORMULARIO
			if(empty($usuario) || empty($senha)){
				print "<code>Preencha todos os campos.</code>";
			}else{
				//EXECUTANDO LOGIN
				$query = "SELECT * FROM usuarios WHERE user = '$usuario' AND senha = '$senha'";
				$result = mysqli_query($con, $query);
				$busca = mysqli_num_rows($result);
				$linha = mysqli_fetch_assoc($result);

				if($busca > 0){
					$_SESSION['nome'] = $linha['nome'];
					$_SESSION['usuario'] = $linha['user'];

					print '<meta http-equiv="Refresh" content="1; url=?pagina=users"/>';
				}else{
					print "<code>Usuario e senha invalidos</code>";
				}
			}

		}
	?>
</div>