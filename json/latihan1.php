<?php 

// [
// $mahasiswa = [
//     "nama" => "Alysa yuandra Pratiwi",
//     "nrp" => "173040053",
//     "email" => "alysayuandra2110@gmail.com"
//     ],
//              [
//     "nama" => "Dimas Abdillah",
//     "nrp" => "173040055",
//     "email" => "dimas@gmail.com"
//     ]
// ]; 

$dbh = new PDO('mysql:host=localhost;dbname:api', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);


$data = json_encode($mahasiswa);
echo $data;




?>