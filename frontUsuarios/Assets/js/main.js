//Funcion para agregar texto dinamicamente con el DOM
function expandirContenido(idBoton, idContenedor, texto) {
    const boton = document.getElementById(idBoton);
    const infoContenedor = document.getElementById(idContenedor);
    let visible = false;

    boton.addEventListener('click', () => {
        if (!visible) {
            infoContenedor.innerHTML = `<p> ${texto} </p>`;
            boton.textContent = 'Mostrar menos';
        } else {
            infoContenedor.innerHTML = '';
            boton.textContent = 'Conoce más';
        }
        visible = !visible;
    });
}

expandirContenido('btnInfoFinanciamiento', 'infoContenedorFinanciamiento', "En nuestra cooperativa entendemos que el acceso al crédito no debe ser un privilegio. Por eso ofrecemos opciones de financiamiento adaptadas a tus necesidades reales. Nuestros préstamos no tienen intereses abusivos ni cláusulas ocultas, y están pensados para acompañarte en tu desarrollo, no para endeudarte. Con plazos flexibles, asesoramiento transparente y condiciones claras, podés cumplir tus metas sin poner en riesgo tu estabilidad económica. Estamos para ayudarte, no para exigirte más de lo justo.");
expandirContenido('btnInfoAcompanimiento', 'infoContenedorAcompaniamiento', "Sabemos que cada persona tiene una historia distinta, y por eso nuestro acompañamiento es completamente personalizado. Desde que te acercás por primera vez, un equipo humano y capacitado te escucha, entiende tus necesidades y te guía paso a paso en el proceso. Ya sea que estés buscando un préstamo, sumarte a un proyecto o entender mejor tus derechos como socio, vas a contar siempre con un trato cercano, empático y profesional. No estás solo: estamos a tu lado para que tomes decisiones seguras y con confianza.");
expandirContenido('btnInfoGanancias', 'infoContenedorGanancias', "En nuestra cooperativa entendemos que el acceso al crédito no debe ser un privilegio. Por eso ofrecemos opciones de financiamiento adaptadas a tus necesidades reales. Nuestros préstamos no tienen intereses abusivos ni cláusulas ocultas, y están pensados para acompañarte en tu desarrollo, no para endeudarte. Con plazos flexibles, asesoramiento transparente y condiciones claras, podés cumplir tus metas sin poner en riesgo tu estabilidad económica. Estamos para ayudarte, no para exigirte más de lo justo.");

//Funcion para expandir preguntas
function expandirPregunta(idBoton, idContenedor, texto) {
    const boton = document.getElementById(idBoton);
    const infoContenedor = document.getElementById(idContenedor);
    let visible = false;

    boton.addEventListener('click', () => {
        if (!visible) {
            infoContenedor.innerHTML = `<p style="padding: 0.8rem; border-top: 2px solid white; margin: 0.2rem 0.6rem;"> ${texto} </p>`;
            boton.textContent = '-';
        } else {
            infoContenedor.innerHTML = '';
            boton.textContent = '+';
        }
        visible = !visible;
    });
}
expandirPregunta('btnPregunta1', 'pregunta1Contenedor', "Una CVAM es una organización sin fines de lucro formada por un grupo de personas que se unen para construir sus viviendas en forma colectiva, aportando trabajo, recursos económicos y tomando decisiones de forma democrática.");
expandirPregunta('btnPregunta2', 'pregunta2Contenedor', "Cualquier persona mayor de edad, residente en el país, que no tenga una vivienda propia y cumpla con los requisitos establecidos por la cooperativa y el MVOT (Ministerio de Vivienda y Ordenamiento Territorial).");
expandirPregunta('btnPregunta3', 'pregunta3Contenedor', "Los socios deben aportar una cuota mensual que cubre gastos administrativos, materiales y financiamiento. Además, es necesario un ahorro previo para cumplir con el capital de integración exigido por el sistema.");

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