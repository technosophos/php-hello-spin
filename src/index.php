<?php
header("Content-Type: application/json");

$name = $_GET["name"];

if (empty($name)) {
    $name = "Unknown";
}

$data = array(
    "name" => $name,
    "platform" => "PHP",
);


echo json_encode($data);
