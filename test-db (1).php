
<?php
$servername = "adbmql.mysql.database.azure.com";
$username = "Carlos_DB";
$password = "@Tatiana6adbsql";
$dbname = "adbmql";

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
