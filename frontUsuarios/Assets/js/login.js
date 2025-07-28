//Login
document.getElementById('formLogin').addEventListener('submit', function (e) {
    e.preventDefault();
    const form = e.target;
    const data = {
        usr_email: form.usr_email_login.value,
        usr_pass: form.usr_pass_login.value
    };
    fetch('http://localhost/programacionFullStack/frontUsuarios/Back/API_Usuarios/api.php/login', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Inicio de sesión exitoso');
                window.location.href = 'http://localhost/programacionFullStack/frontUsuarios/Front/pages/cooperativa.php';
            } else {
                alert('Error al iniciar sesión: ' + data.error);
            }
        })
        .catch(error => {
            alert('Error al iniciar sesión');
            console.error(error);
        });
});