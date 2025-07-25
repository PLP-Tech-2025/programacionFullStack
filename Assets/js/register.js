//Registro Landing
document.getElementById('formLanding').addEventListener('submit', function (e) {
    e.preventDefault();
    const form = e.target;
    const fileInput = form.imagen;
    const file = fileInput.files[0];

    if (form.usr_pass.value != form.usr_passVer.value) {
        alert("Las contraseñas no son iguales");
        return;
    }

    const reader = new FileReader();
    reader.onload = function (event) {
        const data = {
            usr_nombre: form.usr_nombre.value,
            usr_apellido: form.usr_apellido.value,
            usr_ci: form.usr_ci.value,
            usr_nac: form.usr_nac.value,
            usr_email: form.usr_email.value,
            usr_pass: form.usr_pass.value,
            usr_tel: form.usr_tel.value,
            imagen: event.target.result // base64
        };

        console.log(JSON.stringify(data));

        fetch('http://localhost/programacionFullStack/Back/API_Usuarios/api.php/usuarios', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        })
            .then(response => response.json())
            .then(data => {
                alert('Usuario registrado correctamente');
                location.reload();
            })
            .catch(error => {
                alert('Error al registrar usuario');
                console.error(error);
            });
    };
    reader.readAsDataURL(file);
});

// Define la URL de la API
const apiUrl = 'http://localhost/programacionFullStack/Back/API_Usuarios/api.php/usuarios';
// Ejecuta la solicitud GET a la API para obtener los usuarios
fetch(apiUrl)
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .catch(error => {
        console.error('Error:', error);
    });
