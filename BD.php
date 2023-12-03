<?php
$titulo = $_POST['Titulo'];
$autor = $_POST['Autor'];
$editorial = $_POST['Editorial'];
/*$paginas = $_POST['Cantidad de paginas'];*/

$con = mysqli_connect('localhost', 'root', '', 'libreria');

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "INSERT INTO registro (Titulo, Autor, Editorial) VALUES ('$titulo', '$autor', '$editorial')";
$resultado = mysqli_query($con, $sql);

if ($resultado) {
    echo "Registro exitoso";
    header("location: libreria.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
