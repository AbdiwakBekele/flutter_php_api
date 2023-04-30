<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
include "db.php";

$parent_email =  $_POST['email'];
$parent_password =  md5($_POST['password']);

$stmt = $db->prepare("SELECT parent_id, parent_fullname FROM parent WHERE parent_email = '$parent_email' AND parent_password = '$parent_password' ");
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

echo json_encode($result);

// echo json_encode([
// 'result' => $result
// ]);