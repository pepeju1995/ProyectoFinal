const bEliminar = document.querySelectorAll("#bEliminar");

bEliminar.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.cif;
        const confirm = window.confirm("Estas seguro de eliminar la aseguradora " + id + "?")

        if(confirm){
            httpRequest("http://localhost/ProyectoFinal/aseguradoras/eliminarAseguradora/" + id, function(e){
                if(e.status === 200){
                    document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">Aseguradora eliminada correctamente</p>';
                    const card = document.querySelector("#card-" + id);

                    card.remove();
                } else {
                    document.querySelector("#respuesta").innerHTML = '<p class="alert alert-danger" role="alert">No es posible eliminar la aseguradora</p>';
                }
            });
        }
    })
})

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    http.onreadystatechange = () => {
        if(http.readyState == 4){
            callback(http);
        }
    }
}