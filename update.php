<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
include "db.php";

$id = (int) $_POST['id'];
$name = $_POST['full_name'];
$mother =  $_POST['mother_name'];
$address =  $_POST['address'];
$phone =  $_POST['phone'];
$age =  $_POST['age'];
$maths =  $_POST['maths'];
$english =  $_POST['english'];
$biology =  $_POST['biology'];
$chemistry =  $_POST['chemistry'];
$physics =  $_POST['physics'];
$discipline =  $_POST['discipline'];
$health =  $_POST['health'];

$stmt = $db->prepare("UPDATE students SET full_name = ?, mother_name = ?, address = ?, phone = ?, age = ?, maths = ?, english = ?, biology = ?, chemistry = ?, physics = ?, discipline = ?, health = ? WHERE id = ?");
$result =  $stmt->execute([$name, $mother, $address, $phone, $age, $maths, $english, $biology, $chemistry, $physics, $discipline, $health, $id]);

echo json_encode([
'success' => $result
]);