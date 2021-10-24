
const bEliminar = document.querySelectorAll("#bEliminar");
const bEditar = document.querySelectorAll("#bEditar");

bEliminar.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.cif;
        const confirm = window.confirm("Estas seguro de eliminar al alumno " + id + "?")

        if(confirm){
            httpRequest("http://localhost/ProyectoFinal/aseguradoras/eliminarAseguradora/" + id, function(e){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-danger" role="alert">Aseguradora eliminada correctamente</p>';
                const card = document.querySelector("#card-id");

                card.remove();
            });
        }
    })
})

bEditar.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.cif;

        httpRequest("http://localhost/ProyectoFinal/aseguradoras/verAseguradora/" + id, function(e){
            window.location.href = e.responseURL;    
        })
    })
})

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    console.log(http)
    http.onreadystatechange = () => {
        if(http.readyState == 4 && http.status == 200){
            console.log(callback);
            callback(http);
        }
    }
}

function actualizar(){
    let form = document.getElementById('actualizar-aseguradora');
    console.log(form);
    form.addEventListener("submit", enviarFormulario(), false);
}

function obtenerDatos(){
    var formData = new FormData();
    formData.append("nombre", document.getElementsByName('nombre')[0].value);
    formData.append("cif", document.getElementsByName('cif')[0].value);
    formData.append("direccion", document.getElementsByName('direccion')[0].value);
    formData.append("localidad", document.getElementsByName('localidad')[0].value);
    formData.append("cp", document.getElementsByName('cp')[0].value);
    formData.append("telefono", document.getElementsByName('telefono')[0].value);
    formData.append("email", document.getElementsByName('email')[0].value);
    formData.append("contacto", document.getElementsByName('contacto')[0].value);
    return formData;
}

function enviarFormulario(){
    const http = new XMLHttpRequest();
    http.open("POST", "http://localhost/ProyectoFinal/aseguradoras/actualizarAseguradora");
    http.send(obtenerDatos());
    console.log(http);
    http.onreadystatechange = () => {
        if(http.readyState === 4 && http.status === 200){
            document.querySelector("#respuesta").innerHTML = '<p class="alert alert-info" role="alert">Aseguradora actualizada correctamente</p>';
        }
    }
}