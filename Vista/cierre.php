        <?php
         echo '<script>alert("sesión cerrada")</script>';
         ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sitio Web Centro Médico</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!--linea de estilo-->
</head>

<body background="img/fondo_nat.jpg">
<script src="http://code.jquery.com/jquery.js"></script><!--linea de estilo-->
<script src="js/bootstrap.bundle.min.js"></script><!--linea de estilo-->

<div class="container">
<div class="row">
      <div class="p-3 col-sm-1 bg-success">
        <img src="img/logo.jpeg" alt="logo" style="width:100px; height:100px;">
      </div>
      <div class="p-3 col-sm-11 bg-success text-white">
        <h1>Centro Médico Vida Plena</h1>
      </div>
      </div>
       
     <hr>
    <div class="row justify-content-center">
      
        <div  class="col-sm-4" style="background-color:#98FB98">
        <h3 align="center">Ingresar de nuevo al sistema</h3>
        <div class="col text-center">
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="../Controlador/validarUsuarioFormu.php">Ingresar</a></button>
        </div>
        </div>

        <div  class="col-sm-4" style="background-color:#98FB98">
        <h3 align="center">Ir al sitio Web</h3>
        <div class="col text-center">
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="index.php">Ir</a></button>
        </div>
        </div>

    </div>
  </div> 
</body>
</html>
