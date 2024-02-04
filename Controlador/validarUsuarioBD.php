
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Validar Usuario</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><!--linea de estilo-->
</head>
<body background="Vista/img/fondo_nat.jpg">
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
    <div class="row">
      <div class="col-sm-4"  style="background-color:#808080">
        <h1>Validar Usuario</h1> 
      </div>
     <div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
      	
      	<?php
		
		 include("../Modelo/conexionBD.php");

		$login=$_POST['usuLogin'];
		$password=$_POST['usuPassword'];
		$hay=$conn->query("SELECT usuLogin,usuPassword FROM usuarios Where usuLogin='$login' AND usuPassword='$password'");
		$si_hay=$hay->num_rows;

		if($si_hay==1){
			
			echo '<script>alert("Usuari@ autorizad@...Bienvenid@")</script>';
			header("location:../Vista/sistema.php");
		}else{
			echo '<script>alert("Usuari@ no encontrad@")</script>';
			header("location:../Controlador/validarUsuarioFormu.php");
		};
		
			$conn->close();
		?>

	</div>
     <div class="col-sm-4 text-center"  style="background-color:#808080">
       <img src="img/recepcionista.jpg" alt="recepcionista" style="width:150px; height:150px;">
     </div>
    </div>
    <hr>
    <div class="row justify-content-center">
      <div  class="col-sm-4" style="background-color:#98FB98">
        <h3 align="center">Volver al Sitio Web</h3>
        <div class="col text-center">	
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="../Vista/index.php">Inicio</a></button>
    	</div>
	  </div>
    </div>    
	   
</div> 
</body>
</html>



		