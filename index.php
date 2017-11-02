<?php
  session_start();
  include_once("settings/settings.php");

  //FUNÇÃO MYSQL_RESULT ATUALIZADA !!
function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <title>@[F]</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/balao.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <?php if($showNome){ ?>
      <p>Bem Vindo <code><?php print $nomeAtual; ?></code></p>
    <?php } ?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php
          $dir = "U/";
          $ext = ".php";

          if(isset($_GET['F'])){
            $pagina = $_GET['F'];

            $query = mysqli_query($con, "SELECT * FROM `usuarios` WHERE `user` = '$pagina'");
            $l = mysqli_fetch_assoc($query);
            if($pagina == $l['user']){
              header("location: ?F=smg&usuario=".$l['user']."");
              exit();
            }
          }else{
          /*paginas/index.php*/
            $pagina = "index";
          }

          if(file_exists($dir.$pagina.$ext)){
            include($dir.$pagina.$ext);
          }else{
            print "<b><h1>ERRO 404<h1></b><br>PAGINA NÃO ENCONTRADA";  
          }
        ?>
      </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>