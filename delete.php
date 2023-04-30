<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
include "db.php";

$id = (int) $_POST['id'];
$stmt = $db->prepare("DELETE FROM students WHERE id = ?");
$result = $stmt->execute([$id]);

echo json_encode([
'id' => $id,
'success' => $result
]);