import { validarFormulario, busqueda, camposAseguradora, enviarFormulario} from "./funciones.js";

const bEliminar = document.querySelectorAll("#bEliminar");

if(document.getElementById("busqueda")){
    const search = document.getElementById("busqueda");
    const items = document.querySelectorAll("#items .card");
    const childs = items.length;
    let numChilds = 0;
    
    search.addEventListener("keyup", (e) => {
        items.forEach((item) => {
            numChilds = busqueda(e, item, numChilds)
        })
        if(childs === numChilds){
            document.querySelector("#respuesta").innerHTML = '<p id="alert" class="alert alert-warning" role="alert">No existen asegurados con ese NIF</p>';
        } else {
            if(document.getElementById("respuesta").childNodes.length > 0){
                let parent = document.getElementById("respuesta");
                parent.removeChild(document.getElementById("alert"));
            }
        }
    })
}


if(document.getElementById("editarAsegurado")){
    const formulario = document.getElementById("editarAsegurado");
    const inputs = document.querySelectorAll("#editarAsegurado input");

    inputs.forEach((input) => {
        input.addEventListener('keyup', validarFormulario);
        input.addEventListener('blur', validarFormulario);
    })

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        enviarFormulario("http://localhost/insurance-companies/asegurados/actualizarAsegurado", ["Asegurado actualizado correctamente", "No es posible actualizar el asegurado"], inputs);
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
                enviarFormulario("http://localhost/insurance-companies/asegurados/crearAsegurado", ["Asegurado creado correctamente", "No es posible crear el asegurado"], inputs);
    
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
            const url = "http://localhost/insurance-companies/asegurados/eliminarAsegurado/" + id;
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