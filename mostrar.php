<?php
$servername = "localhost";
$username = "root"; // Nombre de usuario por defecto
$password = ""; // Cambiarlo si se usa otra contraseña
$dbname = "harvest1";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$sql = "SELECT nombre, correo, telefono, mensaje FROM pedidos ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "No se encontraron datos";
    exit;
}
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos del Formulario</title>
</head>
<body>
    <h1>Datos Recibidos del Formulario</h1>
    <p><strong>Nombre:</strong> <?php echo htmlspecialchars($row['nombre']); ?></p>
    <p><strong>Correo:</strong> <?php echo htmlspecialchars($row['correo']); ?></p>
    <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($row['telefono']); ?></p>
    <p><strong>Mensaje:</strong> <?php echo nl2br(htmlspecialchars($row['mensaje'])); ?></p>
</body>
</html>

