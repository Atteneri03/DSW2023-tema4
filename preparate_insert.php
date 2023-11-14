<?php
$newClientsString = '[{
  "first_name": "Miguelita",
  "birthday": "2023-05-06",
  "cars": 7,
  "vip": false
}, {
  "first_name": "Bertha",
  "birthday": "2022-12-05",
  "cars": 10,
  "vip": false
}, {
  "first_name": "Shaylyn",
  "birthday": "2023-01-11",
  "cars": 1,
  "vip": true
}, {
  "first_name": "Frasier",
  "birthday": "2023-05-23",
  "cars": 4,
  "vip": true
}, {
  "first_name": "Mylo",
  "birthday": "2022-12-29",
  "cars": 4,
  "vip": false
}, {
  "first_name": "Danika",
  "birthday": "2023-05-21",
  "cars": 10,
  "vip": false
}, {
  "first_name": "Corri",
  "birthday": "2023-05-02",
  "cars": 8,
  "vip": true
}, {
  "first_name": "Piper",
  "birthday": "2023-03-17",
  "cars": 9,
  "vip": false
}, {
  "first_name": "Nollie",
  "birthday": "2023-05-06",
  "cars": 3,
  "vip": true
}, {
  "first_name": "Joel",
  "birthday": "2023-04-25",
  "cars": 7,
  "vip": true
}, {
  "first_name": "Felicity",
  "birthday": "2022-12-07",
  "cars": 8,
  "vip": false
}, {
  "first_name": "Sergei",
  "birthday": "2022-12-04",
  "cars": 4,
  "vip": false
}, {
  "first_name": "Foss",
  "birthday": "2022-12-18",
  "cars": 10,
  "vip": true
}, {
  "first_name": "Ofelia",
  "birthday": "2023-05-29",
  "cars": 6,
  "vip": true
}, {
  "first_name": "Gill",
  "birthday": "2023-08-21",
  "cars": 8,
  "vip": true
}, {
  "first_name": "Monte",
  "birthday": "2023-08-23",
  "cars": 2,
  "vip": true
}, {
  "first_name": "Orran",
  "birthday": "2022-12-06",
  "cars": 8,
  "vip": false
}, {
  "first_name": "Edgardo",
  "birthday": "2022-11-17",
  "cars": 4,
  "vip": false
}, {
  "first_name": "Ashlan",
  "birthday": "2023-02-02",
  "cars": 3,
  "vip": false
}, {
  "first_name": "Jacintha",
  "birthday": "2023-09-13",
  "cars": 9,
  "vip": false
}]';

$newClients = json_decode($newClientsString);

require "conection.php";
$stmt = $link->stmt_init();

//No meter estas dos lineas dentro del for
$stmt->prepare("INSERT INTO clients (first_name, birthday, cars, vip) VALUES (?,?,?,?)");

$stmt->bind_param("ssis", $name, $birthday, $cars, $vip); //s = string i = int

foreach ($newClients as $client) {
  $name = $client->first_name;
  $birthday= $client->birthday;
  $cars = $client->cars;
  $vip = $client->vip;
  $stmt->execute();
}

echo "Insertado";

$stmt->close();
$link->close();