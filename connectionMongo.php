<?php
require "vendor/autoload.php";

try {
  $link = new MongoDB\Client("mongodb://localhost");
  $db = $link->pruebaDB;
  //operaciones

} catch(Excepion $e){
  print($e);
  die();
}