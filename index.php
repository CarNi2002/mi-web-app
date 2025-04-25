<?php
// Conexión a la base de datos
$servername = "adbmql.mysql.database.azure.com";
$username = "Carlos_DB";
$password = "@Tatiana6adbsql";
$dbname = "adbmql";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta de prueba
$sql = "SELECT NOW() AS fecha";
$result = $conn->query($sql);

$fecha = "";
if ($result->num_rows > 0) {
    // Obtener el valor de la consulta
    $row = $result->fetch_assoc();
    $fecha = $row["fecha"];
} else {
    $fecha = "No se pudo obtener la fecha.";
}

// Cerrar conexión
$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Web App</title>
</head>
<body>
    <h1>¡Hola desde Azure Web App!</h1>
    <p>La fecha y hora obtenida desde la base de datos es: <?php echo $fecha; ?></p>
</body>
</html>
