<?php
$data = array(
    "nama" => "Wisnu Wijaya",
    "umur" => 21,
    "hobi" => array("Membaca", "Coding", "Gaming")
);

$jsonData = json_encode($data);

echo $jsonData;
?>
