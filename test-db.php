
<?php
$servername = getenv('DB_HOST');  // Obtener desde las variables de entorno
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// Crea conexión
$conn = new mysqli($servername, $username, $password, $dbname, 3306);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta de prueba
$sql = "SELECT NOW() AS fecha";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Salida de cada fila
    while($row = $result->fetch_assoc()) {
        echo "Fecha y hora actual desde MySQL: " . $row["fecha"];
    }
} else {
    echo "0 resultados";
}

$conn->close();
?>
