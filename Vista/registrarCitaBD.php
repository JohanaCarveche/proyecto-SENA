
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrar Cita</title>
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
        <h1>Registrar Cita</h1> 
      </div>
        <div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">

<?php
      include("../Modelo/conexionBD.php");

        $documento=$_POST['pacIdentificacion'];
        $fecha=$_POST['citFecha'];
        $hora=$_POST['citHora'];
        $medico=$_POST['citMedico'];
        $consultorio=$_POST['citConsultorio'];
        $estado=$_POST['citEstado'];
        $observaciones=$_POST['citObservaciones'];

        $paciente=($conn->query("SELECT * FROM pacientes WHERE pacientes.pacIdentificacion = '".$documento."'")->fetch_object());
        $id=$paciente->idPaciente;
             
      
   if( $resultado = $conn->query("INSERT INTO citas(citFecha,citHora,citPaciente,citMedico,citConsultorio,citEstado,citObservaciones) VALUES ('".$fecha."','".$hora."','".$id."','".$medico."','".$consultorio."','".$estado."','".$observaciones."')")=== TRUE ) {
      echo '<script>alert("cita registrada con éxito")</script>';
         } else {
          echo "Hubo un error ..." ;
          };

        ?>
    <?php
    $nombres=($conn->query("SELECT * FROM pacientes WHERE pacientes.pacIdentificacion = '".$documento."'")->fetch_object())->pacNombres;
    $apellidos=($conn->query("SELECT * FROM pacientes WHERE pacientes.pacIdentificacion = '".$documento."'")->fetch_object())->pacApellidos;
    $nmedico=($conn->query("SELECT * FROM medicos WHERE medicos.idMedico = '".$medico."'")->fetch_object())->medNombres;
    $amedico=($conn->query("SELECT * FROM medicos WHERE medicos.idMedico = '".$medico."'")->fetch_object())->medApellidos;
    $nconsultorio=($conn->query("SELECT * FROM consultorios WHERE consultorios.idConsultorio = '".$consultorio."'")->fetch_object())->conNombre;
    print("Cita asignada:</br>documento: $documento</br>Nombres: $nombres</br>Apellidos: $apellidos</br>Fecha: $fecha</br>
      Hora: $hora</br>Médico: $nmedico $amedico</br>Consultorio: $nconsultorio</br>Estado: $estado</br>Observaciones: $observaciones");

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
