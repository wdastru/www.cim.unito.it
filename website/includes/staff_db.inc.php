<?php 
require SITE_PATH . 'config/bootstrap.php';
$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$db   = $_ENV['DB_NAME'];
// Connessione
$conn = new mysqli($host, $user, $pass, $db);
// Controllo errori
if ($conn->connect_error) { die("Connessione fallita: " . $conn->connect_error);
} function getStaffData($conn, $filters = []) { $sql = "SELECT Nome, Cognome,
Mail, Telefono FROM staff_data WHERE 1=1"; $stmt = $conn->prepare($sql); $params
= []; $types = ""; foreach ($filters as $field => $value) { $sql .= " AND $field
= ?"; $params[] = $value; $types .= "s"; } $stmt = $conn->prepare($sql); if
(!$stmt) { die("Prepare failed: " . $conn->error); } $stmt->bind_param($types,
...$params); $stmt->execute(); $data = $stmt->get_result()->fetch_assoc();
$stmt->close(); return $data; } ?>
