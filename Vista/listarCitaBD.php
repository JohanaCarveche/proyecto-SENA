<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Listar Citas</title>
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
        <h1>Listar Citas</h1> 
      </div>

    <!--centro-->
     	<div class="col-sm-4 text-Justify"  style="background-color:#D3D3D3">
     		<h1>Citas Asignadas</h1> 
      	<?php
      	 include("../Modelo/conexionBD.php");
        $arreglo1=array("Id Cita","Fecha","Hora");
      	$nCitas=$conn->query("SELECT * FROM citas ");
				$n=$nCitas->num_rows;
				
		echo "<table border='4' style='width:70%' bordercolor='#008000'>";
        echo "<tr>";
        echo "<th align='center' border='4'>" . $arreglo1[0] ."</th> <th align='center' border='4'>" . $arreglo1[1] ."</th><th align='center' border='4'>" . $arreglo1[2] ."</th>";
                     
         for ($i = 1; $i <=$n;$i++)
            {
                $resultado1 = $conn->query(" SELECT idCita,citFecha,citHora FROM citas WHERE citEstado = 'Asignada' ");
				$registro1 = $resultado1->fetch_assoc();

                echo "<tr>";
                echo "<td>". $registro1["idCita"]."</td><td>". $registro1["citFecha"]."</td><td>". $registro1["citHora"]."</td>";
                echo "</tr>";
                
            } 
             echo "</table>";
  		 ?>
		</div>
    <!--lado derecho-->
      <div class="col-sm-4 text-center"  style="background-color:#808080">
       <h1>Citas Atendidas</h1> 
      	<?php
      	 include("../Modelo/conexionBD.php");
        $arreglo=array("Id Cita","Fecha","Hora");
      	$mCitas=$conn->query("SELECT * FROM citas");
				$m=$mCitas->num_rows;

				
		echo "<table border='4' style='width:70%' bordercolor='#008000'>";
        echo "<tr>";
        echo "<th align='center' border='4'>" . $arreglo[0] ."</th> <th align='center' border='4'>" . $arreglo[1] ."</th><th align='center' border='4'>" . $arreglo1[2] ."</th>";
                     
         for ($i = 1; $i <=$m; $i++) 
            {
                $resultado = $conn->query("SELECT idCita,citFecha,citHora FROM citas WHERE citas.citEstado='Atendida'");
				$registro = $resultado->fetch_assoc();
                echo "<tr>";
                echo "<td>". $registro["idCita"]."</td><td>". $registro["citFecha"]."</td><td>". $registro["citHora"]."</td>";
                echo "</tr>";
            
            } 
             echo "</table>";
  		 ?>
      </div>
<!--hasta aqui lado derecho-->
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