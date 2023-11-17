<?php

require "connectionMongo.php";

$res = $db->clients->insertOne([
  "nombre" => "Andrés",
  "ciclo" => "DAW",
  "edad" => 19
]);

echo "Id del ultimo registro: {$res->getInsertedId()} <br>";

$res = $db->clients->insertMany([
  ["nombre" => "Marta", "ciclo" => "ASIR", "edad" => 22],
  ["nombre" => "Pepe", "ciclo" => "ASIR", "edad" => 24],
  ["nombre" => "Julia", "ciclo" => "DAW", "edad" => 21],

]);

echo "Documentos insertadoso: {$res->getInsertedCount()} <br>";
print_r($res->getInsertedIds());
