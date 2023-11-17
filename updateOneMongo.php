<?php

require "connectionMongo.php";

$updateResult = $db->clients->updateOne(
  ["nombre" => "Pepe"],
  ['$set' => ["ciclo" => "DAM", "edad" => 25]]
); 
echo "Actualizado";