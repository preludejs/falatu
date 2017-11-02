<div id="content">
	<?php
		$seleciona = mysqli_query($con, "SELECT * FROM usuarios");
		$conta = mysqli_num_rows($seleciona);

		if($conta <= 0){
			print "Usuario não encontrado";
		}else{
			while($row = mysqli_fetch_array($seleciona)){
				$nome = $row['nome'];
				$usuario = $row['user'];
				$foto = $row['foto'];
	?>
	<tr>
		<td><img src="<?php print $foto; ?>" class="foto-user"></td><?php print $usuario; ?></b></td>
		<td><a href="?pagina=chat&usuario=<?php print $usuario; ?>" class="btn btn-info">Iniciar</a></td>
	</tr>
	<hr/>
	<?php }} ?>
</div>