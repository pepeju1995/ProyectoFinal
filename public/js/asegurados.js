import { validarFormulario, camposAseguradora, enviarFormulario} from "./funciones.js";

const bEliminar = document.querySelectorAll("#bEliminar");


if(document.getElementById("editarAsegurado")){
    const formulario = document.getElementById("editarAsegurado");
    const inputs = document.querySelectorAll("#editarAsegurado input");

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    })

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        enviarFormulario("http://localhost/ProyectoFinal/asegurados/actualizarAsegurado", ["Asegurado actualizado correctamente", "No es posible actualizar el asegurado"], inputs);
    });

}

if(document.getElementById("crearAsegurado")){
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
}


bEliminar.forEach(boton => {
    boton.addEventListener("click", () =>{
        const id = boton.dataset.nif;
        const confirm = window.confirm("Estas seguro de eliminar el asegurado " + id + "?")

        if(confirm){
            const url = "http://localhost/ProyectoFinal/asegurados/eliminarAsegurado/" + id;
            const http = new XMLHttpRequest();
            http.open("GET", url);
            http.send();
            http.onreadystatechange = () => {
                if(http.readyState === 4){
                    if(http.status === 200){
                        document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Asegurado eliminado correctamente</p>';
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