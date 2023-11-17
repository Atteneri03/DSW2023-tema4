<?php

require "connectionMongo.php";

echo "Quedan en la coleccion clients: " . $db->clients->count();
$deleteResult = $db->clients->deleteOne(["nombre" => "Pepe"]); 
echo "<br>Quedan en la coleccion clients: " . $db->clients->count();