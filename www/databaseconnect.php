<?php
$servername = "proyecto-docker_db_1";
$database = "laravelPrueba";
$username = "root";
$password = "12345";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

$resultado = $conn->query("SELECT * FROM alumnos ORDER BY id ASC");
for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
    $resultado->data_seek($num_fila);
    $fila = $resultado->fetch_assoc();
    echo " <br> Nombre = " . $fila['nombre'] . "\n";
}

mysqli_close($conn);
?>