<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
include "db.php";

$id = (int) $_POST['id'];

$stmt = $db->prepare("SELECT full_name, mother_name, address, phone, age, maths, english, biology, chemistry, physics, discipline, health FROM students WHERE ID = ?");
$stmt->execute([$id]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);

// echo json_encode([
// 'result' => $result
// ]);