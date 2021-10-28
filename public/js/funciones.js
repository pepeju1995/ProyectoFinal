const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const obtenerDatos = () => {
    let datos = new FormData();
    inputs.forEach((input) => {
        datos.append(input.name, input.value);
    })
    return datos;
}

const enviarFormularioLogin = () => {
    const http = new XMLHttpRequest();
    http.open("POST", "http://localhost/ProyectoFinal/login/iniciarSesion");
    http.send(obtenerDatos());
    http.onreadystatechange = () => {
        if(http.readyState === 4){
            if(http.status !== 200){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Usuario y/o contraseña invalidos</p>';
            } else {
                var user = http.response.indexOf("admin");
                if(user === -1){
                    window.location.href ="http://localhost/ProyectoFinal/asegurados/verAsegurados";
                } else{
                    window.location.href ="http://localhost/ProyectoFinal/aseguradoras/verAseguradoras";
                }
            }            
        }
    }
}

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    enviarFormularioLogin();
})


