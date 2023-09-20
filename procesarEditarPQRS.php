<?php
// Conectar a la base de datos y procesar los cambios
require "conexionBaseDatos.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $tipo = $_POST['tipo'];
    $mensaje = $_POST['mensaje'];
    $nombre = $_POST['nombre'];
    $correo_electronico = $_POST['correo_electronico'];
    // Obtener otros datos del formulario

    // Realizar la actualización en la base de datos
    $conexion = Conectarse();
    $query = "UPDATE pqrs SET tipo = '$tipo', mensaje = '$mensaje', nombre = '$nombre', correo_electronico = '$correo_electronico' WHERE id = '$id'";
    $resultado = $conexion->query($query);

    if ($resultado) {
        header("location: listarPQRS.php?mensaje=Actualización exitosa");
    } else {
        header("location: listarPQRS.php?mensaje=Error al actualizar");
    }
}
?>
