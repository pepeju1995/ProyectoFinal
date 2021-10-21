
const bEliminar = document.querySelectorAll("#bEliminar");
const bEditar = document.querySelectorAll("#bEditar");

bEliminar.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.cif;
        const confirm = window.confirm("Estas seguro de eliminar al alumno " + id + "?")

        if(confirm){
            httpRequest("http://localhost/ProyectoFinal/aseguradoras/eliminarAseguradora/" + id, function(e){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-danger" role="alert">Aseguradora eliminada correctamente</p>';
                const tbody = document.querySelector("#tbody-aseguradoras");
                const fila = document.querySelector("#fila-" + id);

                tbody.removeChild(fila);
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
    let data = [];
    data.push(document.getElementsByName('nombre')[0].value);
    data.push(document.getElementsByName('direccion')[0].value);
    data.push(document.getElementsByName('localidad')[0].value);
    data.push(document.getElementsByName('codigopostal')[0].value);
    data.push(document.getElementsByName('telefono')[0].value);
    data.push(document.getElementsByName('email')[0].value);
    data.push(document.getElementsByName('contacto')[0].value);
    console.log(data);
    return data;
}

function enviarFormulario(){
    const http = new XMLHttpRequest();
    http.open("POST", "http://localhost/ProyectoFinal/aseguradoras/actualizarAseguradora");
    http.send(obtenerDatos());
    console.log(http);
    http.onreadystatechange = () => {
        if(http.readyState === 4 && http.status === 200){
            document.querySelector("#respuesta").innerHTML = '<p class="alert alert-info" role="alert">Aseguradora actualizada correctamente</p>'
        }
    }
}