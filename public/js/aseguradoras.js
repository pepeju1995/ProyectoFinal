const bEliminar = document.querySelectorAll("#bEliminar");
const bEditar = document.querySelectorAll("#bEditar");

bEliminar.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.cif;
        const confirm = window.confirm("Estas seguro de eliminar al alumno " + id + "?")

        if(confirm){
            httpRequest("http://localhost/ProyectoFinal/aseguradoras/eliminarAseguradora/" + id, function(e){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-danger" role="alert">Aseguradora eliminada correctamente</p>';
                const card = document.querySelector("#card-" + id);

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