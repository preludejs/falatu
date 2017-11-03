<?php
include 'lock.php';

$user = $_GET['usuario'];

$query = mysqli_query($con, "SELECT * FROM `usuarios` WHERE `user` = '$user' ");

if(mysqli_num_rows($query) > 0){
	$l = mysqli_fetch_assoc($query);
	$sMsg = $l['status'];
	$foto = $l['foto'];
	$nick = $l['user'];
	$nome = $l['nome'];
}else{
	header("location: ?F=index");
	exit();
}
?>
<div class="col-md-6 col-md-offset-3" style=" border-style: solid;
    border-color: #00f;">
	<div >
		<div class='box-comentario'>
			<div class='foto-contato'>
				<div><img src="<?php print $foto; ?>" class="foto-user"></div>
			</div>
			<div class='comentario'>
				<div class='titulo-comentario'>
					asfsa
				</div>
			</div>
		</div>
	</div>
</div>