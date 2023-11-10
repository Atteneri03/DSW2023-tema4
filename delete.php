<?php
@$link = new mysqli("localhost","root","","pruebas");

$error = $link->connect_errno;

if ($error == null) {
  echo "<p>Conexion establecida</p>";
  $sql = "DELETE FROM clients WHERE birthday < '1955-01-01';";
  $result = $link->query($sql);
  if($result){
    echo "<p>Se han borrado $link->affected_rows registros</p>";
  } else {
    echo "<p>Se produjo un error al hacer la consulta </p>";
  }
} else {
  echo "<p>Hay un error chungo: $link->connect_error</p>";
}

$results->free();
$link->close();