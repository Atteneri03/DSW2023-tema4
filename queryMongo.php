<?php

require "connectionMongo.php";

echo "Todos los clientes: ";
echo "<ul>";
$clients = $db->clients->find();
foreach ($clients as $client) {
  echo "<li> $client->nombre ($client->ciclo) de $client->edad años.</li>";

}
echo "</ul>";
