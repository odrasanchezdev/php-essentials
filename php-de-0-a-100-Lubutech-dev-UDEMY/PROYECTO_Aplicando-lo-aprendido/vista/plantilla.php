<?php
 $ruta = Plantilla::ctrRuta();

?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>WoOx Travel Bootstrap 5 Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $ruta."/" ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="<?php echo $ruta."/" ?>assets/css/fontawesome.css">
    <link rel="stylesheet" href="<?php echo $ruta."/" ?>assets/css/templatemo-woox-travel.css">
    <link rel="stylesheet" href="<?php echo $ruta."/" ?>assets/css/owl.css">
    <link rel="stylesheet" href="<?php echo $ruta."/" ?>assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 580 Woox Travel

https://templatemo.com/tm-580-woox-travel

-->

  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <?php include "modulos/banner.php"; ?>
  <!-- ***** Header Area End ***** -->

  <?php 
    if(isset($_GET["pagina"])){
    if($_GET["pagina"] == "about" || $_GET["pagina"] == "deals" || $_GET["pagina"] == "reservation"){
        include "modulos/".$_GET["pagina"].".php";
    } else {
        include "modulos/inicio.php";
    }
  }
  ?>

  <?php include "modulos/footer.php" ?>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo $ruta."/" ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo $ruta."/" ?>vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="<?php echo $ruta."/" ?>assets/js/isotope.min.js"></script>
  <script src="<?php echo $ruta."/" ?>assets/js/owl-carousel.js"></script>
  <script src="<?php echo $ruta."/" ?>assets/js/wow.js"></script>
  <script src="<?php echo $ruta."/" ?>assets/js/tabs.js"></script>
  <script src="<?php echo $ruta."/" ?>assets/js/popup.js"></script>
  <script src="<?php echo $ruta."/" ?>assets/js/custom.js"></script>

  <script>
    function bannerSwitcher() {
      next = $('.sec-1-input').filter(':checked').next('.sec-1-input');
      if (next.length) next.prop('checked', true);
      else $('.sec-1-input').first().prop('checked', true);
    }

    var bannerTimer = setInterval(bannerSwitcher, 5000);

    $('nav .controls label').click(function() {
      clearInterval(bannerTimer);
      bannerTimer = setInterval(bannerSwitcher, 5000)
    });
  </script>

  </body>

</html>