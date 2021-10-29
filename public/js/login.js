import { obtenerDatos } from "./funciones.js";

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const enviarFormularioLogin = () => {
    const http = new XMLHttpRequest();
    const datos = obtenerDatos(inputs);
    http.open("POST", "http://localhost/ProyectoFinal/login/iniciarSesion");
    http.send(datos);
    http.onreadystatechange = () => {
        if(http.readyState === 4){
            console.log(http)
            if(http.status !== 200){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Usuario y/o contraseña invalidos</p>';
            } else {
                if(datos.get('usuario') !== 'admin'){
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
