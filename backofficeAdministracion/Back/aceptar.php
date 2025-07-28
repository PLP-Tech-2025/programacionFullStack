<?php
require_once 'config.php';

$idUsuarioEspecifico = $_POST['idUsuarioEspecifico'];
$query = "UPDATE usuario SET usr_estado = 'aceptado' WHERE usr_id = '$idUsuarioEspecifico'";
$result = mysqli_query($conn, $query);

if ($result) {
    $querySocio = "INSERT INTO socio (usr_id, soc_fechaRegistro) VALUES ('$idUsuarioEspecifico', NOW())";
    $resultSocio = mysqli_query($conn, $querySocio);

    if (!$resultSocio) {
        error_log("Error al insertar en socio: " . mysqli_error($conn));
    }
} else {
    error_log("Error al actualizar usuario: " . mysqli_error($conn));
}

header('location: ../Front/pages/backoffice.php');
?>