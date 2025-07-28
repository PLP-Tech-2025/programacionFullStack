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
            <li><a href="perfil.php">Perfil</a></li>
            <li><a href="#">Configuracion</a></li>
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

        <tbody>
            <tr>
                <td></td>

                <div class="gestionPerfil">
                    <h2>Informacion Personal</h2>

                    <form id="formUpdate">
                        <div class="columnasDobles">
                            <label for="usr_nombre">Nombre:</label>
                            <label for="usr_apellido">Apellido:</label>

                            <input required name="usr_nombre" id="usr_nombre" type="text"
                                pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{2,40}$" title="Ingrese su nombre"
                                value="<?php echo $_SESSION['usr_nombre']; ?>">

                            <input required name="usr_apellido" id="usr_apellido" type="text"
                                pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{2,40}$" title="Ingrese su apellido"
                                value="<?php echo $_SESSION['usr_apellido']; ?>">

                            <label for="usr_tel">Teléfono:</label>
                            <label for="usr_nac">Fecha de Nacimiento:</label>

                            <input required name="usr_tel" id="usr_tel" type="tel" pattern="^\d{9}$"
                                title="Ingrese su número de teléfono" value="<?php echo $_SESSION['usr_tel']; ?>">

                            <input required name="usr_nac" id="usr_nac" type="date"
                                title="Ingrese su fecha de nacimiento" value="<?php echo $_SESSION['usr_nac']; ?>">
                        </div>

                        <label for="usr_email">Correo Electrónico:</label>
                        <input required name="usr_email" id="usr_email" type="email"
                            title="Ingrese su correo electrónico" value="<?php echo $_SESSION['usr_email']; ?>">

                        <button type="submit">Actualizar Información</button>
                    </form>

                </div>

                <!-- <div class="gestionPerfil">
                    <form action="">
                        <label for="usr_pass">Contraseña:</label>
                        <div class="passMostrar">
                            <input required name="usr_pass" id="usr_pass" type="password" placeholder="********"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Debe contener al menos 8 caracteres, una letra mayúscula, una minúscula y un número">
                            <button type="button" id="mostrarPass">
                                <span><img id="iconoOjoPass" src="../../Assets/img/ojoCerrado.svg" alt="Ojo cerrado"
                                        width="20px" height="20px"></span>
                            </button>
                        </div>

                        <label for="usr_passVer">Confirmcion de Contraseña:</label>
                        <div class="passMostrar">
                            <input required name="usr_passVer" id="usr_passVer" type="password" placeholder="********"
                                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                                title="Debe contener al menos 8 caracteres, una letra mayúscula, una minúscula y un número">
                            <button type="button" id="mostrarPassVer">
                                <span><img id="iconoOjoPassVer" src="../../Assets/img/ojoCerrado.svg" alt="Ojo cerrado"
                                        width="20px" height="20px"></span>
                            </button>
                        </div>
                    </form>


                </div> -->


                <!-- Footer -->
                <footer id="footer">

                    <div class="seccionesFooter">
                        <div class="informacionYRedes">
                            <img src="../../Assets/img/cooperativas-vector-logo.png" alt="logoCooperativa" height="60px"
                                width="60px">
                            <p>Más que una cooperativa, una comunidad<span class="espacio">comprometida con el
                                    desarrollo de
                                    nuestros</span>socios y el bienestar colectivo.</p>
                            <ul>
                                <li><a href="https://facebook.com" target="_blank"><img
                                            src="../../Assets/img/logoFacebook.svg" alt="Facebook" width="30px"
                                            height="30px"></a></li>
                                <li><a href="https://instagram.com" target="_blank"><img
                                            src="../../Assets/img/logoInstagram.svg" alt="Instagram" width="30px"
                                            height="30px"></a></li>
                                <li><a href="https://x.com" target="_blank"><img src="../../Assets/img/logoX.svg"
                                            alt="X" width="30px" height="30px"></a></li>
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
    <script>
        const usuarioId = <?php echo $_SESSION['usr_id']; ?>;

        document.getElementById('formUpdate').addEventListener('submit', function (e) {
            e.preventDefault();

            const form = e.target;
            const data = {
                usr_nombre: form.usr_nombre.value,
                usr_apellido: form.usr_apellido.value,
                usr_nac: form.usr_nac.value,
                usr_email: form.usr_email.value,
                usr_tel: form.usr_tel.value
            };

            fetch(`http://localhost/programacionFullStack/frontUsuarios/Back/API_Usuarios/api.php/usuarios/${usuarioId}`, {
                method: 'PUT',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(data)
            })
                .then(response => response.json())
                .then(result => {
                    if (result.success) {
                        alert('Perfil actualizado correctamente');
                        location.reload();
                    } else {
                        alert('No se pudo actualizar el perfil');
                    }
                })
                .catch(error => {
                    console.error('Error al actualizar perfil:', error);
                    alert('Error al actualizar perfil');
                });
        });
    </script>

</body>

</html>