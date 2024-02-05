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
        <h2>Datos de la Cita</h2> 
   <?php
        include("../Modelo/conexionBD.php");
        $idc=$_REQUEST['idCita'];
        $cita = $conn->query("SELECT citFecha,citHora,citPaciente,citMedico,citConsultorio,citEstado,citObservaciones  FROM citas WHERE citas.idCita= '".$idc."' ");
        $cita1 = $cita->fetch_assoc();

        $idp=$conn->query("SELECT * FROM pacientes WHERE idPaciente = ". $cita1["citPaciente"]." ");
        $idp1=$idp->fetch_assoc();
        
        $idm=$conn->query("SELECT * FROM medicos WHERE idMedico = ". $cita1["citMedico"]." ");
        $idm1=$idm->fetch_assoc();
               
        $idcon=$conn->query("SELECT * FROM consultorios WHERE idConsultorio = ". $cita1["citConsultorio"]." ");
        $idcon1=$idcon->fetch_assoc();
    
        echo "Id Cita:  $idc </br>";
        echo "Fecha: ". $cita1["citFecha"]."</br>";
        echo "Hora: ". $cita1["citHora"]."</br>";
        echo "Documento: ".$idp1["pacIdentificacion"]."</br>";
        echo "Paciente: ".$idp1["pacNombres"]." ".$idp1["pacApellidos"]."</br>";
        echo "Medico: ".$idm1["medNombres"]." ".$idm1["medApellidos"]."</br>";
        echo "Consultorio: ".$idcon1["conNombre"]."</br>";
        echo "Estado de la cita: ". $cita1["citEstado"]."</br>";
        echo "Observaciones: ". $cita1["citObservaciones"]."</br>";

		$conn->close();
     	 ?>  
      </div>

		<!--formulario de atualizacio-->
     	<div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
     	<h2>Formulario de actualización</h2>
		<form role="form" action="actualizarCitaBD.php" method=post>

			<div class="form-group">
			<label for="idCita" class="col-sm-2 control-label">Id de la cita:</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="idCita" value="" id="$idc">
			</div>
			</div>

			<div class="form-group">
			<label for="start">Nueva Fecha de la cita:</label>
			<div class="col-sm-10">
			<input type="date" id="start" name="citFecha"
       		value="" min="2022-10-01" max="2022-12-31">
			</div>
			</div>

			<div class="form-group">
			<label for="start">Nueva Hora de la cita:</label>
			<div class="col-sm-10">
			<input type="time" name="citHora" value="07:00" max="17:30" min="07:00" step="60">
			</div>
			</div>

			<div class="form-group">
			<label for="citMedico" class="col-sm-2 control-label">Nuevo Id médico:</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="citMedico" id="citMedico">
			</div>
			</div>

			<div class="form-group">
			<label for="citConsultorio" class="col-sm-2 control-label">Nuevo Id consultorio:</label>
			<div class="col-sm-10">
			<input type="text" class="form-control" name="citConsultorio" id="citConsultorio">
			</div>
			</div>

			<div class="form-group">
			<label for="opciones">Estado cita:</label>
			<div class="radio">
      		<label><input type="radio" name="citEstado" id="opciones_1" value="Asignada" checked>Asignada</label>
			</div>
			<div class="radio">
 			<label><input type="radio" name="citEstado" id="opciones_2" value="Atendida">Atendida</label>
			</div>
			</div>

			<div class="form-group">
			<label for="citObservaciones">Observaciones:</label>
			<textarea class="mb-2 form-control" name="citObservaciones" id="citObservaciones" rows="3"></textarea>
			</div>

			<div class="form-group">
			<button type="submit" class="mb-2 btn btn-sucess">Enviar</button>
			</div>

		</form>
		</div>

	<!--médicos y consultorios disponibles-->
	 <div class="col-sm-4 text-center"  style="background-color:#808080">
	 <h2>Médicos y consultorios disponibles</h2> 	
       <?php
       include("../Modelo/conexionBD.php");
       	$arreglo=array("Id Medico","Nombres","Apellidos");
      	$nMedicos=$conn->query("SELECT * FROM medicos");
		$n=$nMedicos->num_rows;
				
		echo "<table border='4' style='width:70%' bordercolor='#008000'>";
        echo "<tr>";
        echo "<th align='center' border='4'>" . $arreglo[0] ."</th> <th align='center' border='4'>" . $arreglo[1] ."</th>";
        echo "<th align='center' border='4'>" . $arreglo[2] ."</th></tr>"; 
             
        for ($i = 1; $i <=$n; $i++) 
            {
            	$resultado = $conn->query("SELECT idMedico,medNombres,medApellidos FROM medicos WHERE medicos.idMedico = '".$i."'");
				$registro = $resultado->fetch_assoc();
                echo "<tr>";
                echo "<td>". $registro["idMedico"]."</td><td>". $registro["medNombres"]."</td><td>". $registro["medApellidos"]."</td>";
                echo "</tr>";
            
            }   
            echo "</table><br/>";
            

        $arreglo1=array("Id Consultorio","Nombre");
      	$nConsultorios=$conn->query("SELECT * FROM consultorios");
				$m=$nConsultorios->num_rows;

				
				echo "<table border='4' style='width:70%' bordercolor='#008000'>";
        echo "<tr>";
        echo "<th align='center' border='4'>" . $arreglo1[0] ."</th> <th align='center' border='4'>" . $arreglo1[1] ."</th>";
                     
         for ($i = 1; $i <=$m; $i++) 
            {
                 	$resultado1 = $conn->query("SELECT idConsultorio,conNombre FROM consultorios WHERE consultorios.idConsultorio = '".$i."'");
									$registro1 = $resultado1->fetch_assoc();
                  echo "<tr>";
                  echo "<td>". $registro1["idConsultorio"]."</td><td>". $registro1["conNombre"]."</td>";
                  echo "</tr>";
            
            }   
             echo "</table>";
		?>
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