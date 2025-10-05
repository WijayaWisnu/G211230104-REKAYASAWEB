<?php
function curl($url){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

$send = curl("http://localhost/rekayasaweb/pertemuan2/getwisata.php");

// mengubah json menjadi array
$data = json_decode($send, TRUE);
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Data Wisata</title>
<style>
    body {
        font-family: "Times New Roman", Times, serif;
        padding: 30px;
        background: #fff;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        max-width: 900px;
        margin-top: 20px;
    }
    th, td {
        border: 2px solid #555;
        padding: 14px 18px;
        font-size: 22px;
        text-align: left;
    }
    th {
        font-weight: bold;
        text-transform: uppercase;
    }
</style>
</head>
<body>

<table>
    <tr>
        <th>KOTA</th>
        <th>LANDMARK</th>
        <th>TARIF</th>
    </tr>

<?php
foreach($data as $row){
    echo "<tr>";
    echo "<td>" . htmlspecialchars($row["kota"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["landmark"]) . "</td>";
    echo "<td>" . htmlspecialchars($row["tarif"]) . "</td>";
    echo "</tr>";
}
?>

</table>

</body>
</html>
