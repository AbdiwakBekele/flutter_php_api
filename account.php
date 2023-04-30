<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
include "db.php";

$parent_id = (int) $_POST['id'];
$parent_email = $_POST['email'];
$parent_password =  md5($_POST['password']);

$stmt = $db->prepare("UPDATE parent SET parent_email = ?, parent_password = ? WHERE parent_id = ?");
$result =  $stmt->execute([$parent_email, $parent_password, $parent_id]);

echo json_encode([
'success' => $result
]);