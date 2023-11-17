<?php

require "connectionMongo.php";

$clients = $db->clients->find();

$updateResult = $db->clients->updateMany(
  ["ciclo" => "DAW"],
  ['$set' => ["ciclo" => "DAM"]]
);
echo "Actualizado";