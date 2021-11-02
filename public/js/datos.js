const expresiones = {
    empresa: /^[a-zA-Z0-9 ]{4,40}$/,
    cif: /^([0-9]{8}|[a-zA-Z]{1})([a-zA-Z0-9]{1}|[0-9]{8})$/,
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
    contraseña: false,
    cif: false,
    direccion: false,
    localidad: false,
    cp: false,
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

export {expresiones, camposAseguradora, validarCampo, validarContraseña};