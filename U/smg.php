<?php
//include 'lock.php';

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

<link rel="stylesheet" href="css/balao.css">

<div class="col-md-6 col-md-offset-3">
<div id="wrapper">
<div class="window">
  <div class="windowrap">
    <div class="bot">
    	
      <h3><img src="<?php print $foto; ?>" class="foto-user"> <?php print $user; ?></h3>

      </div>
  <div class="chatwindow"></div>
  <form id="messenger" action="" method="get" name="messenger">
    <input type="text" name="enter" class="enter" value="" placeholder="say something..." id="message"/>
    <div class="send"><input type="submit" value="" id="btn" tabindex="-1"/></div>
  </form>
  </div>
</div>
</div>
</div>
			