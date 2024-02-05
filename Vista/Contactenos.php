<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contáctenos</title>
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

    <div class="row">
    	  
      <div class="p-3 mb-2 col-sm-4"  style="background-color:#98FB98">
        <h2><a href="Quienes.php">¿Quienes somos?</a></h2>
      </div>
      <div class="p-3 mb-2 col-sm-4"  style="background-color:#98FB98">
     
       <h2><a href="Servicios.php">Nuestros servicios</a></h2> 
      </div>
      <div class="p-3 mb-2 col-sm-4"  style="background-color:#98FB98">
        <h2><a href="Contactenos.php">Contáctenos</a><h2></h2>
      </div>
    </div>
    <hr>

    <div class="row">
      <div class="col-sm-4"  style="background-color:#808080">
        <h1>Contáctenos</h1> 
      </div>
     	<div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
      	
        <form role="form">

        	<div class="form-group">
				<label for="InputNombresyapellidos">Nombres y apellidos:</label>
				<input type="text" class="form-control" id="InputNombresyapellidos" placeholder="Ingrese su nombre completo">
			</div>

			<div class="form-group">
				<label for="InputTelefono">Número de telefono o celular:</label>
				<input type="text" class="form-control" id="InputTelefono" placeholder="Ingrese su número telefónico">
			</div>

			<div class="form-group">
				<label for="InputEmail">Correo electrónico:</label>
				<input type="text" class="form-control" id="InputEmail" placeholder="e-mail">
			</div>

			<div class="form-group">
				<label for="InputFecha">Fecha:</label>
				<input type="date" class="form-control" id="InputFecha">
			</div>

			<div class="form-group">
				<label for="InputSolicitud">Solicitud:</label>
				<textarea class="mb-2 form-control" id="InputSolicitud" rows="3"></textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="mb-2 btn btn-sucess">Enviar</button>
			</div>

		</form>
	</div>
      <div class="col-sm-4 text-center"  style="background-color:#808080">
        <img src="img/recepcionista.jpg" alt="recepcionista" style="width:150px; height:150px;">
      </div>
    </div>
    <hr>
    <div class="row justify-content-center">
      
       <div  class="col-sm-4" style="background-color:#98FB98">
        <h3 align="center">Volver al inicio</h3>
        <div class="col text-center">
        	
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="index.php">Inicio</a></button>
    </div>
		</div>
    </div>    
	   
</div> 
</body>
</html>