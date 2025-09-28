<?php
// JSON String
$jsonString = '{"nama":"Wisnu Wijaya","umur":21,"hobi":["Membaca","Coding","Gaming"]}';

// Decode ke PHP Object
$obj = json_decode($jsonString);

// Decode ke PHP Array (parameter true)
$arr = json_decode($jsonString, true);

// Akses nilai dari PHP Object
echo "Akses dari PHP Object: <br>";
echo "Nama: " . $obj->nama . "<br>";
echo "Umur: " . $obj->umur . "<br>";
echo "Hobi pertama: " . $obj->hobi[2] . "<br><br>";

// Akses nilai dari PHP Array
echo "Akses dari PHP Array: <br>";
echo "Nama: " . $arr["nama"] . "<br>";
echo "Umur: " . $arr["umur"] . "<br>";
echo "Hobi kedua: " . $arr["hobi"][1] . "<br>";
?>
