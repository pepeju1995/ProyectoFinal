
const bEliminar = document.querySelectorAll("#bEliminar");
const bEditar = document.querySelectorAll("#bEditar");
const bActualizar = document.querySelectorAll("#bActualizar");

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

bActualizar.forEach(boton => {
    boton.addEventListener("click", () => {
        httpRequest("http://localhost/ProyectoFinal/aseguradoras/actualizarAseguradora", function(e){
            document.querySelector("#respuesta").innerHTML = '<p class="alert alert-info" role="alert">Aseguradora actualizada correctamente</p>';    
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