const formulario = document.getElementById('formulario');
const inputs = document.querySelectorAll('#formulario input');

const expresiones = {
    aseguradora: /^[a-zA-Z0-9 ]{4,40}$/,
    cif: /^[0-9]{8}[a-zA-Z]{1}$/,
    password: /^.{4,16}$/,
    direccion: /^[a-zA-Z ]{4,45}[,]{1}[ 0-9]{2,4}$/,
    localidad: /^[a-zA-Z ]{3,30}$/,
    cp: /^[0-9]{5}$/,
    telefono: /^[0-9]{9}$/,
    email: /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/,
    contacto: /^[a-zA-Z ]{4,30}$/
};

const campos = {
    nombre: false,
    contraseña: false,
    cif: false,
    direccion: false,
    localidad: false,
    cp: false,
    telefono: false,
    email: false,
    contacto: false
};

const validarFormulario = (e) => {
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.aseguradora, e.target, 'nombre');
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
            validarCampo(expresiones.contacto, e.target, 'contacto');
        break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if(expresion.test(input.value)){
        document.getElementById(campo).classList.remove('is-invalid');
        document.getElementById(campo).classList.add('is-valid');
        document.getElementById(`${campo}-valido`).classList.add('ocultar-requisitos');
        campos[campo] = true;
    } else {
        document.getElementById(campo).classList.remove('is-valid');
        document.getElementById(campo).classList.add('is-invalid');
        document.getElementById(`${campo}-valido`).classList.remove('ocultar-requisitos');
    }
}

const validarContraseña = () => {
    const pass = document.getElementById('contraseña');
    const passRep = document.getElementById('contraseña2');

    if (pass.value !== passRep.value){
        document.getElementById('contraseña2').classList.remove('is-valid');
        document.getElementById('contraseña2').classList.add('is-invalid');
        document.getElementById('contraseña2-valido').classList.remove('ocultar-requisitos');
        campos["contraseña"] = false;
    } else {
        document.getElementById('contraseña2').classList.add('is-valid');
        document.getElementById('contraseña2').classList.remove('is-invalid');
        document.getElementById('contraseña2-valido').classList.add('ocultar-requisitos');
        campos["contraseña"] = true;
    }
}

const obtenerDatos = () => {
    let formData = new FormData();
    inputs.forEach((input) => {
        formData.append(input.name, input.value);
    })
    return formData;
}

const enviarFormularioAseguradora = () => {
    const http = new XMLHttpRequest();
    http.open("POST", "http://localhost/ProyectoFinal/aseguradoras/crearAseguradora");
    http.send(obtenerDatosAseguradora());
    console.log(http)
    http.onreadystatechange = () => {
        if(http.readyState === 4){
            if(http.status === 200){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-success" role="alert">Aseguradora creada correctamente</p>';
            } else {
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Tenemos un error</p>';
            }
        }
    }
}

const enviarFormulario = (url, accion) => {
    const http = new XMLHttpRequest();
    http.open("POST", url);
    http.send(obtenerDatos());
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

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
})

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    if(campos.nombre && campos.contraseña && campos.cif && campos.direccion && campos.localidad && campos.cp && campos.telefono && campos.email && campos.contacto){
        //enviarFormularioAseguradora();
        enviarFormulario("http://localhost/ProyectoFinal/aseguradoras/crearAseguradora", ["Aseguradora creada correctamente", "No es posible crear la aseguradora"]);

        document.querySelectorAll('.form-control').forEach((estilo) => {
            estilo.classList.remove('is-valid');
        })
        
        formulario.reset();
    } else {
        document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Debe rellenar todos los campos correctamente</p>';
    }
});
