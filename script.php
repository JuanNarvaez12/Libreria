<?php
    
    $Nombre = $_POST['Nombre'];
    $Correo = $_POST['Correo'];
    $Password = $_POST['Clave'];
    $con = mysqli_connect('localhost','root','','libreria');
    
//mysqli_select_db('libreria', $con)
//mysqli_query(con, "INSERT INTO formulario (Nombre,Correo,Clave) VALUES ('$Nombre','$Correo','$Password')");
//mysqli_select_db($con);
    $sql ="INSERT INTO  formulario (Nombre,Correo,Clave) VALUES ('$Nombre','$Correo','$Password')";
    $resultado =mysqli_query($con,$sql);
    if ($resultado) {
        
        header("location: libreria.html");
    } else {
        echo "Error al insertar el registro: " . mysqli_error($con);
    }
    
?>



