<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);

$email = trim($data['email']);
$upassword = trim($data['password']);

require_once "db-config.php";

$stmt = $conn->prepare("SELECT id FROM bloguser WHERE email = ? AND upassword = ?");
$stmt->bind_param("ss", $email, $upassword);
$stmt->execute();
$stmt->store_result();

if ($stmt->num_rows === 1) {
    $_SESSION['blog-user'] = $email;
    echo json_encode(["success" => true, "message" => "Login successful."]);
} else {
    echo json_encode(["success" => false]);
}

$stmt->close();
$conn->close();
?>
