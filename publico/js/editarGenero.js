"use strict"

let btnEdit = document.querySelectorAll(".btnEditar-js");
for(let i=0; i<btnEdit.length;i++){
    btnEdit[i].addEventListener("click", function (){
        let tds = btnEdit[i].closest("tr").querySelectorAll("td");
        let id = btnEdit[i].getAttribute("id");
        mostrarModal(tds, id);
    });
}


document.querySelector(".btn-cancelar").addEventListener("click", ocultarModal);

let box = document.querySelector("#box-editarGen");
/** método que:
 * agrega a la ventana modal la clase show para hacerla visible
 * toma el nombre que posee el td indicador de género y lo pasa al input de la ventana
 * 
 */
 
function mostrarModal(tds, id) {
    box.classList.add("show-windows");
    box.classList.remove("hidden-windows");

    let nombre = tds[0].innerHTML;
    let editar = document.querySelector(".input-editar");
    editar.value= nombre;
    document.querySelector(".btn-guardar").setAttribute("value", id);
}

function ocultarModal(){
    box.classList.add("hidden-windows");
    box.classList.remove("show-windows");
}




