import { obtenerDatos } from "./funciones.js";

const formulario = document.getElementById('login');
const inputs = document.querySelectorAll('#login input');

const enviarFormularioLogin = (inputs) => {
    const http = new XMLHttpRequest();
    const datos = obtenerDatos(inputs);
    http.open("POST", "http://localhost/ProyectoFinal/login/iniciarSesion");
    http.send(datos);
    http.onreadystatechange = () => {
        if(http.readyState === 4){
            if(http.status === 200){
                if(datos.get('usuario') !== 'admin'){
                    window.location.href ="http://localhost/ProyectoFinal/asegurados/verAsegurados";
                } else{
                    window.location.href ="http://localhost/ProyectoFinal/aseguradoras/verAseguradoras";
                }   
            } else { 
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Usuario y/o contraseña invalidos</p>';
            }
        }  
    }
}

formulario.addEventListener("submit", (e) => {
    e.preventDefault();
    enviarFormularioLogin(inputs);
})
