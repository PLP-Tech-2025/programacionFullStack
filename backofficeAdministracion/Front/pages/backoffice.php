<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice Administracion | Dashboard</title>
    <link rel="stylesheet" href="../../Assets/css/styles.css">
</head>

<body>
    <aside>
        <img src="../../Assets/img/cooperativas-vector-logo.png" alt="">
        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Socios</a></li>
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
                <h3>Cantidad de Socios</h3>
                <h2>1000 Socios</h2>
            </article>

            <article>
                <h3>Unidades Habitacionales</h3>
                <h2>438</h2>
            </article>

            <article>
                <h3>Pagos Pendientes</h3>
                <h2>64</h2>
            </article>

        </section>

        <h2>Solicitudes de Registro</h2>
        <div id="solicitudesRegistro"></div>

        <table class="tablaSolicitudes">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre Completo</th>
                    <th>CI</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>San</td>
                    <td>12345</td>
                    <td>san@gmail.com</td>
                    <td>No</td>
                    <td>
                        <button class="btnAceptar"><span><img src="../../Assets/img/tick.svg" alt="Aceptar" width="20px"
                                    height="20px"></span>
                        </button>
                        <button class="btnRechazar"><span><img src="../../Assets/img/cruz.svg" alt="Rechazar"
                                    width="20px" height="20px"></span></button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>