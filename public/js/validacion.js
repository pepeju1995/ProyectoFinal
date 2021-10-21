document.addEventListener("DOMContentLoaded", () => {
    document.getElementById("formulario").addEventListener('submit', validarFormulario);
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
}