<?php
   $source    = $_GET['utm_source'];
   $medium    = $_GET['utm_medium'];
   $campaign  = $_GET['utm_campaign'];
   $term      = $_GET['utm_term'];
   $content   = $_GET['utm_content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="img/DUX_logo-01.png" type="image/png">
  <title>Togaf</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRaleway:300,400,600,900%7CCourgette" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/bundle.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/color/default.css" id="theme-color">
  <script type="text/javascript" src="js/jquery.js"></script>
  </head>
<body>
<nav id="nav" class="site-header navbar navbar-toggleable-md fixed-top">
  <div class="container" >

    <div class="navbar-header">
      <a href="" class="navbar-brand">
        <img src="img/logo_dux.png" alt="" width="20%" >
      </a>
    </div>
    <div class="navbar-collapse collapse flex-row-reverse" id="navbar-bluein" aria-expanded="false">
            <p style="font-size:16px; font-family: Helvetica;" href="#free-trail">+56 2 29797015<br />cursos@duxdiligens.cl</p>
    </div> <!-- END navbar-collapse -->

  </div> <!-- END container-->
</nav>
<section id="intro-hero">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 hero-text my-4">
        <h3 class="hero-title" style="color: #FFA643;font-family: Helvetica;">
          TOGAF®
        </h3>
          <b style="color: #FFFFFF;font-family: Helvetica; font-size:16px;">
          Aprende cómo generar Capacidades Digitales.
          </b>
        <p class="hero-tagline" style="font-family: Helvetica; font-size:14px;">

          Según predicciones del IDC para el año 2020 las 3.000 empresas TOP en Latino América verán que gran parte de su negocio dependerá de su habilidad de crear y desarrollar productos, servicios y experiencias mejoradas digitalmente.<br /><br />
          Eres Gerente de Negocio o TI, necesitas identificar, definir y/o proponer nuevas capacidades digitales
          Eres Arquitecto Empresarial, necesitas levantar la estrategia, determinar la brecha en capacidades digitales y trazar la Ruta a la Transformación
          Capacítate con nosotros y certifícate en TOGAF 9.1 para ser el Arquitecto que guiará la digitalización en tu empresa..<br /><br />
          <br />
          <img src="img/plantillaTOGALEANDINgpage-02.jpg" alt="" width="auto" height="auto">
        </p>
      </div>

      <div class="col-lg-5">
        <form id="form_input" class="form-join wow fadeIn" method="POST" action="">
          <img src="img/logo.jpg" alt="" width="auto" height="auto">
          <h4 style="color: #FFA643;">Inscríbete para más información</h4>
          <div class="form-group mb-0">
            <input type="text" placeholder="Nombre" name="nombre" id="nombre">
          </div>
          <div class="form-group mb-0">
            <input type="text" placeholder="Apellido" name="apellido" id="apellido">
          </div>
          <div class="form-group mb-0">
            <input type="text" placeholder="Empresa" name="empresa" id="empresa">
          </div>
          <div class="form-group mb-0">
            <input type="text" placeholder="Cargo" name="cargo" id="cargo">
          </div>
          <div class="form-group mb-0">
            <input type="text" placeholder="Correo" name="correo" id="correo">
          </div>
          <div class="form-group mb-0">
            <input type="text" placeholder="Telefono" name="telefono" id="telefono">
          </div>
            <div class="contact-message"></div>
          <input name="enviar-btn" type="submit"  style="background: #FFA643;color: white;"value="Enviar Información" id="btsubmit" class="btn btn-theme btn-block" onclick="javascript:EnviarFormulario();" />
        </form>

      </div> <!-- END col-lg-5-->


    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END intro-hero-->

<section id="features">
  <div class="container">
   <div class="row mb-lg-4">
     <div class="col-sm-12 text-center">
       <img src="img/cursosmodulos_Mesadetrabajo_togaf.jpg" />
     </div>
   </div> <!-- END row-->
   <br />
    <div class="row">
      <div class="col-sm-12 text-center">
        <img src="img/calendariodux.jpg" />
      </div>

    </div> <!-- END row-->
  </div> <!-- END container-->
</section> <!-- END features-->

    </div> <!-- END row-->
  </div> <!-- END container-->
  <footer>
</footer>
 <script>
 function resetear(){
   document.forms['form_input'].reset();
 }
   function redireccionar(pagina)
   {
   location.href=pagina
   }
 function EnviarFormulario(){
   event.preventDefault();
   event.stopImmediatePropagation();
   var source   = '<?php echo $source;?>';
   var medium   = '<?php echo $medium;?>';
   var campaign = '<?php echo $campaign;?>';
   var term     = '<?php echo $term;?>';
   var content  = '<?php echo $content;?>';
   var nombre   = document.getElementById("nombre").value;
   var apellido = document.getElementById("apellido").value;
   var empresa  = document.getElementById("empresa").value;
   var cargo    = document.getElementById("cargo").value;
   var correo   = document.getElementById("correo").value;
   var telefono = document.getElementById("telefono").value;
   var pagina   = 'gracias_toar.php';
   if (nombre === "") {
       $(".contact-message").stop(true).html('<i class="fa fa-warning"></i> Nombre no puede estar vacio.').css("color", "#ef4b4b");
   } else if(apellido === "") {
       $(".contact-message").stop(true).html('<i class="fa fa-warning"></i> Apellido es un campo requerido.').css("color", "#ef4b4b");
   } else if(empresa === "") {
       $(".contact-message").stop(true).html('<i class="fa fa-warning"></i> Empresa es un campo requerido.').css("color", "#ef4b4b");
   } else if (correo === "") {
       $(".contact-message").stop(true).html('<i class="fa fa-warning"></i> Correo es un campo requerido.').css("color", "#ef4b4b");
   } else if (telefono === "") {
       $(".contact-message").stop(true).html('<i class="fa fa-warning"></i> Cual es su numero de telefono ?').css("color", "#ef4b4b");
   }else{
             $.ajax({
                 url: 'procesa_registro.php',
                 type: 'POST',
                 data: 'tipo=togaf&source='+source+'&medium='+medium+'&campaign='+campaign+'&term='+term+'&content='+content+'&nombre='+nombre+'&apellido='+apellido+'&empresa='+empresa+'&cargo='+cargo+'&correo='+correo+'&telefono='+telefono,
                 success: function(resp){
                     if(resp !=1){
                         $(".contact-message").html('<i class="fa fa-check"></i> Gracias por enviar su Información!').css("color", "#72c02c");
                          resetear();
                          redireccionar(pagina);
                     }else{
                          $(".contact-message").html('<i class="fa fa-warning"></i><strong>Alerta!</strong> Ocurrio un error no se pudo enviar su Informacion...!').css("color", "#ef4b4b");
                          //resetear();
                     }

                 }
                 });
          }
   }


 </script>
  <script src="assets/js/bundle.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?&key=AIzaSyB0uuKeEkPfAo7EUINYPQs3bzXn7AabgJI"></script>
</body>
</html>
