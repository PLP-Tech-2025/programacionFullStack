<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVISAB | Cooperativa</title>
    <link rel="stylesheet" href="../../Assets/css/cooperativa.css">
</head>

<?php
session_start();

if (isset($_SESSION['usr_id'])) {
    $usr_id = $_SESSION['usr_id'];

    require_once '../../Back/API_Usuarios/config.php';
    $query = "SELECT * FROM usuario WHERE usr_id = $usr_id";
    $result = mysqli_query($conn, $query);
    $usuario = mysqli_fetch_assoc($result);
    $_SESSION['usr_nombre'] = $usuario['usr_nombre'];
    $_SESSION['usr_apellido'] = $usuario['usr_apellido'];
    $_SESSION['usr_nac'] = $usuario['usr_nac'];
    $_SESSION['usr_email'] = $usuario['usr_email'];
    $_SESSION['usr_tel'] = $usuario['usr_tel'];
    $_SESSION['usr_img'] = $usuario['imagen'];


} else {
    header("Location: login.php");
}
?>

<body>
    <aside>
        <img src="../../Assets/img/cooperativas-vector-logo.png" alt="">
        <ul>
            <li><a href="cooperativa.php">Dashboard</a></li>
            <li><a href="#">Unidad Habitacional</a></li>
            <li><a href="#">Tareas</a></li>
            <li><a href="#">Pagos</a></li>
            <li><a href="#">Justificantes</a></li>
            <li><a href="perfil.php"">Perfil</a></li>
            <li><a href=" #">Configuracion</a></li>
            <li><a href="#">Cerrar Sesion</a></li>
        </ul>
    </aside>

    <div>
        <header>
            <nav>
                <h1>Panel de Gestion</h1>
                <div class="perfil">
                    <p>Bienvenido, <?php echo $_SESSION['usr_nombre'] . " " . $_SESSION['usr_apellido']; ?></p>
                    <img src="../../Back/API_Usuarios/uploads/<?php echo $_SESSION['usr_img'] ?>." alt="Foto de perfil">
                </div>

            </nav>
        </header>

        <section class="gestionPersonal">
            <article>
                <h3>Unidad Habitacional</h3>
                <h2>Unidad N15</h2>
            </article>
            <article>
                <h3>Horas Tareas Semanales Realizadas</h3>
                <h2>18 Horas</h2>
            </article>
            <article>
                <h3>Pagos Pendientes</h3>
                <h2>1</h2>
            </article>
            <article>
                <h3>Proxima Reunion</h3>
                <h2>3 Agosto</h2>
            </article>
        </section>

        <div class="gestionTablas">
            <h2>Historial de Pagos</h2>

            <table class="tablaInformacion">
                <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Tema</th>
                        <th>Cuota</th>
                        <th>Metodo</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>10/03/2024</td>
                        <td>Cuota Mensual</td>
                        <td>$850</td>
                        <td>Transferencia</td>
                        <td>Pendiente</td>
                        <td>Pagar</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="gestionTablas">
            <h2>Historial de Tareas</h2>

            <table class="tablaInformacion">
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Asignada a</th>
                        <th>Fecha Limite</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Revisión sistema eléctrico</td>
                        <td>Santiago Lopez</td>
                        <td>10/03/2024</td>
                        <td>Pendiente</td>
                        <td>Actualizar</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Footer -->
        <footer id="footer">

            <div class="seccionesFooter">
                <div class="informacionYRedes">
                    <img src="../../Assets/img/cooperativas-vector-logo.png" alt="logoCooperativa" height="60px"
                        width="60px">
                    <p>Más que una cooperativa, una comunidad<span class="espacio">comprometida con el desarrollo de
                            nuestros</span>socios y el bienestar colectivo.</p>
                    <ul>
                        <li><a href="https://facebook.com" target="_blank"><img src="../../Assets/img/logoFacebook.svg"
                                    alt="Facebook" width="30px" height="30px"></a></li>
                        <li><a href="https://instagram.com" target="_blank"><img
                                    src="../../Assets/img/logoInstagram.svg" alt="Instagram" width="30px"
                                    height="30px"></a></li>
                        <li><a href="https://x.com" target="_blank"><img src="../../Assets/img/logoX.svg" alt="X"
                                    width="30px" height="30px"></a></li>
                    </ul>

                </div>
                <div class="enlacesRapidos">
                    <h2>Enlaces</h2>
                    <ul>
                        <li><a href="cooperativa.php">Dashboard</a></li>
                        <li><a href="#">Unidad Habitacional</a></li>
                        <li><a href="#">Tareas</a></li>
                        <li><a href="#">Pagos</a></li>
                        <li><a href="#">Justificantes</a></li>
                        <li><a href="perfil.php">Perfil</a></li>
                        <li><a href="#">Configuracion</a></li>
                        <li><a href="#">Cerrar Sesion</a></li>
                    </ul>
                </div>

                <div class="contactoFooter">
                    <h2>Contacto</h2>
                    <ul>
                        <li><span><img src="../../Assets/img/correo.svg" alt="Correo" width="25px"
                                    height="25px"></span>E-Mail:correo@correo.com</li>
                        <li><span><img src="../../Assets/img/telefono.svg" alt="Telefono" width="25px"
                                    height="25px"></span>Telefono: +598 99 123 456</li>
                        <li><span><img src="../../Assets/img/casa.svg" alt="Local" width="25px"
                                    height="25px"></span>Sucursal:
                            Calle ficticia S86 M95</li>
                    </ul>
                </div>
            </div>
            <div class="derechosReservados">
                <p>PLP Tech 2025 todos los derechos reservados</p>
            </div>

        </footer>
    </div>
</body>

</html>