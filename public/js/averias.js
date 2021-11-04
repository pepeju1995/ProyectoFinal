import { enviarFormulario, busqueda } from "./funciones.js";

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
            document.querySelector("#respuesta").innerHTML = '<p id="alert" class="alert alert-warning" role="alert">No existen averias con esos parametros</p>';
        } else {
            if(document.getElementById("respuesta").childNodes.length > 0){
                let parent = document.getElementById("respuesta");
                parent.removeChild(document.getElementById("alert"));
            }
        }
    })
}


if(document.getElementById("crearAveria")){
    const formulario = document.getElementById("crearAveria");
    const inputs = [];
    inputs.push(formulario.querySelectorAll("input")[0]);
    inputs.push(document.getElementById("descripcion"));

    formulario.addEventListener('submit', (e) => {
        e.preventDefault();
        if(inputs[1].value !== ""){
            enviarFormulario("http://localhost/ProyectoFinal/averias/crearAveria", ["Averia creada correctamente", "No es posible crear Averia"], inputs);
        } else {
            document.querySelector("#respuesta").innerHTML = '<p class="alert alert-warning" role="alert">No es pusible crear la averia</p>';
        }
    })

}