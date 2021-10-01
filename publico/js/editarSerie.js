"use strict"

let btnEditSer = document.querySelectorAll(".btnEditarSer-js");
for(let i=0; i<btnEditSer.length;i++){
    btnEditSer[i].addEventListener("click", function (){
        let tds = btnEditSer[i].closest("tr").querySelectorAll("td");
        let id = btnEditSer[i].getAttribute("id");
        mostrarModalSerie(tds, id);
    });
}

document.querySelector(".btn-cancelarSer").addEventListener("click", ocultarModal);

let boxSerie = document.querySelector("#box-editarSerie");
/**   método que:
 * agrega a la ventana modal de editar serie la clase show para hacerla visible
 * toma los datos que poseen los tds indicadores de series y los pasa a los inputs de la ventana
 * 
 */
 
function mostrarModalSerie(tds, id) {
    boxSerie.classList.add("show-windows");
    boxSerie.classList.remove("hidden-windows");
    imprimirDatos(tds);
    
    document.querySelector(".btn-guardarSer").setAttribute("value", id);
}
function imprimirDatos(tds){
    let editarSer = document.querySelectorAll(".input-editarSer");

    // Nombre serie
    let nombre = tds[0].innerHTML;
    editarSer[0].value= nombre;

    // sinopsis
    let sinopsis = tds[1].innerHTML;
    editarSer[1].value= sinopsis;
    // actor
    let actor = tds[3].innerHTML;
    editarSer[3].value= actor;

    // opcion genero existente
    let opcion = tds[4].innerHTML;
    let opcionExistente = document.querySelector(".opcionExistente");
    opcionExistente.innerHTML = opcion;
    opcionExistente.setAttribute("value", tds[4].getAttribute("id"));
}
function ocultarModal(){
    boxSerie.classList.add("hidden-windows");
    boxSerie.classList.remove("show-windows");
}