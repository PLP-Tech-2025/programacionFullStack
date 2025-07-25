//Agregar dinamicamente con el DOM
document.addEventListener('DOMContentLoaded', () => {
    const boton = document.getElementById('btnInfo');
    const infoContainer = document.getElementById('infoContainer');
    let visible = false;

    boton.addEventListener('click', () => {
        if (!visible) {
            infoContainer.innerHTML = `
                <p>
                    También podés acceder a beneficios adicionales como asesoramiento personalizado, refinanciación y más.
                </p>
            `;
            boton.textContent = 'Mostrar menos';
        } else {
            infoContainer.innerHTML = '';
            boton.textContent = 'Conoce más';
        }
        visible = !visible;
    });
});


//Funcion para mostrar la contrasenia que se esta escribiendo
function mostrarPass(idBoton, idCampo, idIcono) {
    const boton = document.getElementById(idBoton);
    const campo = document.getElementById(idCampo);
    const icono = document.getElementById(idIcono);

    boton.addEventListener('click', function () {
        campo.type = campo.type === 'password' ? 'text' : 'password';
        icono.src = campo.type === 'password' ? '../Assets/img/ojoCerrado.svg' : '../Assets/img/ojoAbiertoo.svg';
    });
}

mostrarPass('mostrarPass', 'usr_pass', 'iconoOjoPass');
mostrarPass('mostrarPassVer', 'usr_passVer', 'iconoOjoPassVer');