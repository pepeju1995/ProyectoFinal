import { enviarFormulario } from "./funciones.js";

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