<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recopila los datos del formulario
    $tipo = $_POST["tipo"];
    $mensaje = $_POST["mensaje"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];

    // Realiza la conexión a la base de datos (reemplaza con tus propios datos)
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $basededatos = "healine";

    $conexion = new mysqli($servidor, $usuario, $contrasena, $basededatos);

    // Verifica si la conexión fue exitosa
    if ($conexion->connect_error) {
        die("Error en la conexión a la base de datos: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para insertar el PQRS
    $sql = "INSERT INTO pqrs (tipo, mensaje, nombre, correo_electronico) 
            VALUES ('$tipo', '$mensaje', '$nombre', '$correo')";

    // Ejecuta la consulta
    if ($conexion->query($sql) === TRUE) {
        echo "El PQRS se ha registrado exitosamente.";
        header("location: listarPQRS.php?x=5");
    } else {
        echo "Error al registrar el PQRS: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
}
?>
