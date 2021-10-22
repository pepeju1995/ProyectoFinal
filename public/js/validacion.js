const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    empresa: /^[a-zA-Z0-9 ]{4,40}$/,
    cif: /^[0-9]{8}$[a-zA-Z]{1}$/,
    password: /^.{4,12}$/,
}

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(campo).classList.remove('is-invalid');
        document.getElementById(campo).classList.add('is-valid');
        document.getElementById(`${campo}-valido`).classList.add('ocultar-requisitos');
    } else {
        document.getElementById(campo).classList.remove('is-valid');
        document.getElementById(campo).classList.add('is-invalid');
        document.getElementById(`${campo}-valido`).classList.remove('ocultar-requisitos');
    }
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.empresa, e.target, 'nombre')
        break;

        case "contraseña":

            break;
        case "contraseña-rep":

            break;
        case "cif":

            break;
        case "direccion":

            break;
        case "localidad":

            break;
        case "codigopostal":

            break;
        case "telefono":

            break;
        case "email":

            break;
        case "contacto":

            break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
});


/*
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("formulario").addEventListener('change', validarFormulario);
})

function validarFormulario (evento) {
    evento.preventDefault();
    let usuario = document.getElementById('nombre').value;
    if(usuario.length <= 40){
        if(usuario.length === 0){
            alert('El campo esta vacio.')
            return;
        }
    } else {
        alert('El nombre es demasiado largo');
        return;
    }

    let pass = document.getElementById('contraseña').value;
    let pass_rep = document.getElementById('contraseña-rep').value;
    console.log(pass);
    console.log(pass_rep);
    if(pass !== pass_rep){
        alert('Las contraseñas no coinciden')
        return;
    } else {
        if(pass.length === 0){
            alert('Debe introducir una contraseña')
            return;
        }
        if(pass_rep.length === 0){
            alert('Debe repetir la contraseña')
            return;
        }
    }

    let cif = document.getElementById('cif').value;
    if(cif.length < 9){
        if(cif.length === 0){
            alert('El campo esta vacio.')
            return;
        }
    }
    if(cif.length > 9){
        alert('El cif es demasiado largo');
        return;
    }
    this.submit();
}*/