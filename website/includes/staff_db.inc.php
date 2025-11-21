<?php 
require $localizer . 'config/bootstrap.php';

$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$db   = $_ENV['DB_NAME'];

// Connessione
$conn = new mysqli($host, $user, $pass, $db);

// Controllo errori
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

function getStaffData($conn, $nome, $cognome) {
    $sql = "SELECT Nome, Cognome, Mail, Telefono FROM staff_data WHERE Nome = ? AND Cognome = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $nome, $cognome);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $data = null;
    if ($result->num_rows == 1) {
        $data = $result->fetch_assoc(); // Restituisce un array associativo
    } else {
        return null; // Nessun risultato
    }
    
    $stmt->close();
    return $data;
}

$staff = getStaffData($conn, $nome, $cognome);

$email = "";
$telefono = "";

if ($staff) {
    $email = $staff["Mail"];
    $telefono = $staff["Telefono"];
} else {
    echo "Nessun risultato trovato.";
}

$conn->close();
?>