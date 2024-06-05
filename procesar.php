<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);
    $correo = htmlspecialchars($_POST['correo']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $mensaje = htmlspecialchars($_POST['mensaje']);

    // Conexión con la base de datos MySQL
    $servername = "localhost";
    $username = "root"; // Nombre de usuario por defecto
    $password = ""; // Cambiarlo si se usa otra contraseña
    $dbname = "harvest1";

    // Crear conexión
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO pedidos (nombre, correo, telefono, mensaje) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $nombre, $correo, $telefono, $mensaje);

    if ($stmt->execute()) {
        // Enviar correo electrónico
        $to = "angelinatipacti@gmail.com "; // El mail donde llegarán los mensajes
        $subject = "Nuevo mensaje del formulario de contacto"; // Asunto del correo
        $body = "Este mensaje fue enviado por " . $nombre . ",\r\n";
        $body .= "Su e-mail es: " . $correo . ",\r\n";
        $body .= "El teléfono es: " . $telefono . ",\r\n";
        $body .= "Mensaje: " . $mensaje . ",\r\n";
        $body .= "Enviado el " . date('d/m/Y', time());

        // Encabezados del correo
        $headers = "Content-Type: text/plain; charset=utf-8\r\n";

        mail($to, $subject, utf8_decode($body), $headers);

        // Redirigir a la página de éxito
        header('Content-Type: application/json');
        echo json_encode(['success' => true]);
    } else {
        header('Content-Type: application/json');
        echo json_encode(['success' => false]);
    }

    $stmt->close();
    $conn->close();
}
?>

