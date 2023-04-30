<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
include "db.php";


$name = $_POST['full_name'];
$age =  $_POST['age'];
$address =  $_POST['address'];
$mother =  $_POST['mother_name'];
$phone =  $_POST['phone'];


$stmt = $db->prepare("INSERT INTO students (full_name, mother_name, address, phone, age) VALUES (?, ?, ?,?,?)");
$result = $stmt->execute([$name, $mother, $address, $phone, $age,]);

echo json_encode([
'success' => $result
]);