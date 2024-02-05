<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Consultar Cita</title>
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
        <h1>Consultar Cita</h1> 
      </div>
        <div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">

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


//$resultado->free();
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
        <h3 align="center">Volver al módulo citas</h3>
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