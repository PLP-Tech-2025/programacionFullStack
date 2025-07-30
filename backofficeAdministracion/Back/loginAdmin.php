<?php
session_start();
require_once 'config.php'; // asegúrate de que $conn esté definido aquí

$usr_email = $_POST['usr_email_login'];
$usr_pass = $_POST['usr_pass_login'];

$query = "SELECT usr_id, usr_email, usr_pass 
          FROM usuario 
          WHERE usr_email = '$usr_email' 
          AND usr_estado='aceptado'";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);

    if ($usr_pass === $usuario['usr_pass']) {
        $_SESSION['usr_id'] = $usuario['usr_id'];
        echo "Login exitoso";
        header("Location: ../Front/pages/backoffice.php");
        exit();
    } else {
        header("Location: ../Front/index.html");
    }
} else {
    echo "Usuario no encontrado o no aceptado";
}
?>