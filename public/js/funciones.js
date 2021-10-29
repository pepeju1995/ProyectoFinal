const enviarFormulario = (url, accion, inputs) => {
    const http = new XMLHttpRequest();
    http.open("POST", url);
    http.send(obtenerDatos(inputs));
    http.onreadystatechange = () => {
        if(http.readyState === 4){
            if(http.status === 200){
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-success" role="alert">' + accion[0] + '</p>';
            } else {
                document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">' + accion[1] + '</p>';
            }
        }
    }
}

const obtenerDatos = (inputs) => {
    var datos = new FormData();
    inputs.forEach((input) => {
        datos.append(input.name, input.value);
    })
    console.log(datos.get('usuario'))
    return datos;
}

export {obtenerDatos, enviarFormulario};
