
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrar Médico</title>
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

    <div class="row">
      <div class="col-sm-4"  style="background-color:#808080">
        <h1>Registrar Médico</h1> 
      </div>

     	<div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
      	
        <form role="form" action="registrarMedicoBD.php" method=post>

   

			<div class="form-group">
				<label for="medIdentificacion">Documento:</label>
				<input type="text" class="form-control" name="medIdentificacion" id="medIdentificacion">
			</div>

		
			<div class="form-group">
				<label for="medNombres" class="col-sm-2 control-label">Nombres:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="medNombres" id="medNombres">
					</div>
			</div>

			<div class="form-group">
				<label for="medApellidos" class="col-sm-2 control-label">Apellidos:</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="medApellidos" id="medApellidos">
					</div>
			</div>

			<div class="mb-2 form-group">
				<label for="medEspecialidad">Especialidad:</label>
				<select name="medEspecialidad" id="medEspecialidad">
        <option value="General">General</option>
        <option value="Cirujano">Cirujano</option>
        <option value="Anestesiólogo">Anestesiólogo</option>
        <option value="Pediatra">Pediatra</option>
        <option value="Ortopedista">Ortopedista</option></select>
			</div>

			<div class="form-group">
				<label for="medTelefono">Número de telefono o celular:</label>
				<input type="text" class="form-control" name="medTelefono" id="medTelefono">
			</div>

			<div class="form-group">
				<label for="medCorreo">Correo electrónico:</label>
				<input type="text" class="form-control" name="medCorreo" id="medCorreo" placeholder="e-mail">
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
        <h3 align="center">Volver al módulo médicos</h3>
        <div class="col text-center">
        	
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="indexMedicos.php">volver</a></button>
    </div>
		</div>
		<div  class="col-sm-4" style="background-color:#98FB98">
        <h3 align="center">Salir del sistema</h3>
        <div class="col text-center">
          
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="cierre.php">Cerrar sesión</a></button>

    </div>
    </div>
    </div>    
	   
</div> 
</body>
</html>