const expresiones = {
    nif: /^([0-9]{8}|[a-zA-Z]{1})([a-zA-Z0-9]{1}|[0-9]{8})$/,
    password: /^.{4,16}$/,
    direccion: /^[a-zA-Z ]{4,45}[,]{1}[ 0-9]{2,4}$/,
    localidad: /^[a-zA-Z ]{3,30}$/,
    cp: /^[0-9]{5}$/,
    telefono: /^[0-9]{9}$/,
    email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
    nombre: /^[a-zA-Z ]{4,30}$/,
    descripcion: /^[a-zA-Z .,]{20,255}$/
};

const camposAseguradora = {
    nombre: false,
    apellido: false,
    contraseña: false,
    nif: false,
    direccion: false,
    localidad: false,
    cp: false,
    direccion_rep: false,
    localidad_rep: false,
    cp_rep: false,
    telefono: false,
    email: false,
    contacto: false
};

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(campo).classList.remove('is-invalid');
        document.getElementById(campo).classList.add('is-valid');
        document.getElementById(`${campo}-valido`).classList.add('ocultar-requisitos');
        camposAseguradora[campo] = true;
    } else {
        document.getElementById(campo).classList.remove('is-valid');
        document.getElementById(campo).classList.add('is-invalid');
        document.getElementById(`${campo}-valido`).classList.remove('ocultar-requisitos');
        camposAseguradora[campo] = false;
    }
}

const validarContraseña = () => {
    const pass = document.getElementById('contraseña');
    const passRep = document.getElementById('contraseña2');

    if (pass.value !== passRep.value){
        document.getElementById('contraseña2').classList.remove('is-valid');
        document.getElementById('contraseña2').classList.add('is-invalid');
        document.getElementById('contraseña2-valido').classList.remove('ocultar-requisitos');
        camposAseguradora["contraseña"] = false;
    } else {
        document.getElementById('contraseña2').classList.add('is-valid');
        document.getElementById('contraseña2').classList.remove('is-invalid');
        document.getElementById('contraseña2-valido').classList.add('ocultar-requisitos');
        camposAseguradora["contraseña"] = true;
    }
}

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
        break;

        case "apellido":
            validarCampo(expresiones.nombre, e.target, 'apellido');
        break;

        case "contraseña":
            validarCampo(expresiones.password, e.target, 'contraseña');
            validarContraseña();
        break;

        case "contraseña2":
            validarContraseña();
        break;

        case "nif":
            validarCampo(expresiones.nif, e.target, 'nif');
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

        case "direccion_rep":
            validarCampo(expresiones.direccion, e.target, 'direccion_rep');
        break;

        case "localidad_rep":
            validarCampo(expresiones.localidad, e.target, 'localidad_rep');
        break;

        case "cp_rep":
            validarCampo(expresiones.cp, e.target, 'cp_rep');
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

const enviarFormulario = (url, accion, inputs) => {
    const http = new XMLHttpRequest();
    http.open("POST", url);
    http.send(obtenerDatos(inputs));
    http.onreadystatechange = () => {
        if(http.readyState === 4){
            if(http.status === 200){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-success" role="alert">' + accion[0] + '</p>';
            } else {
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">' + accion[1] + '</p>';
            }
        }
    }
}

const obtenerDatos = (inputs) => {
    var datos = new FormData();
    inputs.forEach((input) => {
        datos.append(input.name, input.value);
    })
    return datos;
}

export {
    expresiones, 
    camposAseguradora, 
    validarCampo, 
    validarContraseña, 
    validarFormulario, 
    obtenerDatos, 
    enviarFormulario
};