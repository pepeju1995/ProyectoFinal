
const botones = document.querySelectorAll(".bEliminar");

botones.forEach(boton => {
    boton.addEventListener("click", () => {
        const id = boton.dataset.cif;

        const confirm = window.confirm("Estas seguro de eliminar al alumno " + id + "?")

        if(confirm){
            httpRequest("http://localhost/ProyectoFinal/aseguradoras/eliminarAseguradora/" + id, function(e){
                document.querySelector("#respuesta").innerHTML = "Aseguradora eliminada correctamente";
                const tbody = document.querySelector("#tbody-aseguradoras");
                const fila = document.querySelector("#fila-" + id);

                tbody.removeChild(fila);
            });
        }
    })
})

function httpRequest(url, callback){
    const http = new XMLHttpRequest();
    http.open("GET", url);
    http.send();
    http.onreadystatechange = () => {
        if(http.readyState == 4 && http.status == 200){
            callback.apply(http);
        }
    }
}