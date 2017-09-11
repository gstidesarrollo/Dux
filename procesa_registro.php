<?php

  include('config.php');
  $tipo = $_POST['tipo'];

  if($tipo == 'leading_safe')
  {
    $source    = $_POST['source'];
    $medium    = $_POST['medium'];
    $campaign  = $_POST['campaign'];
    $term      = $_POST['term'];
    $content   = $_POST['content'];
    $nombre    = $_POST["nombre"].' '.$_POST["apellido"];
    $correo    = $_POST["correo"];
    $telefono  = $_POST["telefono"];
    $empresa   = $_POST["empresa"];
    $cargo     = $_POST["cargo"];
    $time = time();
    $hoy=date("Y-m-d H:i:s", $time);
    $sql = mysqli_query($conexion,"INSERT INTO campaign_2017_q3_safe_leading VALUES('$nombre','$correo','$telefono','-','$empresa','-','-','-','-','$source','$medium','$campaign','$term','$content')");
  }
  elseif($tipo == 'safe_for_teams')
  {
    $source    = $_POST['source'];
    $medium    = $_POST['medium'];
    $campaign  = $_POST['campaign'];
    $term      = $_POST['term'];
    $content   = $_POST['content'];
    $nombre    = $_POST["nombre"].' '.$_POST["apellido"];
    $correo    = $_POST["correo"];
    $telefono  = $_POST["telefono"];
    $empresa   = $_POST["empresa"];
    $cargo     = $_POST["cargo"];
    $time = time();
    $hoy=date("Y-m-d H:i:s", $time);
    $sql = mysqli_query($conexion,"INSERT INTO campaign_2017_q3_safe_teams VALUES('$nombre','$correo','$telefono','-','$empresa','-','-','-','-','$source','$medium','$campaign','$term','$content')");
  }
  elseif($tipo == 'togaf')
  {
    $source    = $_POST['source'];
    $medium    = $_POST['medium'];
    $campaign  = $_POST['campaign'];
    $term      = $_POST['term'];
    $content   = $_POST['content'];
    $nombre    = $_POST["nombre"].' '.$_POST["apellido"];
    $correo    = $_POST["correo"];
    $telefono  = $_POST["telefono"];
    $empresa   = $_POST["empresa"];
    $cargo     = $_POST["cargo"];
    $time = time();
    $hoy=date("Y-m-d H:i:s", $time);
    $sql = mysqli_query($conexion,"INSERT INTO campaign_2017_q3_togaf VALUES('$nombre','$correo','$telefono','-','$empresa','-','-','-','-','$source','$medium','$campaign','$term','$content')");
  }
  elseif($tipo == 'archimate')
  {
    $source    = $_POST['source'];
    $medium    = $_POST['medium'];
    $campaign  = $_POST['campaign'];
    $term      = $_POST['term'];
    $content   = $_POST['content'];
    $nombre    = $_POST["nombre"].' '.$_POST["apellido"];
    $correo    = $_POST["correo"];
    $telefono  = $_POST["telefono"];
    $empresa   = $_POST["empresa"];
    $cargo     = $_POST["cargo"];
    $time = time();
    $hoy=date("Y-m-d H:i:s", $time);
    $sql = mysqli_query($conexion,"INSERT INTO campaign_2017_q3_archimate VALUES('$nombre','$correo','$telefono','-','$empresa','-','-','-','-','$source','$medium','$campaign','$term','$content')");
  }
?>
