<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "root", "", "libreria");

// Verificar la conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener la cadena de búsqueda del formulario
$busqueda = $_POST["busqueda"];

// Consulta SQL para buscar libros en la base de datos
$sql = "SELECT * FROM libros WHERE Titulo LIKE '%$busqueda%'";

$resultado = $conexion->query($sql);

// Mostrar los resultados
if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "Título: " . $fila["Titulo"] . "<br>";
        header("location: https://www.educa.jcyl.es/educacyl/cm/gallery/Recursos%20Infinity/tematicas/webquijote/quijotepdf.html" );
        // Puedes mostrar más información aquí si es necesario
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar la conexión a la base de datos
$conexion->close();
?>
