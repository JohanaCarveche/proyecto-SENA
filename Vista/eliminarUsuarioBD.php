
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Eliminar Usuario</title>
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
        <h1>Eliminar Usuario</h1> 
      </div>
        <div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
		<?php

			include("../Modelo/conexionBD.php");
			$id=$_REQUEST['idUsuario'];
			$login=$_REQUEST['usuLogin'];
		
			print("<br/>**************<br/>El Id borrado es: $id <br/>El  Login borrado es: $login</br>**************<br/>");
			

			if( $resultado = $conn->query("DELETE FROM usuarios WHERE usuarios.idUsuario = '".$id."' ") === TRUE ) {
			echo '<script>alert("Se borró el usuario con éxito")</script>';
					} else {
					echo "Hubo un error ..." ;
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
        <h3 align="center">Volver al módulo usuarios</h3>
        <div class="col text-center">
            
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="indexUsuarios.php">volver</a></button>
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





