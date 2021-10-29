import { enviarFormulario } from "./funciones.js";

const formulario = document.getElementById("formulario");
const inputs = document.querySelectorAll("#formulario input");

formulario.addEventListener('submit', (e) => {
    e.preventDefault();
    enviarFormulario("http://localhost/ProyectoFinal/aseguradoras/actualizarAseguradora", ["Aseguradora actualizada correctamente", "No es posible actualizar"], inputs);
})