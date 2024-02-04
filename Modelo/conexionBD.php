<?php
 $conn = new mysqli("localhost", "root", "", "centro_medico" ) ;
if( $conn->connect_errno) {
echo "Falla al conectarse a la base de datos del centro médico( ". $conn->connect_errno . ") " .
$conn->connect_error ;
} else {
 echo "<br/>";
};
 ?>