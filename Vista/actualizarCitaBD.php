<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Actualizar Cita</title>
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
       <!--Datos de l cita-->
        <h2>Datos de la Cita actualizada</h2> 
  
      </div>

		<!--datos para modificar la cita-->
     	<div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
     	     	
		<?php
      include("../Modelo/conexionBD.php");

        $id=$_POST['idCita'];
        $fecha=$_POST['citFecha'];
        $hora=$_POST['citHora'];
        $medico=$_POST['citMedico'];
        $consultorio=$_POST['citConsultorio'];
        $estado=$_POST['citEstado'];
        $observaciones=$_POST['citObservaciones'];


        $resultado = $conn->query("UPDATE  citas SET citFecha = '$fecha', citHora = '$hora', citMedico ='$medico' , citConsultorio = '$consultorio', citEstado='$estado', citObservaciones='$observaciones'  WHERE citas.idCita = '".$id."'");
        

        echo '<script>alert("Se actualizó el paciente con éxito")</script>';
        echo "<br/>**************<br/>Cita actualizada: ".$id."</br>"."Fecha: ". $fecha."<br/>"."Hora: ". $hora."<br/>"."Medico:  ". $medico."<br/>"."Consultorio: ". $consultorio."<br/>"."Estado: ". $estado."<br/>"."Observaciones: ". $observaciones."<br/>**************<br/>";
             
      
  // if( $resultado = $conn->query("INSERT INTO citas(citFecha,citHora,citMedico,citConsultorio,citEstado,citObservaciones) VALUES ('".$fecha."','".$hora."','".$medico."','".$consultorio."','".$estado."','".$observaciones."') ")=== TRUE ) {
     // echo '<script>alert("cita registrada con éxito")</script>';
        // } else {
        //  echo "Hubo un error ..." ;
         // };

        ?>
		</div>

	<!--tercera columna vacia-->
	 <div class="col-sm-4 text-center"  style="background-color:#808080">
	 
       
      </div>
	</div>
    </div>
    <hr>
    <div class="row justify-content-center">
      
       <div  class="col-sm-4" style="background-color:#98FB98">
        <h3 align="center">Volver al módulo Citas</h3>
        <div class="col text-center">
        	
        <button class="mb-2 btn btn-success btn-sm"><a class="btn btn-sucess" href="indexCitas.php">volver</a></button>
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