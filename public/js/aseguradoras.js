import { validarFormulario, camposAseguradora, enviarFormulario} from "./funciones.js";

const bEliminar = document.querySelectorAll("#bEliminar");

if(document.getElementById("editarAseguradora")){
    const formulario = document.getElementById("editarAseguradora");
    const inputs = document.querySelectorAll("#editarAseguradora input");

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    })

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        enviarFormulario("http://localhost/ProyectoFinal/aseguradoras/actualizarAseguradora", ["Aseguradora actualizada correctamente", "No es posible actualizar"], inputs);
    })
}

if(document.getElementById('crearAseguradora')){
    const formulario = document.getElementById('crearAseguradora');
    const inputs = document.querySelectorAll('#crearAseguradora input');

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    })

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        if(camposAseguradora.nombre && camposAseguradora.contraseña && camposAseguradora.nif && camposAseguradora.direccion && camposAseguradora.localidad && camposAseguradora.cp && camposAseguradora.telefono && camposAseguradora.email && camposAseguradora.contacto){
            enviarFormulario("http://localhost/ProyectoFinal/aseguradoras/crearAseguradora", ["Aseguradora creada correctamente", "No es posible crear la aseguradora"], inputs);
    
            document.querySelectorAll('.form-control').forEach((estilo) => {
                estilo.classList.remove('is-valid');
            })
            
            formulario.reset();
        } else {
            document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Debe rellenar todos los camposAseguradora correctamente</p>';
        }
    });
}

bEliminar.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.nif;
        const confirm = window.confirm("Estas seguro de eliminar la aseguradora " + id + "?")

        if(confirm){
            const url = "http://localhost/ProyectoFinal/aseguradoras/eliminarAseguradora/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url);
            http.send();
            http.onreadystatechange = () => {
                if(http.readyState === 4){
                    if(http.status === 200){
                        document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Aseguradora eliminada correctamente</p>';
                        const card = document.querySelector("#card-" + id);

                        card.remove();
                    } else {
                        document.querySelector("#respuesta").innerHTML = '<p class="alert alert-danger" role="alert">No es posible eliminar la aseguradora</p>';
                    }
                }
            }
        }
    })
})