<!DOCTYPE html>
<html lang="es">
<head>
    <title>MilkShake - Tu Sabor Favorito Hecho Malteada</title>
    <meta charset="UTF-8">
    <!-- Estas son importantes para que los navegadores nos encuentre por palabras claves -->
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Renombramos el archivo .ico para que el servidor lo identifique favicon.ico -->
    <link rel="icon" href="favicon2.ico">
    <!-- Aqui llamamos los estilos tanto del Bootstrap como  propios -->
    <link rel="stylesheet" href="./css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap.css">    
    <link rel="stylesheet" href="./css/base.css">
    <link rel="stylesheet" href="./css/responsiveslides.css">
    <link rel="stylesheet" href="./css/animate.css">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css"/>    
        <!-- Javascripts de Bootstrap y ajenos -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/responsiveslides.min.js"></script>
          <!-- SCROOLL REVEAL JS LIBRARY CDN -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
</style>
</head>
<body class="bg-dark">
<!-- Desarrollo un solo Header y lo incluyo a las demas paginas -->
<?php include("php/header.php"); ?>

<!--prueba-->

<!-- Maps buena -->



<style type="text/css">
    #mapa { height: 500px; }
    </style>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB96QSrb6ZANOckbidlk2C7mEIU6Qe55k4&callback=myMap"></script>
    <script type="text/javascript">
    function initialize() {
      var marcadores = [
        ['Milkshake Laureles', 6.242914, -75.599542],
        ['Milkshake La 70', 6.248790, -75.588231],
        ['MilkShake Belen', 6.230864, -75.602424],
        ['MilkShake Poblado', 6.212245, -75.570188],
        ['MilkShake Bello', 6.341677, -75.541110],
        ['MilkShake Calazans', 6.265268, -75.597414],
        ['MilkShake Caney', 3.382816, -76.520407],
        ['MilkShake La 84', 11.002818, -74.818520],
        ['MilkShake Manizales', 5.057946, -75.486953],
        ['MilkShake Ibague', 4.436490, -75.201618],

      ];
      var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 5,
        center: new google.maps.LatLng(6.252934, -75.575105),
        mapTypeId: google.maps.MapTypeId.ROADMAP
      });
      var infowindow = new google.maps.InfoWindow();
      var marker, i;
      for (i = 0; i < marcadores.length; i++) {  
        marker = new google.maps.Marker({
          position: new google.maps.LatLng(marcadores[i][1], marcadores[i][2]),
          map: map
        });
        google.maps.event.addListener(marker, 'click', (function(marker, i) {
          return function() {
            infowindow.setContent(marcadores[i][0]);
            infowindow.open(map, marker);
          }
        })(marker, i));
      }
    }
    google.maps.event.addDomListener(window, 'load', initialize);


  
    </script>

    <div id="mapa"></div>


    <!--maps cali-->

    



    


                        
<!-- Desarrollo un solo Footer y lo incluyo a las demas paginas -->    
<?php include("php/footer.php"); ?>
</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <!-- SCROOLL REVEAL SCRIPT -->
    <script>
      window.sr = ScrollReveal();

    sr.reveal('.navbar', {
      duration: 2000,
      origin: 'bottom'
    });
    </script> 
    <!--Google Maps-->
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB96QSrb6ZANOckbidlk2C7mEIU6Qe55k4&callback=myMap"></script>
    
  

</html>