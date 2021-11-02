import { validarFormulario, camposAseguradora, enviarFormulario} from "./funciones.js";

const formulario = document.getElementById("crearAsegurado");
const inputs = document.querySelectorAll("#crearAsegurado input");

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    if(camposAseguradora.nombre && camposAseguradora.apellido && camposAseguradora.nif && camposAseguradora.direccion 
        && camposAseguradora.localidad && camposAseguradora.cp && camposAseguradora.telefono 
        && camposAseguradora.direccion_rep && camposAseguradora.localidad_rep && camposAseguradora.cp_rep){
        enviarFormulario("http://localhost/ProyectoFinal/asegurados/crearAsegurado", ["Asegurado creado correctamente", "No es posible crear el asegurado"], inputs);

        document.querySelectorAll('.form-control').forEach((estilo) => {
            estilo.classList.remove('is-valid');
        })
        
        formulario.reset();
    } else {
        document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Debe rellenar todos los campos correctamente</p>';
    }
});