<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVISAB Admin | Dashboard</title>
    <link rel="stylesheet" href="../../Assets/css/styles.css">
</head>

<body>
    <aside>
        <img src="../../Assets/img/cooperativas-vector-logo.png" alt="">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Socios</a></li>
            <li><a href="#">Unidades Habitacionales</a></li>
            <li><a href="#">Pagos</a></li>
            <li><a href="#">Horas de Trabajo</a></li>
            <li><a href="#">Reuniones</a></li>
            <li><a href="#">Configuracion</a></li>
            <li><a href="#">Cerrar Sesion</a></li>
        </ul>
    </aside>

    <div>
        <header>
            <nav>
                <p>Bienvenido, Admin</p>
                <img src="../../Assets/img/perfilDefault.jpg" alt="Foto de perfil">
            </nav>
        </header>

        <h1>Panel de Administración</h1>
        <section id="informacionGeneral">
            <article>
                <h3>Cantidad de Solicitudes</h3>
                <h2>
                    <?php
                    require_once '../../Back/config.php';

                    $queryTotalSolicitudes = "	select COUNT(usr_id) as total from usuario u where u.usr_estado='pendiente';";
                    $resultTotalSolicitudes = mysqli_query($conn, $queryTotalSolicitudes);

                    if ($resultTotalSolicitudes) {
                        $row = mysqli_fetch_assoc($resultTotalSolicitudes);
                        echo $row['total'];
                    } else {
                        echo "Error en el conteo";
                    }
                    ?>
                </h2>
            </article>

            <article>
                <h3>Total Socios</h3>
                <h2><?php
                require_once '../../Back/config.php';

                $queryTotalSolicitudes = "	select COUNT(usr_id) as total from socio;";
                $resultTotalSolicitudes = mysqli_query($conn, $queryTotalSolicitudes);

                if ($resultTotalSolicitudes) {
                    $row = mysqli_fetch_assoc($resultTotalSolicitudes);
                    echo $row['total'];
                } else {
                    echo "Error en el conteo";
                }
                ?></h2>
            </article>

            <article>
                <h3>Unidades Habitacionales</h3>
                <h2><?php
                require_once '../../Back/config.php';

                $queryTotalSolicitudes = "	select COUNT(uni_id) as total from unidadHabitacional;";
                $resultTotalSolicitudes = mysqli_query($conn, $queryTotalSolicitudes);

                if ($resultTotalSolicitudes) {
                    $row = mysqli_fetch_assoc($resultTotalSolicitudes);
                    echo $row['total'];
                } else {
                    echo "Error en el conteo";
                }
                ?></h2>
            </article>

        </section>

        <h2>Solicitudes de Registro</h2>
        <div id="solicitudesRegistro"></div>

        <table class="tablaSolicitudes">
            <thead>
                <tr>
                    <th>Fecha Solicitud</th>
                    <th>CI</th>
                    <th>Nombre Completo</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once '../../Back/config.php';

                $query = "select usr_id, usr_ci, usr_nombre, usr_apellido, usr_email, usr_tel, usr_fechaSolicitud from usuario where usr_estado='pendiente';";
                $result = mysqli_query($conn, $query);
                $usuarios = [];
                while ($usuario = mysqli_fetch_assoc($result)) {
                    $usuarios[] = $usuario;
                }

                foreach ($usuarios as $usuario) {
                    ?>
                    <tr>
                        <td><?php echo $usuario['usr_fechaSolicitud'] ?></td>
                        <td><?php echo $usuario['usr_ci'] ?></td>
                        <td><?php echo $usuario['usr_nombre'] . ' ' . $usuario['usr_apellido'] ?></td>
                        <td><?php echo $usuario['usr_email'] ?></td>
                        <td><?php echo $usuario['usr_tel'] ?></td>
                        <td>
                            <div class="botonesAcciones">
                                <form action="../../Back/aceptar.php" method="POST">
                                    <input type="hidden" name="idUsuarioEspecifico"
                                        value="<?php echo $usuario['usr_id']; ?>">
                                    <button type="submit" class="btnAceptar"><span><img src="../../Assets/img/tick.svg"
                                                alt="Aceptar" width="20px" height="20px"></span></button>
                                </form>


                                <form action="../../Back/rechazar.php" method="POST">
                                    <input type="hidden" name="idUsuarioEspecifico"
                                        value="<?php echo $usuario['usr_id']; ?>">
                                    <button type="submit" class="btnRechazar"><span><img src="../../Assets/img/cruz.svg"
                                                alt="Rechazar" width="20px" height="20px"></span></button>
                                </form>

                            </div>
                        </td>
                    </tr>

                    <?php
                }
                ?>
            </tbody>
        </table>

    </div>
</body>

</html>