import { enviarFormulario } from "./funciones.js";
import { expresiones, camposAseguradora, validarCampo, validarContraseña } from "./datos.js";

const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.empresa, e.target, 'nombre');
        break;

        case "contraseña":
            validarCampo(expresiones.password, e.target, 'contraseña');
            validarContraseña();
        break;

        case "contraseña2":
            validarContraseña();
        break;

        case "cif":
            validarCampo(expresiones.cif, e.target, 'cif');
        break;

        case "direccion":
            validarCampo(expresiones.direccion, e.target, 'direccion');
        break;

        case "localidad":
            validarCampo(expresiones.localidad, e.target, 'localidad');
        break;

        case "cp":
            validarCampo(expresiones.cp, e.target, 'cp');
        break;

        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
        break;

        case "email":
            validarCampo(expresiones.email, e.target, 'email');
        break;

        case "contacto":
            validarCampo(expresiones.nombre, e.target, 'contacto');
        break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    if(camposAseguradora.nombre && camposAseguradora.contraseña && camposAseguradora.cif && camposAseguradora.direccion && camposAseguradora.localidad && camposAseguradora.cp && camposAseguradora.telefono && camposAseguradora.email && camposAseguradora.contacto){
        enviarFormulario("http://localhost/ProyectoFinal/aseguradoras/crearAseguradora", ["Aseguradora creada correctamente", "No es posible crear la aseguradora"], inputs);

        document.querySelectorAll('.form-control').forEach((estilo) => {
            estilo.classList.remove('is-valid');
        })
        
        formulario.reset();
    } else {
        document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Debe rellenar todos los camposAseguradora correctamente</p>';
    }
});
