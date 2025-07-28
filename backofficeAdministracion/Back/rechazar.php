<?php
require_once 'config.php';

$idUsuarioEspecifico = $_POST['idUsuarioEspecifico'];
$query = "UPDATE usuario SET usr_estado = 'rechazado' WHERE usr_id = '$idUsuarioEspecifico'";
$result = mysqli_query($conn, $query);

if (!$result) {
    error_log("Error al actualizar usuario: " . mysqli_error($conn));
}

header('location: ../Front/pages/backoffice.php');
?>