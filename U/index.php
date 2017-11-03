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
		///VERIFICA SE O FORMULARIO FOI ENVIADO
		if (isset($_POST['env']) && $_POST['env'] == 'login') {
			///SALVA VARIAVES
			$usuario = $_POST['usuario'];
			$senha = $_POST['senha'];

			//VALIDAÇÃO DO FORMULARIO
			if(empty($usuario) || empty($senha)){
				print "<code>Preencha todos os campos.</code>";
			}else{
				///VERIFICA SE HÁ USUARIOS COORESPONDENTE
				$query = "SELECT * FROM usuarios WHERE user = '$usuario' AND senha = '$senha'";
				$result = mysqli_query($con, $query);
				$busca = mysqli_num_rows($result);
				$linha = mysqli_fetch_assoc($result);

				///SE EXISTIR ALGUM USUARIO:
				if($busca > 0){
					///CRIA SESSÃO E SALVA VARIAVES
					$_SESSION['nome'] = $linha['nome'];
					$_SESSION['usuario'] = $linha['user'];

					///ATULAIZA A PAGINA E REDIRECIONA PARA A PAGINA DO USUARIO
					print '<meta http-equiv="Refresh" content="1; url=?F=users"/>';
				}else{
					///SE NÃO HOUVER USUARIOS COORESPONDENTES: 
					print "<code>Usuario e senha invalidos</code>";
				}
			}///FIM VALIDAÇÃO

		}///FIM VERIFICAÇAO FORMULARIO
	?>
</div>